<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #666666;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 5px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
	<div class="nhanvien">
    <ul>
	<?php 
	?>
    <li>
    <img src="./img/<?php echo $row_sql['hinhanh'];?>" class="img-nhanvien"/>
   <p><b><?php echo $row_sql['tenNV'];?></b></p>
   <p><img src="img/fb.png" width="20" height="20"><?php echo $row_sql['facebook'];?></b></p>
   <p><img src="img/gm.png" width="20" height="20"><?php echo $row_sql['email'];?></b></p>
    <a href="<?php echo $row_sql['linkfb'];?>" <button class="button" style="vertical-align:middle"><span>Liên hệ</span></button></a>
     </li>
    </ul>
    </div>