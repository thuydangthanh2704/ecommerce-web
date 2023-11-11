<?php
$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='hihaclothingss';
$conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl) or die ('Khong ket noi duoc');
mysqli_query($conn,"set names 'utf8'");
?>