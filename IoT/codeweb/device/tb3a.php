<?php
include "../language/config.php";
include "../login/connection.php";
	
	$query ="SELECT * from status";					
	$result = $conn->query($query);
	
		while($row = $result->fetch_assoc()) 
		{
			
           $t=$row["Ps2"] ;
	
		};
		if($t==0){echo  $lang3['dangtat'];};
		if($t==1){echo  $lang3['dangbat'];};



 




?>