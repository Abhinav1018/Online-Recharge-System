<html>
<head><title>Final Page</title>
<style>

	body{
			background-image:url(10.jpg);
			background-position:center;
			background-size:cover;
			margin-top:40px;
	}
	
	div.msg{
		background-color: #b2b2b2;
		background-color: rgba(0, 0, 0, 0.2);
		position:absolute;
		top:200px;
		left:280px;
		width:1000px;
		height:250px;
		text-align:center;
		border:4px solid black;
		font-size:30px;
		font-family:Monospace;
	}
	div.msg1{
		background-color: #b2b2b2;
		background-color: rgba(0, 0, 0, 0.2);
		position:absolute;
		top:200px;
		left:280px;
		width:1000px;
		height:170px;
		text-align:center;
		border:4px solid black;
		font-size:30px;
		font-family:Monospace;
	}
	
	
	.logo1 img{
		position:absolute;
		top:10px;
		left:670px;
		width: 150px;
		height: auto;
	}
	
	button{
		color:black;
		border: 2px solid black;
		background-color:orange;
	}
	
	
</style>
</head>
<body>
	<center><div class="logo1">
			<center><img src="logo1.png"></center>
		</div></center>
<?php
	ob_start();
	include("select_plan.php");
	ob_end_clean();
	$amt=$_POST['plan_amt'];
	$flag=0;
	
	$sql="SELECT* FROM plans1";
	$result=$connect->query($sql);
	$pno=1; 
	
	while($row=$result->fetch_assoc())
		{
			if($amt==$row['price'])	
			{
				$flag=1; ?>
				<div class="msg">
				<?php
				echo "<br><br>Congratulations ! ! !<br><br>";
				echo "Your recharge for Rs. ".$amt." is successful..."; ?>
				</div>
				<?php
				break;
			}
			$pno++;
		}
		
		if($flag==0)
			{ ?>
				<div class="msg1">
				<?php
				echo "Enter a valid amount !"; ?>
				</div>
		<?php
			}
?>			
			<button><a href="index.html" class="btn"><b>BACK TO HOME PAGE</b></a></button>
</body>
</html>