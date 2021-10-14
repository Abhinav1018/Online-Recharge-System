<html>
	<head>
		<title>Select Plan</title>
		
		<style>
		
			body{
			background-image:url(8.jpg);
			background-position:center;
			background-size:cover;
			margin-top:40px;
		}
			h1{
				font-family:Georgia;
				border: 3px solid black;
				height:20px;
				padding:20px;
				background-color:yellow;
				text-align:center;
				
			}
			
			button {
			background-color: orange;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			}
			button:hover{
			background-color:green;
	}
			
			table tr td{
				text-align:center;
				font-family:sans-serif;
			}
			
			th {
			  height: 50px;
			  background-color: #4CAF50;
			  color: white;

			}
			tr{
				height: 30px;
				background-color: white;
			}
			th, td {
			  border-bottom: 3px solid #ddd;
			}
			
			tr:hover{
				background-color:#FF9933;
			}
						
			hr.hr1{
				 border: 1px solid red;
			}
			hr.hr2{
				 border: 1px solid blue;
			}			
			

		</style>
	</head>
	<center>
	<body>
	<h1>P L A N S</h1>
	<hr class="hr1">
	<hr class="hr2"><br><br>
		
		
			<?php
				include("connection.php");
				$sql="SELECT* FROM plans1";
				$result=$connect->query($sql);
				$pno=1; 
				?>

				<br>
			
				<table style="border: 1px solid black; width:90%">
					<th>Plan No.</th>
					<th>Price(in Rs.)</th>
					<th>Plan Details</th>
					<th>Validity</th>
					
					<?php
				while($row=$result->fetch_assoc())
				{
					?>
					<tr>
						<td><?php echo $pno; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><?php echo $row['plans']; ?></td>
						<td><?php echo $row['validity']; ?></td>
					</tr>
				<?php 
					$pno++;
				}
				?> 
						
					</table><br><br>
				
					<button><a href="form.html" style="color:black;" class="btn"><b>RECHARGE</b></a>
					</button>
					
			
			
		
	</body></center>
</html>
