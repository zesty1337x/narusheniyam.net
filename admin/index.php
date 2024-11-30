<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Нарушениям.Нет</title>
</head>
<body>
    <?php
        session_start();
            if ($_SESSION['role'] != "Администратор") {
                header("Location: /profile/");
                exit;
            }

        include "../inc/header.php";
        include "../function/function.php";
    ?>

    <section class="page" style="padding-bottom: 5%;">
        <div class="container p-3">
            <h1 class="text-center mb-3 text-success-emphasis display-1">Панель администратора</h1>
            <?php echo fnGetCardAdmin(); ?>
        </div>
    </section>

    <?php
        include "../inc/footer.php";
    ?>
</body>
</html>




