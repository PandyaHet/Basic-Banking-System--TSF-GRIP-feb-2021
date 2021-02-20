<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mi7ni Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button.css">
	<style>
		ul {
			list-style-type: none;
			margin: 0px;
			padding: 0px;
			overflow: hidden;
			background-color: #5D5C61;
		}

		li {
			float: right;
		}

		li a {
				display: block;
				color: white;
				text-align: center;
				font-size:20px;
				padding: 20px 50px;
				text-decoration: none;
				font-family:Courier;
		}
		li a:hover {
				background-color: #fff;
				color:#111;
		}
		body{
			background-image:url("images/11a.jpg");
			margin:0px;
			background-repeat: no-repeat;
			background-size:cover;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			 background: #336ca6;
			}
		th{
			color:white;
			background-color:#5D5C61;
			font-size:26px;
			padding:15px 50px;
		}
		
		td{
			font-size:23px;
			background-color:white;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:white;
			background-color:#5D5C61;
			text-shadow: 1px 1px black;
			text-align:center;
			margin-top:5px;
		}
		.btn {
			background-color:RoyalBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}
		.btn:hover {
			background-color:  DodgerBlue;
		}
		
	</style>
	</head>
	<body>
		<div id="header">
			   <h1 style="position: absolute; margin:0px; padding:10px 10px; color:white; font-family:Courier;">Digital Bank</h1>
			<ul>
		  <li><a href="transaction.php">Transation History</a></li>
		  <li><a href="transfer.php">Transfer Money</a></li>
		  <li><a href="getdetail.php">View All User</a></li>
		  <li><a href="index.php">Home</a></li>
			</ul>
		</div>
		<h2><?php echo "Mini Statement of ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Credits</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<div>
		<form action="user.php" method="post">
			<div class="buttons">
			<br><button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			
			</div>
		</form>
		
		
	</body>
</html>