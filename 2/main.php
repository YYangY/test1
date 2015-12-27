<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>calculator</title>
	</head>
	<body>
		<form action="" method="post">
			number 1 <input type="text" value="" name="num1"><br />
			         <select name="oper">
			           <option value="+">+</option>
			           <option value="-">-</option>
			         </select><br />
			number 2 <input type="text" value="" name="num2"><br />
			         <input type="submit" value="=">
		</form>
	</body>
</html>
<?php
class calculator{
	public $a;
	public $b;
	public $c;
	function __construct($num1, $num2){
		$this->a = $num1;
		$this->b = $num2;
		
	}
	function add(){
		$this->c = $this->a + $this->b;
		echo $this->c;
	}
	function substract(){
		$this->c = $this->a - $this->b;
		echo $this->c;
	}
}
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$p = new calculator($num1,$num2);
$oper = $_POST["oper"];
switch($oper){
	case "+":
	$p->add();
	break;
	case "-":
	$p->substract();
	break;
}
?>