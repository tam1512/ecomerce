<?php
require_once('./lib/database.php');
require_once('./helpers/format.php');
?>
<?php
class reckonController
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
    $query = "SELECT p.Name, p.Sold, p.Price, d.Brand, dp.Size FROM detail_product d JOIN product p ON p.ID = d.IDProduct JOIN detail_product_size_quantity dp ON dp.IDDetailProduct = d.ID WHERE p.Sold > 0";
    $result = $this->db->select($query);
    return $result;
  }
}
?>