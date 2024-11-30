<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Нарушениям.Нет</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-success">

    <?php
    session_start();
    include "inc/header.php";
    ?>

    <div class="container p-5 text-center">
        <h1 class="mt-3 mb-4 text-white display-1">
            Нарушениям.Нет
        </h1>
        <p class="p-1 pt-4 display-6 text-light">
            Наш портал представляет собой информационную систему для помощи полиции по
            своевременной фиксации нарушений правил дорожного движения.
        </p>
    </div>

    <div class="container p-2 mb-5 text-center">
        <a href="/auth/" class="btn btn-success text-success-emphasis bg-light
        w-75 p-3 fs-2 rounded-pill fw-bold shadow-lg">
        Подать заявление
        </a>
    <h2 class="display-4 mt-5 text-white">
        Будь ответственным гражданином!
    </h2>
    </div> 

    <?php
    include "inc/footer.php";
    ?>
</body>
</html>
