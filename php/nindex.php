<?php 
	include('connection.php');
    $sql ="SELECT * FROM `g_picture` WHERE `Aina` ='Slider' ORDER BY Date_uploided DESC LIMIT 0,7";
		if(!$result = mysqli_query($conn, $sql)){
			die('There was an error running the query [' . $conn->error . ']');
		}
		
		
		$sqlg ="SELECT * FROM `g_picture` ORDER BY Date_uploided DESC";
		if(!$resultg = mysqli_query($conn, $sqlg)){
			die('There was an error running the query [' . $conn->error . ']');
		}
		
	/*	
    $sqln ="SELECT * FROM `tbl_news` ORDER BY Date_uploid DESC LIMIT 0,4";
	 $sqle ="SELECT * FROM `tbl_events` ORDER BY Date_uploided DESC LIMIT 0,4";
	 $sqld ="SELECT * FROM `tbl_uploads` ORDER BY Date_uploided DESC LIMIT 0,9";
		if(!$resultn = mysqli_query($conn, $sqln)){
			die('There was an error running the query [' . $conn->error . ']');
		}
		if(!$resulte = mysqli_query($conn, $sqle)){
			die('There was an error running the query [' . $conn->error . ']');
		}
		if(!$resultd = mysqli_query($conn, $sqld)){
			die('There was an error running the query [' . $conn->error . ']');
		}
		
    $sql1 ="SELECT * FROM `publication` ORDER BY `ID` DESC LIMIT 7";
		if(!$result1 = mysqli_query($conn, $sql1)){
			die('There was an error running the query [' . $conn->error . ']');
		}
		
    $sqlk ="SELECT * FROM `keyindicator` ORDER BY id DESC LIMIT 0,6";
		if(!$resultk = mysqli_query($conn, $sqlk)){
			die('There was an error running the query [' . $conn->error . ']');
		}
		
	$sqlday ="SELECT * FROM `statistic_day` ORDER BY date DESC LIMIT 0,1";
		if(!$resultday = mysqli_query($conn, $sqlday)){
			die('There was an error running the query [' . $conn->error . ']');
		}
		*/
?>	