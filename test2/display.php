<?php
 $page = $_SERVER['PHP_SELF'];
 header("Refresh: 10; url=$page");?>
 <?php
$conn = mysqli_connect("localhost","root","","yash");
if($conn)
	echo "connection successfull";
$file = fopen("new.csv","r");
while ($ary=fgetcsv($file)){
			$qry="INSERT INTO `md`(`name`, `roll`, `marks`) VALUES ('$ary[0]',$ary[1],$ary[2])";
			$qryfire=mysqli_query($conn,$qry);
}
fclose($file);
?>
<html>
	<head>
		<style>
		
			table{border-radius:15px;
				background-color:#ffffff;
			}
			th{color:blue;
				font-family:sans-serif;
				font-size:36px;
			}
			td{text-align:center;
				font-family:sans-serif;
			}
		</style>
	</head>
	<body bgcolor='#2c3e50'>
	<center>
	<?php
		$conn=mysqli_connect("localhost","root","","yash");
		if($conn)
		{
			$qry="SELECT * FROM `md` WHERE 1";
			$qry_fire=mysqli_query($conn,$qry);
			echo "<table height=50% width=50% border=2 cellspacing=0>";
			echo "<tr><th>Name</th><th>Roll No</th><th>Marks</th></tr>";
			while($ary=mysqli_fetch_array($qry_fire,MYSQLI_NUM))
			{
				echo "<tr><td>$ary[0]</td><td>$ary[1]</td><td>$ary[2]</td></tr>";
			}
			echo "</table>";
		}
	?>
	</center>
	</body>
</html>