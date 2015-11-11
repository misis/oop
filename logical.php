<?php 
	$num = 1;

	if($num>=1 && $num<=100){
		echo "Number is fine";
	}else{
		echo "you need to input 1 to 100";
	}

	echo "<br>";
	//another one
	$name = "oli";
	$age = 5;

	if($name=='oli' && ($age==5 || $age==6)){
		echo "the name is ok";
	}else{
		echo "Name is not ok";
	}
?>