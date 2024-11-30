<?php
$menu = "";
if(isset($_SESSION['login'])){
if($_SESSION['role'] == "Администратор"){
$menu .= '<li class="nav-item">
<a class="nav-link" href="/admin/">Админ Панель</a>
</li>';
}
$menu .= '<li class="nav-item">
<a class="nav-link" href="/profile/">Личный кабинет</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/admin/controllers/logout.php">
Выйти </a>
</li>';
}else{
$menu = '<li class="nav-item">
<a class="nav-link" href="/auth/">Вход</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/register/">Регистрация</a>
</li>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<body>
<main class="text-success-emphasis">
<header class="bg-success border-bottom border-success-emphasis">
<div class="container-fluid d-flex align-items-center p-0">
<nav class="navbar navbar-expand-lg w-100 p-3 navbar-dark">
<div class="container-fluid">
<a class="navbar-brand" href="\glav.php">Нарушениям.Нет</a>
<button class="navbar-toggler" type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent"
aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse"
id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<?=$menu?>
</ul>
</div>
</div>
</nav>
</div>
</header>
    
<div class="container p-3">
<h1 class="text-center mb-3 text-success-emphasis display-1">Регистрация</h1>
<form action="/admin/controllers/registration.php" method="post" class="m-auto">
<div class="mb-3">
<label for="surname" class="form-label fs-5">Фамилия</label>
<input type="text" class="form-control shadow-sm p-3 rounded-pill"
id="surname" name="surname" required>
</div>
<div class="mb-3">
<label for="name" class="form-label fs-5">Имя</label>
<input type="text" class="form-control shadow-sm p-3 rounded-pill"
id="name" name="name" required>
</div>
<div class="mb-3">
<label for="patronymic" class="form-label fs-5">Отчество</label>
<input type="text" class="form-control shadow-sm p-3 rounded-pill"
id="patronymic" name="patronymic" required>
</div>
<div class="mb-3">
<label for="login" class="form-label fs-5">Логин</label>
<input type="text" class="form-control shadow-sm p-3 rounded-pill"
id="login" name="login" required>
</div>
<div class="mb-3">
<label for="email" class="form-label fs-5">Адрес электронной почты</label>
<input type="email" class="form-control shadow-sm p-3 rounded-pill"
id="email" name="email" required>
</div>
<div class="mb-3">
<label for="phone" class="form-label fs-5">Телефон</label>
<input type="tel" class="form-control shadow-sm p-3 rounded-pill"
id="phone" name="phone" minlength="17" maxlength="17" pattern="/+?[0-9/(/)/-]+"
placeholder="+7(XXX)-XXX-XX-XX" required>
</div>
<div class="mb-3">
<label for="password" class="form-label fs-5">Пароль</label>
<input type="password" class="form-control shadow-sm p-3 rounded-pill"
id="password" name="password" minlength="6" required>
</div>
<div class="mb-3">
<label for="password-repeat" class="form-label fs-5">Повторите
пароль</label>
<input type="password" class="form-control shadow-sm p-3 rounded-pill"
id="password-repeat" name="password-repeat" minlength="6" required>
</div>
<input type="submit" class="btn btn-success mb-3 mt-3 w-100 shadow-sm p-3 fs-2
rounded-pill fw-bold" value="Зарегистрироваться">
</form>
</div>

<footer class="sticky-bottom bg-dark text-light">
<div class="container-fluid p-3 pt-3 d-flex justify-content-center">
<p>@Нарушениям.Нет<br>2023-2024</p>
</div>
</footer>
</main>
<script src="/assets/bootstrap/js/bootstrap.bundle.js"></script>
<script>
fields
(() => {
'use strict'
const forms = document.querySelectorAll('.needs-validation')
Array.from(forms).forEach(form => {
form.addEventListener('submit', event => {
if (!form.checkValidity()) {
event.preventDefault()
event.stopPropagation()
}
form.classList.add('was-validated')
}, false)
})
})()
</script>

</body>
</html>