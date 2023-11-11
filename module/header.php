
<div class = "hiha">
    <div>
        <img src="./img/hiha1.png" width = "100" height = "60" alt="hiha">
    </div>
    <div class="searchsearch"> 
        <form id="search-fr" action="./" method="POST">
            <div class="form-input">
                <input name="tim" id="search" placeholder=" Tìm kiếm..." value=""  type="text" required="required">
                <button class = "button-search" type="submit" name="bt_timkiem">
                    <i class="fa-solid fa-magnifying-glass" ></i>
                </button>
            </div>
        </form>
    </div>
    <div class = "giohang">
        <a href="./?xem=giohang"><button id = "button-cart"><img id ="icon-cart" src="./img/icon-cart.png" width="40" height="30" alt=""></button></a>
    </div>
    <div class="dangnhapdangky">
						<?php 
						session_start();
						include('connect.php');
						if(isset($_SESSION['login'])){
							$use=$_SESSION['login']; // Lấy giá trị user được lưu ở session khi đăng nhập thành công
							$sql="SELECT * from users where username='$use'";
							$query=mysqli_query($connect,$sql);//Truy vấn CSDL
							$row=mysqli_fetch_assoc($query); //Trả về một dòng kết quả
							if(isset($_POST["dangxuat"])){
								session_destroy();
								header('location: index.php');}
							?>
							
							<form class="H" action="" method="POST">
							<p>Xin chào : <?php echo $_SESSION['login'];?>(<?php echo $row['quyen'];?>)
							</a><input type="submit" name="dangxuat" id="button2" value="Đăng Xuất" /></p>
							</form>
							<?php
						}else{?>
				    		<a href="?xem=login"><input type="submit" name="dangnhap" id="button" value="ĐĂNG NHẬP" /></a> ||
			        		<a href="?xem=dangky" > <input type="submit" name="dangki" id="button2" value="ĐĂNG KÝ" /></a>

				 <?php
						}?>
    </div>
</div>
<div class="header">
    <img src="./img/hihaclothings.png" width="100%" height="230" alt="banner" />
</div>