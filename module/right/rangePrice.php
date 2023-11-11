<div class="title"><h3>Sắp theo giá</h3></div>
	<?php 
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang=1;
	}
	$sosangpham1trang=8;
	$phantrang=($trang*$sosangpham1trang)-$sosangpham1trang;
	$rangePrice=$_GET['rp'];
	$rpSplit = preg_split('[\s]', $rangePrice);
	$from=0;
	$to=0;
	if($rpSplit[0] =='Từ'){
		$from = $rpSplit[1];
	}
	else{
		$rpSplit1 = preg_split('[\-]', $rpSplit[0]);
		$from = $rpSplit1[0];
		$to = $rpSplit1[1];
	}

	$from = $from*1000;
	$to = $to*1000;

	$sql="select * from chitietsanpham where gia_sanpham >= $from and gia_sanpham <= $to limit $phantrang,$sosangpham1trang";
	$query_sql=mysqli_query($conn,$sql);
	while($row_sql=mysqli_fetch_array($query_sql)){
		include('module/right/sanpham.php');
	}
	//phân trang	
	$sql_phantrang="select * from chitietsanpham where gia_sanpham >= $from and gia_sanpham <= $to";
	$query_phantrang=mysqli_query($conn,$sql_phantrang);
	$row_phantrang=mysqli_num_rows($query_phantrang);
	$sotrang=ceil($row_phantrang/$sosangpham1trang);
	$tentrang="rangePrice&rp=$rangePrice";
	include('module/right/phantrang.php');
	?>