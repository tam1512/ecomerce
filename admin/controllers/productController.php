<?php 
  require_once('./lib/database.php');
  require_once('./helpers/format.php');
?>
<?php
class productController
  {

    private $db;
    private $fm;

    public function __construct() 
    {
      $this->db = new Database();
      $this->fm = new Format();
    }

    public function connect()
	{
		$conn = new mysqli(DB_HOST, DB_USER,DB_PASS, DB_NAME);
		mysqli_set_charset($conn, 'UTF8');
		if($conn->connect_error)
		{
			die('Database error: ' .$conn->connect_error);
			return false;
		}
		return $conn;
	}

    public function index()
    {
      $query = "SELECT * FROM product p JOIN detail_product_size_quantity dz ORDER BY ID DESC";
      $result = $this->db->select($query);
      return $result;
    }

    public function getSize($id)
    {
      $query = "SELECT * FROM category_size WHERE IDCategory = '$id'";
      $result = $this->db->select($query);
      return $result;
    }

    public function storeSize($size_name, $cate_id)
    {
      $size_name = $this->fm->validation($size_name);
      $cate_id = $this->fm->validation($cate_id);

      $size_name = mysqli_real_escape_string($this->db->link, $size_name);
      $cate_id = mysqli_real_escape_string($this->db->link, $cate_id);

      if (empty($size_name) && empty($cate_id))
      {
        $alert = '<div class="invalid-feedback d-block">Please fill the name.</div>';
        return $alert;
      } else {
        $query = "INSERT INTO `category_size`(`IDCategory`, `Name`) VALUES ('$cate_id','$size_name')";
        $result = $this->db->insert($query);
        if ($result) {
          $alert = '<div class="valid-feedback d-block">Successfully!</div>';
          return $alert;
        } else {
          $alert = '<div class="invalid-feedback d-block">Insert fail.</div>';
          return $alert;
        }
      }
    }

    public function store($cate_name)
    {
      $cate_name = $this->fm->validation($cate_name);

      $cate_name = mysqli_real_escape_string($this->db->link, $cate_name);

      if (empty($cate_name))
      {
        $alert = '<div class="invalid-feedback d-block">Category must not be empty.</div>';
        return $alert;
      } else {
        $filter = $this->fm->create_slug($cate_name);
        $query = "INSERT INTO `category`(`Name`, `filter`) VALUES ('$cate_name','$filter')";
        $result = $this->db->insert($query);
        if ($result) {
          $alert = '<div class="valid-feedback d-block">Successfully!</div>';
          return $alert;
        } else {
          $alert = '<div class="invalid-feedback d-block">Insert category not success.</div>';
          return $alert;
        }
      }
    }

    public function edit()
    {
      
    }

    public function destroy()
    {

    }
  }
$productController = new productController();
$conn = $productController->connect();
if(isset($_POST['product-create-btn']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $detailcategory = $_POST['detailcategory'];
    $brand = $_POST['brand'];
        if($_FILES['image']['size'] == 0)
        {
        echo "<script type='text/javascript'>alert('Bạn chưa chọn hình ảnh!');</script>";
        }
        else
        {
          $target_dir = "assets/img/product/";
          $target_file = $target_dir . basename($_FILES["image"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          $check = getimagesize($_FILES["image"]["tmp_name"]);
          if($check !== false) 
          {
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
	        {
                echo "<script type='text/javascript'>alert('Chỉ chấp nhận file JPG, JPEG, PNG & GIF.');</script>";
		        $uploadOk = 0;
	        }
		        else
		        {
			        if (file_exists($target_file)) 
			        {
                      echo "<script type='text/javascript'>alert('File của bạn đã tồn tại.');</script>";
			          $uploadOk = 0;
			        }
			        else
			        {
				        if ($_FILES["image"]["size"] > 2000000) 
				        {
                          echo "<script type='text/javascript'>alert('File của bạn quá lớn (>2mb)');</script>";
				          $uploadOk = 0;
				        }
				        else
				        {
					        if ($uploadOk == 0) 
					        {
                              echo "<script type='text/javascript'>alert('Có lỗi xảy ra khi tải ảnh lên.');</script>";
					        } 
					        else 
					        {	  
                                  $fileupload = "../".$target_file;
						          if (move_uploaded_file($_FILES["image"]["tmp_name"], $fileupload)) 
						          {

                                    $sqldetailcategory = "SELECT * FROM detail_category WHERE ID=? LIMIT 1;";
                                    $stmt = $conn->prepare($sqldetailcategory);             
                                    $stmt->bind_param('s',$detailcategory);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $row = $result->fetch_assoc();
                                    $category = $row['IDCategory'];

                                    $sqlcheckprdid = "SELECT * FROM product;";
	                                $stmt = $conn->prepare($sqlcheckprdid);
	                                $stmt->execute();
	                                $result = $stmt->get_result();
	                                $rowtoinsert = mysqli_num_rows($result)+1;

                                    $sqlproduct = "INSERT INTO product VALUES(?,?,?,?,?,?,'0','1','0');";
                                    $stmt = $conn->prepare($sqlproduct);
                                    $stmt->bind_param('ssssss',$rowtoinsert,$name, $price, $description,$category,$detailcategory);
                                    $stmt->execute();

                                    $sqlproduct = "INSERT INTO detail_product(IDProduct,Brand,Image1,Image2) VALUES(?,?,?,'None');";
                                    $stmt = $conn->prepare($sqlproduct);
                                    $stmt->bind_param('sss',$rowtoinsert, $brand, $target_file);
                                    $stmt->execute();
						          } 
						          else 
						          {
                                    echo "<script type='text/javascript'>alert('Có lỗi xảy ra khi tải ảnh lên.');</script>";
						          }
					        }
				        }
			        }
		        }
	          } 
	      else 
	      {
            echo "<script type='text/javascript'>alert('File bạn tải không phải là hình ảnh');</script>";
		    $uploadOk = 0;
	      }
        }   
}
if(isset($_POST['product-edit-btn']))
{
    $productid = $_POST['productid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $detailcategory = $_POST['detailcategory'];
    $brand = $_POST['brand'];

    $sqldetailcategory = "SELECT * FROM detail_category WHERE ID=? LIMIT 1;";
    $stmt = $conn->prepare($sqldetailcategory);             
    $stmt->bind_param('s',$detailcategory);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $category = $row['IDCategory'];

    $sqlproduct = "UPDATE product SET Name=?,Price=?,Description=?,IDCategory=?,IDDetailCategory=? WHERE ID=?;";
    $stmt = $conn->prepare($sqlproduct);
    $stmt->bind_param('ssssss',$name, $price, $description,$category,$detailcategory,$productid);
    $stmt->execute();

    $sqlproduct = "UPDATE detail_product SET Brand=? WHERE IDProduct=?;";
    $stmt = $conn->prepare($sqlproduct);
    $stmt->bind_param('ss', $brand, $productid);
    $stmt->execute();
}
if(isset($_GET['delete_id']))
{
    $productid = $_GET['delete_id'];

    $sqlproduct = "DELETE FROM product WHERE ID=?;";
    $stmt = $conn->prepare($sqlproduct);
    $stmt->bind_param('s',$productid);
    $stmt->execute();

    $sqlproduct = "DELETE FROM detail_product WHERE IDProduct=?;";
    $stmt = $conn->prepare($sqlproduct);
    $stmt->bind_param('s', $productid);
    $stmt->execute();
}
?>