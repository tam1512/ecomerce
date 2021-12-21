<?php 
  include ('./lib/session.php');
  Session::checkLogin();
  include ('./lib/database.php');
  include ('./helpers/format.php');
?>
<?php
  class loginController
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
      header('Location: login.php');
    }

    public function store($adminEmail, $adminPassword)
    {
      $adminEmail = $this->fm->validation($adminEmail);
      $adminPassword = $this->fm->validation($adminPassword);

      $adminEmail = mysqli_real_escape_string($this->db->link, $adminEmail);
      $adminPassword = mysqli_real_escape_string($this->db->link, $adminPassword);

      if (empty($adminEmail) || empty($adminPassword))
      {
        $alert = "Email and Password must be not empty.";
        return $alert;
      } else {
        $query = "SELECT * FROM users WHERE Email = '$adminEmail' AND permission = 0 LIMIT 1";
        $result = $this->db->select($query);

        if ($result != false)
        {
          $value = $result->fetch_assoc();
          $sha_info = explode("$", $value['Password']);
          if( $sha_info[1] === "SHA" ) {
            $salt = $sha_info[2];
            $sha256_password = hash('sha256', $adminPassword);
            $sha256_password .= $salt;
            if( strcasecmp(trim($sha_info[3]),hash('sha256', $sha256_password) ) == 0 )
            {
              Session::set('login', true);
              Session::set('ID', $value['ID']);
              Session::set('Email', $value['Email']);
              Session::set('Fullname', $value['Fullname']);
              header('Location: index.php');
            }
          }
        } else {
          $alert = "Email and Password not match.";
          return $alert;
        }
      }
    }


    public function destroy()
    {

    }

}
?>

