<html>
<body>

<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//
/*

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
<form action="welcome_get.php" method="get">


*/



?>


<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>

Comment: <textarea name="comment" rows="30" cols="60"></textarea>

<input type="submit">
</form>

</body>
</html>