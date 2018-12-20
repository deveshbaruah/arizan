<form action="" method="POST">
    <input type="text" name="Email" placeholder="User Email" class="write" required><br>
    <input type="password" name="Password" placeholder="*********" class="write" required><br><br>
    <input type="Submit" name="button" Value="SignIn" id="myBtn" style="float:right;"></form> 

<?php 
if(isset($_POST['button'])){
$Email=$_POST['Email'];
$Password1=$_POST['Password'];
$Password = md5($Password1);
$qury="SELECT * FROM user WHERE Email='$Email' && Password='$Password'";
$run = mysqli_query($con, $qury);
$done = mysqli_num_rows($run);
if($done ==1){
$_SESSION['un']=$Email;
echo "<script>window.open('ac.php','_self')</script>";
}else
{
echo "Wrong Username and Password!";
}
}
?>