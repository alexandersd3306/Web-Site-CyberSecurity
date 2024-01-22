<?php include  "fucntions/header.php" ?>
<?php session_start(); ?>


<body>
	<form action="fucntions/functions.php" class="Auto" method="post">
		<label for="username">Имя пользователя:</label>
		<input type="text" id="username" name="username" required placeholder="Введите Имя">

    <label for="login">Ваш login:</label>
		<input type="text" id="login" name="login" required placeholder="Введите Логин">

		<label for="password">Пароль:</label>
		<input type="password" id="password" name="password" placeholder="Введите Пароль" required>

		<input class="register" type="submit" value="Зарегистрироваться">
		<input type="reset" value="Сбросить">
        <p>
            У вас уже есть аккаунт? - <a href="/"> Просто войдите </a>
        </p>
	</form>

	<form action="fucntions/functions.php" class="Auto" method="post">
		<label for="login">Ваш login:</label>
		<input type="text" id="login" name="login" required placeholder="Введите Логин">

		<label for="password">Пароль:</label>
		<input type="password" id="password" name="password" placeholder="Введите Пароль" required>

		<input class="vhod" type="submit" value="Войти">
		<input type="reset" value="Сбросить">

	</form>
	<p class='msgg'>сообщение</p>
	
</body>

<?php include "fucntions/footer.php" ?>



