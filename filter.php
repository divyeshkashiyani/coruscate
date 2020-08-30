<?php
	require'conn.php';

	//print_r($_POST);
	if(isset($_POST['filter'])){
		$group=$_POST['group'];
		
		if($group =='Salary'){
			$sql = "SELECT count(salarySlab) as total_user,COUNT(*) / CAST( SUM(count(*)) over () as float) as Percentage,salarySlab FROM `employee` GROUP BY salarySlab";
			$result = $conn->query($sql) or die($conn->error);
			$i = 1;
			while($fetch = $result->fetch_assoc()){
				echo"<tr><td>".$i."</td><td>".$fetch['salarySlab']."</td><td>".$fetch['total_user']."</td><td>".($fetch['Percentage']*100)."%</td></tr>";
				$i++;
			}
		}
		else if($group =='Department'){
			$sql = "SELECT count(department) as total_user,COUNT(*) / CAST( SUM(count(*)) over () as float) as Percentage,department FROM `employee` GROUP BY department";
			$result = $conn->query($sql) or die($conn->error);
			$i = 1;
			while($fetch = $result->fetch_assoc()){
				echo"<tr><td>".$i."</td><td>".$fetch['department']."</td><td>".$fetch['total_user']."</td><td>".($fetch['Percentage']*100)."%</td></tr>";
				$i++;
			}
		}

		else if($group =='City'){
			$sql = "SELECT count(city) as total_user,COUNT(*) / CAST( SUM(count(*)) over () as float) as Percentage,city FROM `employee` GROUP BY city";
			$result = $conn->query($sql) or die($conn->error);
			$i = 1;
			while($fetch = $result->fetch_assoc()){
				echo"<tr><td>".$i."</td><td>".$fetch['city']."</td><td>".$fetch['total_user']."</td><td>".($fetch['Percentage']*100)."%</td></tr>";
				$i++;
			}
		}
		else if($group =='Country'){
			$sql = "SELECT count(country) as total_user,COUNT(*) / CAST( SUM(count(*)) over () as float) as Percentage,country FROM `employee` GROUP BY country";
			$result = $conn->query($sql) or die($conn->error);
			$i = 1;
			while($fetch = $result->fetch_assoc()){
				echo"<tr><td>".$i."</td><td>".$fetch['country']."</td><td>".$fetch['total_user']."</td><td>".($fetch['Percentage']*100)."%</td></tr>";
				$i++;
			}
		}
		else{
			$sql = "SELECT count(department) as total_user,COUNT(*) / CAST( SUM(count(*)) over () as float) as Percentage,department FROM `employee` GROUP BY department";
			$result = $conn->query($sql) or die($conn->error);
			$i = 1;
			while($fetch = $result->fetch_assoc()){
				echo"<tr><td>".$i."</td><td>".$fetch['department']."</td><td>".$fetch['total_user']."</td><td>".($fetch['Percentage']*100)."%</td></tr>";
				$i++;
			}
		}
	}else{
		$sql = "SELECT count(department) as total_user,COUNT(*) / CAST( SUM(count(*)) over () as float) as Percentage,department FROM `employee` GROUP BY department";
			$result = $conn->query($sql) or die($conn->error);
			$i = 1;
			while($fetch = $result->fetch_assoc()){
				echo"<tr><td>".$i."</td><td>".$fetch['department']."</td><td>".$fetch['total_user']."</td><td>".($fetch['Percentage']*100)."%</td></tr>";
				$i++;
			}
	}
?>