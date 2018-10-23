<?php


$host="localhost";
$user="root";
$password="root";
$db="marktplaats";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from loginform where user='".$uname."' AND pass='".$password." ' limit 1";

    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo "Login succesvol ";
        exit();
    }
    else{ 
        echo "LOGIN FOUT!";
        exit();
    }



}




?>










<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
    font-family: Arial, Helvetica, sans-serif;
}

form {
    border: 3px solid #f1f1f1;
    width:50%;
    margin:auto;
}

h3{
    text-align:center;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}




.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


</style>
</head>
<body>

<h3>Welcome! Please fill in your username and password down below</h3>

<form method="POST" action="#">
  
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
