<?php
	include('conn.php');
    $name = $_POST['name'];
    $address = $_POST['address'];
    $sql = "insert into aa(name,address) values('$name','$address')";
    $dbh->exec($sql);
?>