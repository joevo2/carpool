<?php
	
	#Heroku PostgreSQL Databse Connection
	/*
	$con = pg_connect("dbname=dectdccb9d6neh host=ec2-107-20-191-205.compute-1.amazonaws.com 
		port=5432 user=ilqmgopvoboqqe password=pSt_F9c9Yc4yuJMrYdigezqXAr 
		sslmode=require") or die('Could not connect: ' . pg_last_error());
	*/

	#Localhost Postgresql Database Connection
	$con = pg_connect("dbname=postgres host=localhost
		port=5432 user=Joel password=jj021192 
		") or die('Could not connect: ' . pg_last_error());
	
	$table = "test";

	#Commonly used SQL function	
	function queryDisplay($result) {
		$rowCount = pg_num_rows($result);
		for ($x=0; $x < $rowCount; $x++) { 
			$row = pg_fetch_row($result);
			for ($i=0; $i < count($row); $i++) {
					echo $row[$i] . " ";
			}
			echo "<br>";
		}
	}

	function queryInsert ($con, $table, $col, $item) {
		if (is_array($col) && is_array($item)) {
			$query = "INSERT INTO $table (" . implode(', ', $col) . ") VALUES ('" . implode("', '", $item) . "')";
		}
		else {
			$query = "INSERT INTO $table ($col) VALUES ('$item')";
		}
		$result = pg_query($con, $query) or die(pg_last_error($con));	
	}
	
	function queryAll($con, $table) {
		$query = "SELECT * FROM $table";
		$result = pg_query($con,$query) or die(pg_last_error($con));
		
		return $result;
	}

	#Create Table
	/*
	$sql = "CREATE TABLE carpooler (
		id SERIAL PRIMARY KEY,
		email VARCHAR(60) NOT NULL,
		password VARCHAR(12) NOT NULL)";
	pg_query($sql) or die(pg_last_error());	
	*/
?>