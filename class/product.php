<?php
header("Content-type: text/html; charset=utf-8");

class product
{
	public $error="";
	public function getAll ($conn)
	{
		$sql = "SELECT * FROM product;";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->get_result();
		$array = array();
		$count = 1;
		while ($row = $result->fetch_assoc())
		{	
			$array[$count]['ID'] = $row['ID'];
			$array[$count]['Name'] = $row['Name'];	
			$array[$count]['Price'] = $row['Price'];
			$array[$count]['Description'] = $row['Description'];
			$array[$count]['IDCategory'] = $row['IDCategory'];	
			$array[$count]['IDDetailCategory'] = $row['IDDetailCategory'];
			$array[$count]['IDSale'] = $row['IDSale'];
			$array[$count]['newArrival'] = $row['newArrival'];	
			$count++;
		}  
		return $array;
	}
	public function getAllDetail ($conn, $id)
	{
		$sql = "SELECT * FROM detail_product WHERE IDProduct=?;";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s',$id);
		$stmt->execute();
		$result = $stmt->get_result();
		$array = array();
		//$count = 1;
		while ($row = $result->fetch_assoc())
		{	
			$array['ID'] = $row['ID'];
			$array['IDProduct'] = $row['IDProduct'];
			$array['Brand'] = $row['Brand'];
			$array['Image1'] = $row['Image1'];
			$array['Image2'] = $row['Image2'];	
			//$count++;
		}  
		return $array;
	}
	public function getByID ($conn, $id)
	{
		$sql = "SELECT * FROM product WHERE ID=?;";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s',$id);
		$stmt->execute();
		$result = $stmt->get_result();
		$array = array();
		while ($row = $result->fetch_assoc())
		{	
			$array['ID'] = $row['ID'];
			$array['Name'] = $row['Name'];	
			$array['Price'] = $row['Price'];
			$array['Description'] = $row['Description'];
			$array['IDCategory'] = $row['IDCategory'];	
			$array['IDDetailCategory'] = $row['IDDetailCategory'];
			$array['IDSale'] = $row['IDSale'];
			$array['newArrival'] = $row['newArrival'];	
		}  
		return $array;
	}
	public function getReview ($conn, $id)
	{
		$sql = "SELECT * FROM comments WHERE IDProduct=?;";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s',$id);
		$stmt->execute();
		$result = $stmt->get_result();
		$array = array();
		$count=1;
		while ($row = $result->fetch_assoc())
		{	
			$array[$count]['ID'] = $row['ID'];
			$array[$count]['IDProduct'] = $row['IDProduct'];	
			$array[$count]['IDUser'] = $row['IDUser'];
			$array[$count]['Comments'] = $row['Comments'];
			$array[$count]['Rating'] = $row['Rating'];	
			$array[$count]['Postdate'] = $row['Postdate'];
			$count++;
		}  
		return $array;
	}
	public function getRating ($conn, $id)
	{
		$sql = "SELECT * FROM comments WHERE IDProduct=?;";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s',$id);
		$stmt->execute();
		$result = $stmt->get_result();
		$s=0;
		$count=0;
		while ($row = $result->fetch_assoc())
		{	
			$rate = $row['Rating'];
			$s=$s+$rate;
			$count++;
		}  
		$total = $s/$count;
		return $total;
	}
	public function getSize ($conn, $id)
	{
		$sql = "SELECT * FROM category_size WHERE IDCategory=?;";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s',$id);
		$stmt->execute();
		$result = $stmt->get_result();
		$array = array();
		$count=1;
		while ($row = $result->fetch_assoc())
		{	
			$array[$count]['ID'] = $row['ID'];
			$array[$count]['IDCategory'] = $row['IDCategory'];	
			$array[$count]['Name'] = $row['Name'];;
			$count++;
		}  
		return $array;
	}
}

?>