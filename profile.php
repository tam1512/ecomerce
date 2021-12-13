<!DOCTYPE html>
<html lang="en">
<?php 
require_once("controller/authController.php"); 
require_once("class/category.php");
?>
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Trang chủ</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="icon"
      href="https://m.media-amazon.com/images/G/01/Zappos/MysteryDeals2021/2021-ZAPPOS-HOLIDAY-HEADER-LOGO.svg"
      type="image/x-icon" />
   <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4-web/css/all.css" />
   <link rel="stylesheet" href="assets/fonts/icons-1.5.0/font/bootstrap-icons.css" />
   <link rel="stylesheet" href="assets/css/grid.css" />
   <link rel="stylesheet" href="assets/css/style.css" />
   <style>
   a:hover
   {
    color: #004B89;
   }
   
   </style>
</head>

<body>
   <div class="wrap">
      <?php require_once 'view/header.php' ?>
      <div class="container-fluid my-5 px-5">
          <h3>Xin chào, <?php echo $_SESSION['Fullname']; ?></h3>
          <p>Bạn đang đăng nhập với <?php echo $_SESSION['Email'] ?></p>
          <div class="container-fluid border my-4">
            <h3 class="my-4">Thông Tin Tài Khoản Của Bạn</h3>
            <div class="row">
                <div class="col col-4">
                <h5>Tên, Email, Mật khẩu</h5>
                <p><?php echo $_SESSION['Fullname']?><br>
                <?php echo $_SESSION['Email']?><br>
                **********</p>
                <a href="" data-bs-toggle="modal" data-bs-target="#account-modal"><b>QUẢN LÝ THÔNG TIN TÀI KHOẢN</b></a>
                </div>
                <div class="col col-4">
                <h5>Địa Chỉ Giao Hàng</h5>
				<div class="row" id="address-list">
				<!--ADDRESS LOAD AJAX -->
				</div>
                <a href="" data-bs-toggle="modal" data-bs-target="#address-modal"><b>THÊM ĐỊA CHỈ</b></a>
                </div>
                <div class="col col-4">
                <h5>Phương Thức Thanh Toán</h5>
                <p>Chưa có phương thức</p>
                <a href=""><b>THÊM THẺ</b></a>
                </div>
				<div class="col-12 my-3"></div>
            </div>         
          </div>
		  <h3>Lịch Sử Đặt Hàng</h3>
		  <p>Lịch sử của bạn đang trống</p>
      </div>
      <?php require_once 'view/footer.php' ?>
   </div>

   <div class="modal fade" id="address-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<br>
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Địa Chỉ Mới</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" id="address-form">
			  <input type="text" value="<?php echo $_SESSION['ID'] ?>" class="form-control" id="iduser" name="iduser" hidden>
			  <input type="text" value="<?php echo $_SESSION['Fullname'] ?>" class="form-control" id="fullname" name="fullname" hidden>
			  <div class="mb-3">
				<label for="address" class="form-label">Địa Chỉ:</label>
				<input type="email" class="form-control" id="address" name="address" placeholder="Hãy nhập địa chỉ">
			  </div>
			  <div class="mb-3">
				<label for="phonenumber" class="form-label">Số điện thoại:</label>
				<input type="text" class="form-control" value="<?php echo $_SESSION['Phonenumber']?>" id="phonenumber" name="phonenumber" placeholder="Hãy nhập số điện thoại">
			  </div>
			  <div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Số điện thoại:</label>
				<div class="col-sm-12">          
						<select class="form-control" id="type" name="type">
						  <option value="" selected>Chọn loại địa chỉ</option>
						  <option value="Nhà Riêng">Nhà Riêng</option>
						  <option value="Văn Phòng">Văn Phòng</option>
						</select>
					 </div>
			  </div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary px-5" data-bs-dismiss="modal">Trở lại</button>
			  <button type="button" class="btn btn-primary px-5" id="address-btn" name="address-btn">Lưu</button>
			</div>
			</form>
		  </div>
		</div>
	  </div>
	</div>

	<div class="modal fade" id="account-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<br>
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Thông Tin Tài Khoản</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form method="post" action="profile.php" class="form-horizontal" id="account-form">
			  <input type="text" value="<?php echo $_SESSION['ID'] ?>" class="form-control" id="iduser" name="iduser" hidden>
			  <div class="mb-3">
				<label for="fullnameacc" class="form-label">Họ và Tên: </label>
				<input type="text" class="form-control" value="<?php echo $_SESSION['Fullname'] ?>" id="fullnameacc" name="fullnameacc" placeholder="Hãy nhập họ và tên">
				<small style="color:red"><?php echo $errorfullname?></small>
			  </div>
			  <div class="mb-3">
				<label for="emailacc" class="form-label">Email:</label>
				<input type="email" class="form-control" value="<?php echo $_SESSION['Email'] ?>" id="emailacc" name="emailacc" placeholder="Hãy nhập email">
				<small style="color:red"><?php echo $erroremail?></small>
			  </div>
			  <div class="mb-3">
				<label for="phonenumberacc" class="form-label">Số điện thoại:</label>
				<input type="text" class="form-control" value="<?php echo $_SESSION['Phonenumber'] ?>" id="phonenumberacc" name="phonenumberacc" placeholder="Hãy nhập số điện thoại">
				<small style="color:red"><?php echo $errorphonenumber?></small>
			  </div>
			  <div class="mb-3">
				<label for="passwordacc" class="form-label">Mật Khẩu:</label>
				<input type="text" class="form-control" id="passwordacc" name="passwordacc" placeholder="*********">
			  </div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary px-5" data-bs-dismiss="modal">Trở lại</button>
			  <button type="submit" class="btn btn-primary px-5" id="account-btn" name="account-btn">Lưu</button>
			</div>
			</form>
		  </div>
		</div>
	  </div>
	</div>
   <script src="assets/js/app.js"></script>
   <script type="text/javascript">
	$(document).ready(function()
	{
	function fetch_data()
		{
		var iduser = $('#iduser').val();
			$.ajax({
				url: "controller/ajax/address/load.php",
				method: "POST",
				data: {iduser:iduser},
				success:function(data){
					$("#address-list").html(data);
				}
			});
		}
	fetch_data();
	$('#address-btn').on('click', function()
	{		
		var iduser = $('#iduser').val();	
		var fullname = $('#fullname').val();	
		var address = $('#address').val();	
		var phonenumber = $('#phonenumber').val();	
		var type = $('#type').val();	
		if(iduser == "" || fullname == "" || address == "" || phonenumber == "" || type == "")
		{
			alert("Hãy nhập đầy đủ thông tin!!");
		}
		else
		{
			$.ajax({
				url: "controller/ajax/address/insert.php",
				method: "POST",
				data: {iduser:iduser, fullname:fullname, address:address, phonenumber:phonenumber, type: type},
				success:function(data){
					alert("Thêm địa chỉ thành công!!");
					$("#address-form")[0].reset();
					fetch_data();
				}
			});
		}
	});
	$(document).on('click','.address_del_btn', function()
	{		
		var id = $(this).data("id_del");	
		var result = confirm("Bạn có muốn xóa địa chỉ này không?");
		if(result)
		{
			$.ajax({
				url: "controller/ajax/address/delete.php",
				method: "POST",
				data: {id:id},
				success:function(data){
					fetch_data();
				}
			});
		}
	});
	});	
	</script>
</body>


</html>