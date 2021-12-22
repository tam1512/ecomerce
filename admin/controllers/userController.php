<?php
require_once('./lib/database.php');
require_once('./helpers/format.php');
?>
<?php
class userController
{

  private $db;
  private $fm;

  public function __construct()
  {
    $this->db = new Database();
    $this->fm = new Format();
  }

  public function index()
  {
    $query = "SELECT * FROM users WHERE permission < 2 ORDER BY ID DESC";
    $result = $this->db->select($query);
    return $result;
  }

  public function locked()
  {
    $query = "SELECT * FROM users WHERE permission >= 2 ORDER BY ID DESC";
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

    if (empty($size_name) && empty($cate_id)) {
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

    if (empty($cate_name)) {
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

  public function lockUser($id)
  {
    $query_admin = "SELECT * FROM users WHERE ID = '$id' AND permission = 0";
    $result_admin = $this->db->select($query_admin);
    if ($result_admin) {
      $alert = 'Can not lock!';
      return $alert;
    }
    $query = "UPDATE `users` SET `permission`='2' WHERE ID = '$id'";
    $result = $this->db->update($query);
    if ($result) {
      $alert = 'Successfully!';
      return $alert;
    } else {
      $alert = 'Can not lock!';
      return $alert;
    }
  }

  public function unlockUser($id)
  {
    $query_admin = "SELECT * FROM users WHERE ID = '$id' AND permission = 0";
    $result_admin = $this->db->select($query_admin);
    if ($result_admin) {
      $alert = 'This is account admin!';
      return $alert;
    }
    $query = "UPDATE `users` SET `permission`='1' WHERE ID = '$id'";
    $result = $this->db->update($query);
    if ($result) {
      $alert = 'Successfully!';
      return $alert;
    } else {
      $alert = 'Can not delete!';
      return $alert;
    }
  }
}
?>