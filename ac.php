<html>
<?php
session_start();
$con=mysqli_connect("localhost","nazirain_arizan","writeme@2018","nazirain_godmemyt_table");
error_reporting(0);
$serchuser=$_SESSION['un'];
if($serchuser==true)
{
}
else
{
echo "<script>window.open('ac.php','_self')</script>";
}
$quryy="SELECT * FROM user WHERE Email='$serchuser'";
$runnn = mysqli_query($con, $quryy);
$done = mysqli_fetch_assoc($runnn);

?>
<title>Timeline Page :: Nazira.in</title>
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
    padding: 10px;
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
    height: 30px;
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
height:230px;
width:100%;
 background: transparent;
 overflow-x:hidden;
 overflow-y:auto;
}
div img{
width: 30px;
height: 30px;
position: absolute;
right: 5%;
top: 0px;
}

</style>
<body bgcolor=#12C242>
<script>
function ajax(){
var req=new XMLHttpRequest()
req.onreadystatechange=function(){
if(req.readyState==4 && req.status==200)
{
document.getElementById('chat').innerHTML=req.responseText;
}
}
req.open('POST','sum.php',true);
req.send();

}
setInterval(function(){ ajax()},1000);
</script>
<body onload="ajax();">

<div class="main"><a href="logout.php"><span style="float:right;"><img src="log.png" alt="LogOut"></span></a>
<h1 class="w3-animate-opacity"><i><?php echo $done['Name'];?> </i> Your Timeline</h1>
<div id="box">
<div id="chat" class="scroll"> </div>
</div>
<form action="" method="POST">
    <form action="" method="POST">
    <textarea name="mess" placeholder="What is Your Mind?" class="write" required/></textarea>
    <br>
    <input type="Submit" name="button" Value="Send" id="myBtn" style="float:right;"></form> 

<center>
<?php 
if(isset($_POST['button'])){
$mass=$_POST['mess'];
$CUser=$done['Name'];
$insert="INSERT INTO discussion(Name,Message) values('$CUser','$mass')";
$runn=$con->query($insert);
if($runn){
echo "Successfully Sent!";
}
else 
echo "Your Message has been Not Sent!!";
}
?>
<br>
</center>
</div>
<br>
<br>

</body>
</html>

