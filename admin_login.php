<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>VIT Mess Management</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

    <div class="header">
        <p class="heading">VIT Mess Management</p>
    </div>
    <hr style="margin-top: 80px; size: 20;">
    <form action="#" method="post">
    <div class="container">
        <h2>Login Form</h2>
        <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>   
    <button type="submit" class="button">Login</button>

    <span class="psw">Forgot <a href="#" style="color: white;">password?</a></span>
  </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
$userid = $_POST['uname'];
$password = $_POST['password'];     

 include 'dbconnect.php';
    
    $query=mysql_query("SELECT * FROM admin WHERE admin_id='".$userid."' AND password='".$password."';");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
        while($row=mysql_fetch_assoc($query))  
        {  
            $dbusername=$row['admin_id'];  
            $dbpassword=$row['password'];  
        }  
  
        if($userid == $dbusername && $password == $dbpassword)  
        {  
        //session_start();  
        //$_SESSION['s_id']=$s_id;    
        /* Redirect browser */  
        }  
    }else{
        echo "Invalid Credentials";
    }  
    mysql_close($dbhandle);
}            
?>
