<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$username = "root";
$dbpassword = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username, $dbpassword)
    or die("Unable to connect to MySQL");

$selected = mysql_select_db("messmanagement",$dbhandle)
    or die("Could not selected db2");
?>