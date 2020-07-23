<?php

$value = $_POST['knowledge'];



$dbc = mysqli_connect('localhost', 'p99979r7_boka', 'qwerty12', 'p99979r7_boka');


if($value == 'all'){

	$menu = 'all_knowledge';

	$query = "SELECT * from knowledge";
	$result = mysqli_query($dbc, $query);

	while($msg = mysqli_fetch_array($result)){
		echo $msg[$menu].' ';
	}
} else {
	$menu = $value;


	$query = "SELECT * from knowledge";

	$result = mysqli_query($dbc, $query);



	while($msg = mysqli_fetch_array($result)){

		if($msg[$menu] != ''){
			echo $msg[$menu].' ';
		}

	}



}



mysqli_close($dbc);

?>