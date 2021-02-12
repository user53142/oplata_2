<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Генератор</title>

    <!-- Favicon -->
    <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="/assets/css/argon.css" rel="stylesheet">
</head>
<body>
<form action="/" method="POST">
<div class="row">
        <div class="mt-5 col-xl-5 center">

            <div class="form-group">
                <input type="text" class="form-control" required name="nameProduct" placeholder="Название продукта">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" required name="price" placeholder="Цена ₽">
            </div>
            <div class="row">
                <div class="col-xl-6">
                <div class="form-group">
                        <input type="url" class="form-control" required name="link" placeholder="Ссылка">
                </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="comment" placeholder="Небольшой коментарий (не обязательно)">
                    </div>
                </div>
                <div class="col-xl-12 center">
                    <button type="submit" class="btn btn-block btn-success">Сгенерировать</button>
                </div>
            </div>
    </div>
</div>
</form>
<div class="row center mt-5">
    <div class="col-xl-11">

        <div class="alert alert-success" role="alert">
            <strong>Ссылка сгенерированна</strong> <a href="#">https://avito.ru.miscow.avtio.server.pubggg.ru</a>
        </div>

    </div>
</div>


<!-- Core -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/popper/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/argon.js"></script>
</body>
</html>