<?require "rb-mysql.php" ?>

<?php
          ///// Авторизация
        $login = filter_var(trim($_POST['login']));
        $username = filter_var(trim($_POST['username']));
        $password = filter_var(trim($_POST['password']));
        if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
                echo "Недопустимая длина логина";
                exit();
        } else if(mb_strlen($username) < 5 || mb_strlen($username) > 90) {
                echo "Недопустимая длина имени";
                exit();
        } else if(mb_strlen($password) < 4 || mb_strlen($password) > 10) {
                echo "Недопустимая длина пароля (от 2 до 6 символов)";
                exit();
        }
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'CyberBase');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        R::setup('mysql:host='.DB_HOST.'; dbname='.DB_NAME, DB_USER, DB_PASS); // подключение к бд
        $create = R::dispense('users');
        //Заполняем колонки таблицы
        $create->name = $username;
        $create->pass = $password;
        $create->login = $login;
        $_SESSION['id'] = $create->id;
        //Записываем таблицу в базу
        R::store($create); 
        ///////////////////////////////////////////////////////////
        ///// Вход
        session_start();
        $login = $_POST['login'];
        $password = $_POST['password'];
        if ( !R::testConnection() ) // проверка на подключение таблицы
        {
            echo 'Нет соединения с БД!';
            exit;
        }else{
            header('Location: ../Profile.php');
            echo 'Всё прекрасно работает )';
        }
        $_SESSION['message'] = 'Пароль и Логин не подходят';
?>
        

<!-- //закрытие сессии  
session_destroy(); // по кнопке выйти будет рабоать -->

