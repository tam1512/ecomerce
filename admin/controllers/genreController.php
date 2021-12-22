<?php
require_once('./lib/database.php');
require_once('./helpers/format.php');
?>
<?php
class genreController
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
    $query = "SELECT * FROM detail_category ORDER BY ID DESC";
    $result = $this->db->select($query);
    return $result;
  }

  public function getCategory($id)
  {
    $query = "SELECT * FROM category WHERE ID = '$id' LIMIT 1";
    $result = $this->db->select($query);
    return $result;
  }

  public function store($genre_name, $cate_id)
  {
    $genre_name = $this->fm->validation($genre_name);
    $cate_id = $this->fm->validation($cate_id);

    $genre_name = mysqli_real_escape_string($this->db->link, $genre_name);
    $cate_id = mysqli_real_escape_string($this->db->link, $cate_id);

    if (empty($genre_name) && empty($cate_id)) {
      $alert = '<div class="invalid-feedback d-block">Please fill the name.</div>';
      return $alert;
    } else {
      $filter = $this->fm->create_slug($genre_name);
      $query = "INSERT INTO `detail_category`(`IDCategory`, `Name`, `filter`) VALUES ('$cate_id','$genre_name','$filter')";
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


  public function edit($id)
  {
    $query = "SELECT * FROM `detail_category` WHERE ID = '$id' LIMIT 1";
    $result = $this->db->select($query);
    return $result;
  }

  public function update($genre_name, $genre_id, $cate_id)
  {
    $genre_name = $this->fm->validation($genre_name);
    $genre_id = $this->fm->validation($genre_id);
    $cate_id = $this->fm->validation($cate_id);

    $genre_name = mysqli_real_escape_string($this->db->link, $genre_name);
    $genre_id = mysqli_real_escape_string($this->db->link, $genre_id);
    $cate_id = mysqli_real_escape_string($this->db->link, $cate_id);

    if (empty($genre_name) && empty($genre_id) && empty($cate_id)) {
      $alert = '<div class="invalid-feedback d-block">Please fill the name.</div>';
      return $alert;
    } else {
      $filter = $this->fm->create_slug($genre_name);
      $query = "UPDATE `detail_category` SET `IDCategory`='$cate_id',`Name`='$genre_name',`filter`='$filter' WHERE ID = '$genre_id'";
      $result = $this->db->update($query);
      if ($result) {
        $alert = '<div class="valid-feedback d-block">Successfully!</div>';
        return $alert;
      } else {
        $alert = '<div class="invalid-feedback d-block">Insert fail.</div>';
        return $alert;
      }
    }
  }

  public function destroy($genre_id)
  {
    $query_p = "SELECT * FROM `product` WHERE IDDetailCategory = '$genre_id'";
    $product = $this->db->select($query_p);
    if ($product) {
      $alert = 'Can not delete!';
      return $alert;
    } else {
      $query = "DELETE FROM `detail_category` WHERE ID = '$genre_id'";
      $result = $this->db->delete($query);
      if ($result) {
        $alert = 'Successfully!';
        return $alert;
      } else {
        $alert = 'Can not delete!';
        return $alert;
      }
    }
  }
}
?>