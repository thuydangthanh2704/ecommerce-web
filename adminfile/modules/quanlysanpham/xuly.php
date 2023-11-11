<?php
	include('../ttcsdl.php');
	$id=$_GET['id'];
	
	if(isset($_POST['them'])){
		$ten_sanpham=$_POST['ten_sanpham'];
		$hinhanh_sanpham=$_FILES['hinhanh_sanpham']['name'];
		$hinhanh_tmp=$_FILES['hinhanh_sanpham']['tmp_name'];
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh_sanpham);
		$id_loaisanpham=$_POST['loaisanpham'];
		$khuyenmai=$_POST['khuyenmai'];
		$mota=$_POST['mota'];
		$gia=$_POST['gia_sanpham'];
		$sql="insert into chitietsanpham (ten_sanpham,hinhanh_sanpham,id_loaisanpham,khuyenmai,mota,gia_sanpham) values ('$ten_sanpham','$hinhanh_sanpham','$id_loaisanpham','$khuyenmai','$mota','$gia_sanpham')";
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage.php?quanly=quanlysanpham&ac=lietke');
	}elseif(isset($_POST['sua'])){
		$ten_sanpham=$_POST['ten_sanpham'];
		$hinhanh_sanpham=$_FILES['hinhanh_sanpham']['name'];
		$hinhanh_tmp=$_FILES['hinhanh_sanpham']['tmp_name'];
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh_sanpham);
		$id_loaisanpham=$_POST['loaisanpham'];
		$khuyenmai=$_POST['khuyenmai'];
		$mota=$_POST['mota'];
		$gia_sanpham=$_POST['gia_sanpham'];
		if($hinhanh_sanpham!=''){
			$sql="update chitietsanpham set ten_sanpham='$ten_sanpham', hinhanh_sanpham='$hinhanh_sanpham', id_loaisanpham='$id_loaisanpham', khuyenmai='$khuyenmai', mota='$mota', gia_sanpham='$gia_sanpham' where id_sanpham='$id' ";
		}else{
			$sql="update chitietsanpham set ten_sanpham='$ten_sanpham', id_loaisanpham='$id_loaisanpham', khuyenmai='$khuyenmai', mota='$mota', gia_sanpham='$gia_sanpham' where id_sanpham='$id' ";
		}
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage.php?quanly=quanlysanpham&ac=lietke');
	}else{
		$sql="delete from chitietsanpham where id_sanpham='$id'";
		$conn->query($sql);
		$conn->close();
		header('location:../../adminpage.php?quanly=quanlysanpham&ac=lietke');
	}
?>