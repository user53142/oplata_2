<?php

    /////////////////////////////////////////////
    //                                         //
    //         AvitoGrabber PHP class          //
    //                                         //
    //        Created and developed by         //
    //            Ichigo Firelight             //
    //                                         //
    /////////////////////////////////////////////

    class AvitoGrabber {
        private $url;

        private $page;
        private $data;

        public function __construct($url){
            $this->url = $url;
        }

        public function Grab(){
            include "proxy.php";

            $ch = curl_init($this->url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            if (isset($proxy_host) && $proxy_host != "")
                curl_setopt($ch, CURLOPT_PROXY, $proxy_host);

            if (isset($proxy_auth) && $proxy_auth != "")
                curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxy_auth);

            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36"
            ]);

            $this->page = curl_exec($ch);
            $error = curl_error($ch);
            curl_close($ch);

            if ($error)
                die("Failed to grab avito page: " . $error);

            if (!$this->page)
                die("Failed to grab avito page.");

            $this->data["page_title"] = $this->FastCut($this->page, "<title>", "</title>");

            $this->data["item"]["breadcrumbs"] = $this->ParseBreadcrumbs();

            $this->data["item"]["category"] = $this->data["item"]["breadcrumbs"][2]["text"];

            $this->data["item"]["title"] = $this->FastCut($this->page, '<span class="title-info-title-text" itemprop="name">', '</span>');
            $this->data["item"]["price"]["number"] = $this->FastCut($this->page, '<span class="js-item-price" content="', '"');
            $this->data["item"]["price"]["formatted"] = $this->FastCut($this->page, '<span class="js-item-price" content="' . $this->data["item"]["price"]["number"] . '" itemprop="price">', '</span>');
            $this->data["item"]["publish_date"] = str_replace("\n", "", $this->FastCut($this->page, '<div class="title-info-metadata-item-redesign">', '</div>'));
            $this->data["item"]["id"] = $this->FastCut($this->page, '<span data-marker="item-view/item-id">', '</span>');
        /*    
            
            if (strstr($this->page, 'class="title-info-metadata-item title-info-metadata-views"> <i class="title-info-icon-views"') !== false)
                $this->data["item"]["views"] = $this->FastCut($this->page, '<a href="#" class="js-show-stat" data-config=\'{ "type": "item", "url": "/items/stat/' . substr($this->data["item"]["id"], 4) . '" }\'>', '</a>');
            else
                $this->data["item"]["views"] = $this->FastCut($this->page, '<div class="title-info-metadata-item title-info-metadata-views">', '</div>');
             
*/
            $this->data["item"]["views"] = $this->FastCut($this->page, '<i class="title-info-icon-views"></i>', '</div>');

            $this->data["item"]["gallery"] = $this->ParseGallery();
            $this->data["item"]["location"] = $this->ParseLocation();
            $this->data["item"]["description"] = $this->ParseDescription();

            $this->data["seller"] = $this->ParseSeller();

            return $this->data;
        }

        private function ParseBreadcrumbs(){
            $inner = $this->FastCut($this->page, '<div class="breadcrumbs js-breadcrumbs ">', '</div>');
            $elements = $this->ToLinesArray($inner);

            $i = 0;
            $breadcrumbs = [];

            foreach ($elements as $element)
                if (strstr($element, "</a>") !== false){
                    $breadcrumbs[$i]["link"] = "https://avito.ru" . $this->FastCut($element, 'href="', '"');
                    $breadcrumbs[$i]["text"] = $this->FastCut($element, '" >', '</a>');
                    $breadcrumbs[$i]["title"] = $this->FastCut($element, 'title="', '" >');

                    $i++;
                }

            return $breadcrumbs;
        }

        private function ParseGallery(){
            if (strstr($this->page, '<ul class="gallery-list js-gallery-list">') !== false){
                $inner = $this->FastCut($this->page, '<ul class="gallery-list js-gallery-list">', '</ul>');
                $elements = $this->ToLinesArray($inner);

                $i = 0;
                $images = [];

                foreach ($elements as $element)
                    if (strstr($element, "</li>") !== false){
                        $link = "https://" . $this->FastCut($element, 'background-image: url(//', ');');

                        $images[$i]["full"] = str_replace("75x55", "1280x960", $link);
                        $images[$i]["medium"] = str_replace("75x55", "640x480", $link);
                        $images[$i]["thumbnail"] = $link;
                        $images[$i]["title"] = $this->FastCut($element, 'title="', '"');

                        $i++;
                    }

                return $images;
            } else {
                $link = $this->FastCut($this->page, '<span class="gallery-img-cover" style="background-image: url(\'', '\')');

                $images[0]["full"] = "https://" . str_replace("640x480", "1280x960", $link);
                $images[0]["medium"] = "https://" . $link;
                $images[0]["thumbnail"] = "https://" . str_replace("640x480", "75x55", $link);
                $images[0]["title"] = $this->data["item"]["title"];

                return $images;
            }
        }

        private function ParseLocation(){
            $location["address"] = str_replace("\n", "", $this->FastCut($this->page, '<span class="item-address__string" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">', '</span>'));
            $location["metro"]["color"] = $this->FastCut($this->page, '<i class="item-address-georeferences-item-icons__icon" style="background-color: ', '">');
            $location["metro"]["title"] = $this->FastCut($this->page, '<span class="item-address-georeferences-item__content">', '</span>');

            return $location;
        }

        private function ParseDescription(){
            $inner = $this->FastCut($this->page, '<div class="item-description"> <div class="item-description-text" itemprop="description">', '</div>');
            return $this->FastCut($inner, '<p>', '</p>');
        }

        private function ParseSeller(){
            $inner = $this->FastCut($this->page, '<div class="seller-info-name js-seller-info-name">', '</div>');

            $user["link"] = "https://avito.ru" . $this->FastCut($inner, '<a href="', '"');
            $user["name"] = str_replace("\n", "", $this->FastCut($inner, '">', '</a>'));
            $user["type"] = str_replace("\n", "", str_replace("<div>", "", explode('</div>', explode('<div class="seller-info-col">', $this->page)[1])[2]));
            $user["date"] = "На Авито c" . $this->FastCut($this->page, 'На Авито c', '</div>');

            $inner = $this->FastCut($this->page, 'class="seller-info-avatar-image  js-public-profile-link"', '</a>');

            $user["image"] = $this->FastCut($inner, 'style="background-image: url(\'', '\')"');

            return $user;
        }

        private function ToLinesArray($data){
            return explode("\n", $data);
        }

        private function FastCut($data, $from, $to){
            return explode($to, explode($from, $data)[1])[0];
        }
    }

?>