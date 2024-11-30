<?php
 session_start();

 if(!isset($_SESSION['login'])){
   header("Location: /auth/");
   exit;
   }

include "../function/connect.php";
include '../function/function.php';
include "../inc/header.php";
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Нарушениям.Нет</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>

 <section class="page" >
 <div class="container p-3">
 <h1 class="text-center mb-3 text-success-emphasis display-1">Личный кабинет</h1>

<?php
echo fnGetProfile($_SESSION['login']);
echo fnGetCardProfile($_SESSION['login']);
?>

 <a href="/application/"
 class="btn btn-success mb-3 mt-3 w-100 shadow-sm p-3 fs-2 rounded-pill fw-bold">
 Подать заявление
 </a>
 </form>
 </div>
 </section>
    
 </body>
 </html>
 
 <?php
 include "../inc/footer.php";
 ?>