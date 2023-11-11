<?php
	include('../ttcsdl.php');
	$id=$_GET['id'];
	if(isset($_POST['them'])){
		$tenmathang=$_POST['ten_loaisannpham'];
		//thêm
		$sql="INSERT INTO loaisanpham (ten_loaisanpham), (id_loailoaisanpham) VALUES ('$ten_loaisanpham'), ('$id_loailoaisanpham')";
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage.php?quanly=quanlymathang&ac=lietke');
	}elseif(isset($_POST['sua'])){
		$ten_loaisanpham=$_POST['ten_loaisanpham'];
		//sua
		$sql="update loaisanpham set ten_loaisanpham='$ten_loaisanpham', id_loailoaisanpham='$id_loailoaisanpham' where id_loaisanpham='$id'";
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage.php?quanly=quanlymathang&ac=lietke');
	}else{
		//xoa
		$sql="DELETE FROM loaisanpham WHERE id_loaisanpham='$id'";
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage.php?quanly=quanlymathang&ac=lietke');
	}
?>