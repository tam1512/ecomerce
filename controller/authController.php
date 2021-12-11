<?php    
    session_start();
	header("Content-type: text/html; charset=utf-8");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
	require_once ("class/database.php"); 
    require_once ("class/account.php");    
	$todaytime = time();
	$classconnection = new connection();
	$conn = $classconnection->connect();
	$error = "";
	$error2 = "";
    $errorfullname = "";
    $erroremail = "";
    $errorphonenumber = "";
	$username = "";	
	$title = "E-Commerce";
    $classaccount = new account();

if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
	if($email=='' || $password=='')
	{
		$error = "*Hãy nhập đầy đủ email và mật khẩu!!";
	}
	else
	{
        if($accountarray = $classaccount->getAccount($email,$conn))
        {
            $return_var = $classaccount->checkPassword($accountarray['Email'],$password,$conn);
            if($return_var == true)
		    {
				    $setlogintimesql = "UPDATE users SET lastlogin=? WHERE Email=?;";
				    $stmtlogintime = $conn->prepare($setlogintimesql);
				    $stmtlogintime->bind_param('ss',$todaytime,$accountarray['Email']);
				    $stmtlogintime->execute();
                    $_SESSION['ID']= $accountarray['ID'];
                    $_SESSION['Email']= $accountarray['Email'];
                    $_SESSION['Password']= $accountarray['Password'];			        
			        $_SESSION['Fullname']= $accountarray['Fullname'];
			        $_SESSION['Phonenumber']= $accountarray['Phonenumber'];
			        $_SESSION['regdate']= $accountarray['regdate'];
				    $_SESSION['lastlogin']= $accountarray['lastlogin'];
                    header('Location: index.php');
                    exit();
            }
            else
		    {
                $error="*Email hoặc mật khẩu không đúng!!";
            } 
        }
        else
        {
            $error="*Email hoặc mật khẩu không đúng!!";
        }		
    }
}

if(isset($_POST['register-btn']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];	
    $timetoday = time();
    $salt = $classaccount->getRandomString(16);
    $passwordhash = '$SHA$'.$salt.'$'.hash('sha256',hash('sha256', $password).$salt);
	if($email=='' || $password=='' || $fullname=='')
	{
		$error = "*Hãy nhập đầy đủ thông tin!!";
		$error2 = "(*)";
	}
	else
	{
        $addaccountarray = array("Email" => $email, "Password" => $passwordhash, "Fullname" =>$fullname, "regdate" => $timetoday);
		if($classaccount->addAccount($addaccountarray, $conn))
		{
			header("Location: index.php");
			exit();
		}
		else
		{
			$error="*Email này đã có người đặt!!";
            $error2="(*)";
		}
    } 
}

if(isset($_GET['logout']))
	{
        session_destroy();
        unset($_SESSION['ID']);
        unset($_SESSION['Email']);
        unset($_SESSION['Fullname']);
        unset($_SESSION['Password']);       
		unset($_SESSION['Phonenumber']);
		unset($_SESSION['regdate']);
		unset($_SESSION['lastlogin']);
        header('location: index.php');
        exit();
    }

	if(isset($_POST['account-btn']))
	{
        $userid = $_SESSION["ID"];
        $fullname = $_POST['fullnameacc'];
        $phonenumber = $_POST['phonenumberacc'];
		$email = $_POST['emailacc'];

        if($fullname != $_SESSION['Fullname'])
        {
                if($fullname=="")
                {
                    $errorfullname = "*Hãy nhập đầy đủ họ và tên";
                }
                else
                {
                    $fullnamesql = "UPDATE users SET Fullname=? WHERE ID=?;";
                    $stmt = $conn->prepare($fullnamesql);
                    $stmt->bind_param("ss", $fullname, $userid);
                    $stmt->execute();
                    $_SESSION['Fullname'] = $fullname;
                }
        }
        if($phonenumber != $_SESSION['Phonenumber'])
        {
            if(isset($phonenumber))
            {
                if($phonenumber=="")
                {
                    $errorphonenumber = "*Hãy nhập đầy đủ số điện thoại";
                }
                else
                {
                    if ($classaccount->checkPhoneNumber($phonenumber))
                    {
                    $phonenumbersql = "UPDATE users SET Phonenumber=? WHERE ID=?;";
                    $stmt = $conn->prepare($phonenumbersql);
                    $stmt->bind_param("ss", $phonenumber, $userid);
                    $stmt->execute();
                    $_SESSION['Phonenumber'] = $phonenumber;
                    }
                    else 
                    {
                    $errorphonenumber = "*Sai định dạng sđt (10 số)";
                    }
                }
            }
        }
        if($email != $_SESSION['Email'])
        {
            if(isset($email))
            {
                if($email=="")
                {
                    $erroremail = "*Hãy nhập đầy đủ email";
                }
                else
                {
                    $emailsql = "UPDATE users SET Email=? WHERE ID=?;";
                    $stmt = $conn->prepare($emailsql);
                    $stmt->bind_param("ss", $email, $userid);
                    $stmt->execute();
                    $_SESSION['Email'] = $email;
                }
            }
        }
	}
    
	if(isset($_POST['password-reset-btn'])){
        $email = $_POST['email'];
        $sql = "SELECT * FROM users WHERE Email=?  LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $row = $result->num_rows;
            if($row == 1)
			{
                    header("Location: controller/password-reset-token.php?email=$email");
                    exit();
            }
            else
			{
                $error="*Email không đúng!!";
            }            
    }    
	if(isset($_POST['new-password'])){
		$email = $_POST['email'];
		$reset_link_token = $_POST['reset_link_token'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

            if($password == $cpassword)
			{
                    header("Location: controller/update-forget-password.php?email=$email&reset_link_token=$reset_link_token&password=$password");
                    exit();
            }
            else
			{
                header("location: reset-password.php?key=$email&token=$reset_link_token&alert=1");
            }            
    }  
?>