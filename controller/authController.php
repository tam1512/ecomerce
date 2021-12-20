<?php    
    session_start();
	header("Content-type: text/html; charset=utf-8");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
	require_once ("class/database.php"); 
    require_once ("class/account.php");
    require_once ("class/order.php");
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
    $classorder = new order();

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
        //unset($_SESSION['cart']);
        unset($_SESSION['History']);
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
if(isset($_POST['change-password-btn'])){      
        $email = $_POST['Email'];
		$oldpassword = $_POST['oldpassword'];
		$newpassword = $_POST['newpassword'];	
        $query1 = mysqli_query($conn,"SELECT Password FROM `users` WHERE `Email`='".$email."'");
        if($classaccount->checkPassword($email,$oldpassword,$conn))
        {
            $password_info=mysqli_fetch_array($query1);
		    $sha_info = explode("$",$password_info[0]);
  		    if( $sha_info[1] === "SHA" ) 
		    {
			    $salt = $sha_info[2];
			    $passwordencrypted = '$SHA$'.$salt.'$'.hash('sha256',hash('sha256', $newpassword).$salt);
			    mysqli_query($conn,"UPDATE users SET Password='" . $passwordencrypted . "' WHERE Email='" . $email . "'");
			    echo "<script type='text/javascript'>alert('Thay đổi mật khẩu thành công!');</script>";
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('Bạn nhập sai mật khẩu cũ');</script>";
        }	
    }
if(isset($_POST['comment-btn']))
{
    $IDProduct = $_POST['idproduct'];
    $IDUser = $_POST['iduser'];
    if(isset($_POST['rating']))
    {
    $rating = $_POST['rating'];
    }
    else 
    {
	echo "<script type='text/javascript'>alert('Bạn chưa đánh giá');</script>";
    }
    $comment = $_POST['comment'];
    $timetoday = time();
	if($IDProduct=='' || $IDUser=='' || $comment=='')
	{
		echo "<script type='text/javascript'>alert('Bạn chưa nhập đầy đủ thông tin');</script>";
	}
	else
	{
        $sqlcomment = "INSERT INTO comments(IDProduct, IDUser, Comments, Rating, Postdate) VALUES(?,?,?,?,?);";
        $stmt = $conn->prepare($sqlcomment);
        $stmt->bind_param('sssss',$IDProduct, $IDUser, $comment, $rating, $timetoday);
        $stmt->execute();
    } 
}
if(isset($_GET['product-id']))
{
    $historyarray = array('ID' => $_GET['product-id']);
    if(isset($_SESSION['History']))
    {
        $check=0;
        $historysize = sizeof($_SESSION['History']);
        for($i=0;$i<$historysize;$i++)
        {
            if($historyarray['ID']==$_SESSION['History'][$i]['ID'])
            {
                $check=1;
            }
        }
        if($check==0)
        {
            $_SESSION['History'][$historysize] = $historyarray; 
        }       
    }
    else
    {
        $_SESSION['History'][0] = $historyarray; 
    }   
}
if(isset($_POST['checkout-btn']))
{	   
	$total=0;
	$totalquantity=0;
	for ($i=0; $i<sizeof($_SESSION['cart']); $i++)
	{ 
	$total = $total + $_SESSION['cart'][$i]['Quantity']*$_SESSION['cart'][$i]['Price'];
	}
    $total = $total+25000;
    if(isset($_POST['addressdropdown']) || isset($_POST['idhidden']))
    {
        $check = 0;
        if(isset($_POST['addressdropdown']))
        {
        $addressarray = $classaccount->getAccountAddressByID($conn, $_POST['addressdropdown']);
        $fullname = $addressarray['Fullname'];
        $address = $addressarray['Address'];
        $phonenumber = $addressarray['Phonenumber'];
        $khachhang = $addressarray['IDUser'];
        $email = $_POST['email']; 
        $note = $_POST['note'];
        $check = 1;
        }
        if(isset($_POST['idhidden']))
        { 
        $fullname = $_POST['fullname'];    
        $phonenumber = $_POST['phonenumber'];
        if($classaccount->checkPhoneNumber($phonenumber))
            {
            $address = $_POST['address'];	        
            $khachhang = $_POST['idhidden'];;
            $email = $_POST['email']; 
            $note = $_POST['note'];
            $check = 1;
            }
            else
            {
            echo "<script type='text/javascript'>alert('Sai định dạng số điện thoại');</script>";
            }  
        }
        if($check == 1)
        {
        $timetoday = time();
        $shiptype = $_POST['shiptype'];	

	    $sqlcheckorderid = "SELECT * FROM orders;";
	    $stmt = $conn->prepare($sqlcheckorderid);
	    $stmt->execute();
	    $result = $stmt->get_result();
	    $rowtoinsert = mysqli_num_rows($result)+1;

        $order = array("ID"=>$rowtoinsert,"IDUser"=>$khachhang,"Fullname"=>$fullname,"Address"=>$address,"Email"=>$email,"Phonenumber"=>$phonenumber,"Total"=>$total,"Note"=>$note,"Orderdate"=>$timetoday,"Shiptype"=>$shiptype);
	    $insertdetailarray = array();
	    for($i=0;$i<sizeof($_SESSION['cart']);$i++)
	    {
        $insertdetailarray[$i]['IDOrder'] = $rowtoinsert;
	    $insertdetailarray[$i]['IDProduct'] = $_SESSION['cart'][$i]['IDProduct'];
        $insertdetailarray[$i]['Price'] = $_SESSION['cart'][$i]['Price'];
	    $insertdetailarray[$i]['Quantity'] = $_SESSION['cart'][$i]['Quantity'];
	    $insertdetailarray[$i]['Size'] = $_SESSION['cart'][$i]['Size'];    
	    }
	    $classorder->addOrder($order, $insertdetailarray,$conn);
	    unset($_SESSION['cart']); 
        }        
    }
    else
    {
        $fullname = $_POST['fullname'];    
        $phonenumber = $_POST['phonenumber'];
        if($classaccount->checkPhoneNumber($phonenumber))
        {
        $address = $_POST['address'];	        
        $khachhang = "Unknown";
        $email = $_POST['email']; 
        $note = $_POST['note'];
        $timetoday = time();
        $shiptype = $_POST['shiptype'];	

	    $sqlcheckorderid = "SELECT * FROM orders;";
	    $stmt = $conn->prepare($sqlcheckorderid);
	    $stmt->execute();
	    $result = $stmt->get_result();
	    $rowtoinsert = mysqli_num_rows($result)+1;

        $order = array("ID"=>$rowtoinsert,"IDUser"=>$khachhang,"Fullname"=>$fullname,"Address"=>$address,"Email"=>$email,"Phonenumber"=>$phonenumber,"Total"=>$total,"Note"=>$note,"Orderdate"=>$timetoday,"Shiptype"=>$shiptype);
	    $insertdetailarray = array();
	    for($i=0;$i<sizeof($_SESSION['cart']);$i++)
	    {
        $insertdetailarray[$i]['IDOrder'] = $rowtoinsert;
	    $insertdetailarray[$i]['IDProduct'] = $_SESSION['cart'][$i]['IDProduct'];
        $insertdetailarray[$i]['Price'] = $_SESSION['cart'][$i]['Price'];
	    $insertdetailarray[$i]['Quantity'] = $_SESSION['cart'][$i]['Quantity'];
	    $insertdetailarray[$i]['Size'] = $_SESSION['cart'][$i]['Size'];    
	    }
	    $classorder->addOrder($order, $insertdetailarray,$conn);
	    unset($_SESSION['cart']); 
        }
        else
        {
        echo "<script type='text/javascript'>alert('Sai định dạng số điện thoại');</script>";
        }  
    }      
}
if(isset($_POST['search-btn']))
{
    $keyword = $_POST['keyword'];
    header("location: category.php?keyword=$keyword");
}
?>