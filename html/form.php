<html>
<body>

<form action="welcome.php" method="GET">
Name: <input type="text" name="name1"><br>
Surname:<input type="text" name="surname"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>



Welcome <?php echo $_POST["name1"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>
