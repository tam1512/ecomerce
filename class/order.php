<?php
header("Content-type: text/html; charset=utf-8");

class order
{
	public $error="";
	public function getAllOrder($cusID,$conn)
	{
		$sql = "SELECT * FROM orders WHERE IDUser=?;";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s',$cusID);
		$stmt->execute();
		$result = $stmt->get_result();
		$count = 0;
		$historyarray=array();
		while($row = $result->fetch_assoc())
		{
			$historyarray[$count]['ID'] = $row['ID'];
			$historyarray[$count]['IDUser'] = $row['IDUser'];
			$historyarray[$count]['Fullname'] = $row['Fullname'];
			$historyarray[$count]['Address'] = $row['Address'];
			$historyarray[$count]['Email'] = $row['Email'];
			$historyarray[$count]['Phonenumber'] = $row['Phonenumber'];
			$historyarray[$count]['Total'] = $row['Total'];
			$historyarray[$count]['Note'] = $row['Note'];
			$historyarray[$count]['Orderdate'] = $row['Orderdate'];
			$historyarray[$count]['Ordertype'] = $row['Ordertype'];
			$historyarray[$count]['State'] = $row['State'];
			$count++;
		}
		return $historyarray;
	}
	public function getOrderDetail($orderid,$conn)
	{
		$sql = "SELECT * FROM detail_order WHERE IDOrder=?;";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s',$orderid);
		$stmt->execute();
		$result = $stmt->get_result();
		$count = 0;
		$detailarray = array();
		$classproduct = new product();
		while($row = $result->fetch_assoc())
		{
			$productarray = $classproduct->getByID($conn,$row['IDProduct']);
			$productdetailarray = $classproduct->getAllDetail($conn,$row['IDProduct']);
			$detailarray[$count]['ID'] = $row['ID'];
			$detailarray[$count]['IDOrder'] = $row['IDOrder'];
			$detailarray[$count]['Name'] = $productarray['Name'];
			$detailarray[$count]['Brand'] = $productdetailarray['Brand'];
			$detailarray[$count]['Image'] = $productdetailarray['Image1'];
			$detailarray[$count]['IDProduct'] = $row['IDProduct'];
			$detailarray[$count]['Price'] = $row['Price'];
			$detailarray[$count]['Quantity'] = $row['Quantity'];
			$detailarray[$count]['Size'] = $row['Size'];
			$count++;
		}
		return $detailarray;
	}		
	public function addOrder($order, $detail,$conn)
	{
		$OrderID = $order['ID'];
		$khachhang = $order['IDUser'];
		$fullname = $order['Fullname'];  
		$address = $order['Address'];
		$email = $order['Email'];		  
		$phonenumber = $order['Phonenumber'];
		$total = $order['Total'];
		$note = $order['Note'];		
		$timetoday = time();
		$shiptype = $order['Shiptype'];

		$sqlorder = "INSERT INTO orders VALUES (?,?,?,?,?,?,?,?,?,?,'0');";
        $stmt = $conn->prepare($sqlorder);
        $stmt->bind_param('ssssssssss',$OrderID,$khachhang,$fullname, $address, $email, $phonenumber,$total, $note, $timetoday, $shiptype);
        $stmt->execute();
	
		$sqlorderdetail = "INSERT INTO detail_order(IDOrder,IDProduct,Price,Quantity,Size) VALUES (?,?,?,?,?);";
		$sqlitemquantitydecrease = "UPDATE detail_product_size_quantity SET Quantity=Quantity-? WHERE IDDetailProduct=? AND Size=?";
		$sqlsold = "UPDATE product SET Sold=Sold+? WHERE ID=?";
		for($i=0;$i<sizeof($detail);$i++)
		{
		$IDOrder = $detail[$i]['IDOrder'];
		$IDProduct = $detail[$i]['IDProduct'];
		$Price = $detail[$i]['Price'];
		$Quantity = $detail[$i]['Quantity'];
		$Size = $detail[$i]['Size']; 

		$stmt = $conn->prepare($sqlorderdetail);
		$stmt->bind_param('sssss',$IDOrder,$IDProduct,$Price,$Quantity,$Size);
		$stmt->execute();
		$stmt = $conn->prepare($sqlitemquantitydecrease);
		$stmt->bind_param('sss',$Quantity,$IDProduct,$Size);
		$stmt->execute();
		$stmt = $conn->prepare($sqlsold);
		$stmt->bind_param('ss',$Quantity,$IDProduct);
		$stmt->execute();
		}
		echo "<script type='text/javascript'>alert('Đặt hàng thành công!');</script>";
	}
}
?>