<div class="content">
<div class="right">
<?php
if(isset($_GET['xem'])){
	$tam=$_GET['xem'];
} 
else
{
	$tam='';
	} 
	if($tam=='chitietloaisanpham'){
		include('module/right/chitietloaisanpham.php');}

	elseif ($tam=='chitietsanpham'){
		include('module/right/chitietsanpham.php');
		} 

	elseif ($tam=='rangePrice'){
		include('module/right/rangePrice.php');
		}  

	elseif ($tam=='khuyenmai'){
		include('module/right/khuyenmai.php');
			}

	elseif ($tam=='login'){
		include('login.php');
		}

	elseif ($tam=='tintucsukien'){
		include('module/right/tintucsukien.php');
		}

	elseif ($tam=='huongdanmuahang'){
		include('module/right/huongdanmuahang.php');
		}

	elseif ($tam=='hotrokhachhang'){
		include('module/right/hotrokhachhang.php');
		}
		
	elseif ($tam=='hethongcuahang'){
		include('module/right/hethongcuahang.php');
		}

	elseif ($tam=='dangky'){
		include('dangky.php');
	}

	elseif(isset($_POST['bt_timkiem'])|| $tam=="timkiem"){
		include('module/right/timkiem.php');
	}

	elseif ($tam=='giohang'){
		include('module/right/giohang.php');
	}

	elseif ($tam=='dathang'){
		include('module/right/dathang.php');
	}

	else {
		include('module/right/tatcasanpham.php');
		}
	
?>
</div>
<div class="left">
<?php
	include('module/left/danhsachsanpham.php');
	include('module/left/danhsachboloc.php');
?>
</div>
</div>