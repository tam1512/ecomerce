<?php
require_once('./lib/database.php');
require_once('./helpers/format.php');
?>
<?php
class orderController
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
    $query = "SELECT * FROM orders WHERE State = 0 ORDER BY Orderdate DESC";
    $result = $this->db->select($query);
    return $result;
  }

  public function approved()
  {
    $query = "SELECT * FROM orders WHERE State = 1 ORDER BY Orderdate DESC";
    $result = $this->db->select($query);
    return $result;
  }

  public function getCustomer($id)
  {
    $query = "SELECT * FROM users WHERE ID = '$id' LIMIT 1";
    $result = $this->db->select($query);
    return $result;
  }

  public function getDetail($id)
  {
    $query = "SELECT * FROM detail_order d LEFT JOIN product p ON d.IDproduct = p.ID WHERE d.IDOrder = '$id'";
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

  public function allow($id)
  {
    $query = "UPDATE `orders` SET `State`='1' WHERE ID = '$id'";
    $result = $this->db->update($query);
    if ($result) {
      $alert = '<div class="valid-feedback d-block">Successfully!</div>';
      return $alert;
    } else {
      $alert = '<div class="invalid-feedback d-block">Insert fail.</div>';
      return $alert;
    }
  }

  public function destroy($id)
  {
    $query = "DELETE FROM `orders` WHERE ID = '$id'";
    $result = $this->db->delete($query);
    if ($result) {
      $alert = 'Successfully!';
      return $alert;
    } else {
      $alert = 'Not delete!';
      return $alert;
    }
  }
}
?>