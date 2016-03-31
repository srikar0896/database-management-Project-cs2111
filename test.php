<?php
error_reporting(0);
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$db='yatham';
if(mysql_connect($mysql_host,$mysql_user,$mysql_password)){
	mysql_select_db($db);
	mysql_query("CREATE TABLE new_data
(
id int NOT NULL AUTO_INCREMENT,
data varchar(255),
data_link varchar(255),
view TINYINT(1),
PRIMARY KEY (id)
)");
echo 'created succesfully';
	} 
  else{
	  echo mysql_error();
	
}
?>