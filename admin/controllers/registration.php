<?php

    include 'connect.php';
    //проверка уникальности логина
    $data = $connect->query(sprintf("SELECT `login` FROM `user` WHERE `login` = '%s'",
    $_POST['login']));

    if($data->num_rows){
    header("Location: /register/index.php?message=Пользователь с таким логином уже существует");
        exit;
        } else {
        //запись в базу данных о регистрации
        $sql = sprintf("INSERT INTO `user`(`user_id`, `surname`, `name`, `patronymic`,
        `login`, `email`, `phone`, `password`, `role`) VALUES
        (NULL,'%s','%s','%s','%s','%s','%s','%s','Пользователь')",
        $_POST['surname'],
        $_POST['name'],
        $_POST['patronymic'],
        $_POST['login'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['password']
        );
        if(!$connect -> query($sql)){
        echo "Ошибка добавления данных";
        }
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['role'] = "Пользователь";
        header("Location: /profile/");
        exit;
        }
?>