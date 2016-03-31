<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<title>Register</title>
<body>
<div ng-app="" ng-init="name=' '">
<form action="register.inc.php" method="POST">
Username:&nbsp<input type="text" name="name" ng-model="name" placeholder="Username" >
<br><br>
Passowrd:&nbsp<input type="password" name="password" ng-model="password" placeholder="Password" >
<br><br>
<input type="submit" name="submit" value="Register">
</form>
<br><br>
Username :  {{name}} 
<br>
Password &nbsp: {{password}} <br>is being registered in to the database
</div>
</body>
</head>
</html>

<?php
require 'connect.inc.php';
if(isset($_POST['name']) && isset($_POST['password'])){
$query="INSERT INTO `users`.`users` (`id`, `username`, `password`) VALUES (NULL, '".$_POST['name']."', '".$_POST['password']."');";	
mysql_query($query);
$name=$_POST['name'];
mysql_query("CREATE DATABASE $name");
mysql_select_db($name);
mysql_query("CREATE TABLE videos
(
id int NOT NULL AUTO_INCREMENT,
data varchar(255),
data_link varchar(255),
view TINYINT(1),
PRIMARY KEY (id)
)");

}
?>