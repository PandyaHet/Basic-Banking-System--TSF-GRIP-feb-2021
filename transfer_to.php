<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer</title>
   <link rel="stylesheet" href="button.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			background-color: rgb(47,137,158);
			background-image:url("images/11a.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			margin:0px;
		}
		.form{
			text-align:center;
			background-color:#5D5C61;
			
		}
		.button{
			text-align:center;
		}
		button{
			border-radius:10px;
			background-color:brown;
		}
		button:hover{
			background-color:#26abff;
		}
		table{
			background-color:#5D5C61;
			padding:50px;
			border:2px ridge white;
			border-radius:5px;
			color:white;
		}
		.btn {
			background-color:RoyalBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn:hover {
			background-color:dogerblue;
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
	<center>
		<div class="view">
			<h2 style=" font-size:45px;color:#ffffff;text-shadow: 2px 2px black; background-color:#5D5C61; margin-top:5px;">Transfer Amount</h2>
			<form action="checkcredit.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:12pt;color:#010114;">
							<label for="sender" align="left" style="color:white;">Receiver Name:</label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td>
			<br><label for="transfer">Amount:</label> 
			 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required></td>
		</tr>
       <tr>
			<td>
				<div class="button">
				<br> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<button type="submit" class="c" onMouseOver="this.style.color='brown'"onMouseOut="this.style.color='black'" value="Credit" style="color:black;font-size:18px;height:40px; width:100px;">Transfer</button>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>
	<form action="user.php" method="post">
			<div class="buttons">
				<button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
	</form>
</center>


</body>
</html>