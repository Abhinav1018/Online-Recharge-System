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
			
			input[type=submit] {
			background-color: #009900;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			}
			input[type=submit]:hover{
			background-color:#7F00FF;
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
			.amt{
			position:relative;
			left:20px;
			top:-37px;
			line-height:40px;
			width:255px;
			border-radius:6px;
			padding:0 22px;
			font-size:16px;
			color:#555;
		}
		.print{
			font-family:Segoe Print;
			font-size:18px;
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
				$fname=$_POST['first_name'];
				$lname=$_POST['last_name'];
				$phone=$_POST['phone'];
				$code=$_POST['area_code']?>
				<div class="print">
				<?php
				echo "Welcome ".$fname." ".$lname." !<br>";
				echo "Recharge plans for ".$code." ".$phone;?></div>
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
					
					
			
			<form action="endpage.php" method="post">
			<h2>Amount:</h2>
			<br><center><input class="amt" type="text" name="plan_amt" id="plan_amt" placeholder="Enter Amount"/></center>
			<br><center><input type="submit" name="submit" id="submit" value="Proceed"/></center>
		</form>
		
	</body></center>
</html>
