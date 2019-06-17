<?php
require 'conn.php';
$file = fopen("ram.csv","r");
while ($ary=fgetcsv($file)){
	$qry2="SELECT * FROM `info` WHERE 1";
	$qry_fire2=mysqli_query($conn,$qry2);
	while($ary2=mysqli_fetch_array($qry_fire2))
	{
		echo $ary2[0].$ary2[1].$ary2[2]."<br>";
		if($ary[1]!=$ary2[1])
		{
			$qry="INSERT INTO `info`(`name`, `rolll no`, `marks`) VALUES ('$ary[0]',$ary[1],$ary[2])";
			$qryfire=mysqli_query($conn,$qry);
			if(!$qryfire)
				echo "error";
			else
				echo "successfull";
			echo $ary[0].$ary[1].$ary[2]."<br>";
			break;
		}
		else
						echo "data already exists";
	}
}
fclose($file);
?>