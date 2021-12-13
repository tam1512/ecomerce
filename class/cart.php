<?php
header("Content-type: text/html; charset=utf-8");
if(isset($_POST['cart-btn']))
{
	$classproduct = new product();
	$IDProduct = $_POST['IDProduct'];
	$size = $_POST['size'];
	$quantity = $_POST['quantity'];
	$arrayproduct = $classproduct -> getByID($conn, $IDProduct);
	$arraydetailproduct = $classproduct->getAllDetail($conn, $IDProduct);	
	$cartarray = array('IDProduct' => $IDProduct , 'Quantity' => $quantity,'Size' => $size, 'Name' => $arrayproduct['Name'], 'Price' => $arrayproduct['Price'], 'Image' => $arraydetailproduct['Image1'], 'Brand' => $arraydetailproduct['Brand'], 'Description' => $arrayproduct['Description'], 'IDCategory' => $arrayproduct['IDCategory'], 'IDDetailCategory' => $arrayproduct['IDDetailCategory'], 'IDSale' => $arrayproduct['IDSale']);	
	if(!empty($_SESSION['cart']))
	{
		$cartsize = sizeof($_SESSION['cart']);
		function test($conn,$IDProduct,$quantity,$size)
		{
			$cartsize = sizeof($_SESSION['cart']);
			for($i=0;$i<$cartsize;$i++)
			{
				if($_SESSION['cart'][$i]['IDProduct']==$IDProduct && $_SESSION['cart'][$i]['Size']==$size )
				{
					$sqlcheckamount = "SELECT * FROM detail_product_size_quantity WHERE IDDetailProduct=? AND Size=? LIMIT 1";
					$needcheck = $_SESSION['cart'][$i]['IDProduct'];
					$stmt = $conn->prepare($sqlcheckamount);
					$stmt->bind_param('ss',$needcheck,$size);
					$stmt->execute();
					$result = $stmt->get_result();
					$row = $result->fetch_assoc();					
					if($row['Quantity']==$_SESSION['cart'][$i]['Quantity'] || $row['Quantity']==0)
					{
					header("location: index.php?error=runout");
					exit();	
					}
					else
					{
					$_SESSION['cart'][$i]['Quantity']+=$quantity;
					return true;
					break;
					}
				}
			}
			return false;
		}
		if(test($conn,$IDProduct,$quantity,$size)==false)
		{
			$_SESSION['cart'][$cartsize]=$cartarray;
		}
	}
	else
	{		
		$_SESSION['cart']=array();
		$_SESSION['cart'][0]=$cartarray;
	}
}
if(isset($_POST['remove-cart-btn']))
{
	$removeid = $_POST['removeid'];
	unset($_SESSION['cart'][$removeid]);
	$_SESSION['cart'] = array_values($_SESSION['cart']);
	if(sizeof($_SESSION['cart'])==0)
	{
		unset($_SESSION['cart']);
		header("../index.php");
	}
	header("giohang.php");
}

?>