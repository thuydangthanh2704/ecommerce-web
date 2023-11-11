<?php
$host='localhost';
$namehost='root';
$passhost='';
$csdl='hihaclothingss';
$connect=mysqli_connect($host,$namehost,$passhost,$csdl) or die ("Không thể kết nối Database");
mysqli_query($connect,"SET NAMES 'UTF8'");
?>