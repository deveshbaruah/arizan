<?php
session_start();
$con=mysqli_connect("localhost","nazirain_arizan","writeme@2018","nazirain_godmemyt_table");
error_reporting(0);
?>
<title>Social LogIn :: Nazira.in Website</title>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.tex{
    width: 100%;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: white;
    color: #023C11;
    cursor: text;
 }
#myBtn {
    width: 100%;
    font-size: 18px;
    padding: 5px;
    border: none;
    background: #023C11;
    color: #fff;
    cursor: pointer;
 }

#myBtn:hover {
    background: green;
    color: #fff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.write{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 14px;
width:100%;
}
.main{
    position: fixed;
   left: 0;
   bottom: 0;
    width: 100%;
    height: 100%;
    background:#12C242;
    color: #fff;
    top: 0%;
    left: 0%;
    position: absolute;

    box-sizing: border-box;
    padding: 0px 30px;
}
.scroll
{
height:430px;
width:100%;
 background: transparent;
 overflow-x:hidden;
 overflow-y:auto;
}
div img{
width: 80px;
height: 100px;
position: absolute;
left: calc(50% - 50px);
top: -50px;
}

</style>
<body bgcolor=#12C242>


<div class="main">
    <a style="float:right;" href="Sign-Up.php">Create a New Account?</a>
<h1 class="w3-animate-zoom">Social LogIn | Nazira.in</h1>
<div id="box">
<div id="signin" class="scroll"> 
<?php
include "in.php";
?>

</div>
<center><a href="https://www.nazira.in">Go to Home Page</a></center>
</div>
</div>
</body>
