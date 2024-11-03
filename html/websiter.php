<html>
<body>

<form action="passport.php" method="GET">
Name: <input type="text" name="name1"><br>
Website: <input type="text" name="website"><br>
E-mail: <input type="text" name="email"><br>
Comment: <textarea name="comment" rows="5" cols="40" ></textarea>
<input type="submit">
</form>



Passport <?php echo $_POST["name1"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>


</body>
</html>