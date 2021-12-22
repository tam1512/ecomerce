<?php
require_once('./lib/database.php');
require_once('./helpers/format.php');
?>
<?php
class commentController
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
    $query = "SELECT c.ID, c.Comments, p.Name, p.IDDetailCategory, u.Fullname, u.Phonenumber, u.Email, c.Postdate FROM comments c JOIN users u ON c.IDUser = u.ID JOIN product p ON p.ID = c.IDProduct WHERE c.State = 0 ORDER BY c.Postdate DESC";
    $result = $this->db->select($query);
    return $result;
  }

  public function getGenre($id)
  {
    $query = "SELECT * FROM detail_category WHERE ID = '$id' LIMIT 1";
    $result = $this->db->select($query);
    return $result;
  }

  public function approved()
  {
    $query = "SELECT c.ID, c.Comments, p.Name, p.IDDetailCategory, u.Fullname, u.Phonenumber, u.Email, c.Postdate FROM comments c JOIN users u ON c.IDUser = u.ID JOIN product p ON p.ID = c.IDProduct WHERE c.State = 1 ORDER BY c.Postdate DESC";
    $result = $this->db->select($query);
    return $result;
  }


  public function allow($id)
  {
    $query = "UPDATE `comments` SET `State`='1' WHERE ID = '$id'";
    $result = $this->db->update($query);
    if ($result) {
      $alert = 'Successfully!';
      return $alert;
    } else {
      $alert = 'Insert fail.';
      return $alert;
    }
  }

  public function destroy($id)
  {
    $query = "DELETE FROM `comments` WHERE ID = '$id'";
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