

<?php
$con=mysqli_connect("localhost","nazirain_arizan","writeme@2018","nazirain_godmemyt_table");
function formatDate($date)
{
return date('d-M-Y g:i a', strtotime($date));
}
$query="SELECT * FROM discussion ORDER BY Id DESC";
$run=$con->query($query);
while($row=$run->fetch_array()):
?>

<div id="data">
<Span><?php echo formatDate($row['Date']);?></Span><br>
<div class="write"><b><Span style="color:yellow;"><?php echo $row['Name'];?></Span>:</b>
<i><Span><?php echo $row['Message'];?></Span></i></div>

</div>
<?php endwhile;?>