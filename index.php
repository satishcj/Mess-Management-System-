<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Darling Mess</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

    <div class="header">
        <p class="heading">Darling Mess</p>
    </div>
    
    <form action="#" method="post">
    <div class="container">
        <h2>Login Form</h2>
        <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <table width="100%">
        <tr>
            <td><input type="radio" name="member" value="student" required> <label><b>Student</b></label></td>
            <td><input type="radio" name="member" value="incharge"><label><b> Incharge </b></label></td><br>
        </tr>
    </table>    
    <button type="submit" class="button">Login</button>
    <input type="button"  class="button" onclick="location.href='registration.php';"value="Register">

    <span class="psw">Forgot <a href="#" style="color: white;">password?</a></span>
  </div>
</form>
