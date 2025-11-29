<?php
$rollno=$_GET['rollno'];
$name=$_GET['name'];
$class=$_GET['class'];
$section=$_GET['section'];
$address=$_GET['address'];
$link=mysql_connect("localhost","root","error");
mysql_select_db("u765974444_vspstpoint.students");
$result=mysql_query("insert into students) values('$rollno',$name,'$class','$section','$address')");
if($result)
print("Success");
else
print("Failure");
mysql_close($link);
?>