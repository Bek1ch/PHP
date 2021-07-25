<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
<?php  require "blocks/header.php" ?>
<div class = "container mt-5">
<h3>Контактная форма</h3>
<form action="check.php" method = "post">
<input type="email" name = "email" placeholder = "Введите email" class = "form-control"><br>
<textarea name="message" class = "form-control" placeholder = "Введите ваше сообщение"></textarea><br>
<button type = "submit" name = "send" class = "btn btn-succsess br-4 ">Отправить</button>
</form>
<?php  require "blocks/footer.php" ?>
   
</div>

</body>
</html>