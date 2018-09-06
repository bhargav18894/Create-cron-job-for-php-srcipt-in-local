<?php 
echo "test";
$conn = mysqli_connect('localhost','root','','test') or die('not connect');
$sql ="insert into test_cron(name) values('Bhargav')";
mysqli_query($conn,$sql);