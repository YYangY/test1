<?php
	include('conn.php');
    $name = $_POST['name'];
    $sql = "delete from aa where name = '$name'";
    $dbh->exec($sql);
?>