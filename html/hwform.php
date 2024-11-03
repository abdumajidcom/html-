<html>
<body>


<form action="wasborn.php" method="POST">
Name: <input type="text" name="name1"><br>
Website: <input type="text" name="website"><br>
Was born: <input type="date" name="was born"><br>
Comment: <textarea name="comment" rows="5" cols="40" ></textarea>
<input type="submit">
</form>



Wasborn <?php echo $_POST["name1"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>


</body>
</html>