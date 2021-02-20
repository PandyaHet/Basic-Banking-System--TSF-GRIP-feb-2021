	<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/11a.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
		margin:auto;
		vertical-align: middle;
		text-align:center;
		
	}
	
	label{
		color:white;
		
	}
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
	.center{
		display:inline-block;
		background-color:#5D5C61;
		padding:50px;
		border-radius:10px;
		border:solid #ffffff;
	}
	option{
		color:#990000;
	}	
	.ho{
		padding-top:50px;
	}
	.button1{
		color:white;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: white;
		font-size:17px;
		font-weight:bold;
		background:none;
	}
	.button:hover{
		background-color:white;
		color:#333;
	}
	
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Naveen"){
				 var arr=["Janki","Het","Palak","Vaishali","Monika","Ravina","Nishant","Vishwa","Rushi"];
				 }
				 else if(a==="Janki"){
					var arr=["Avinash","Het","Palak","Vaishali","Monika","Ravina","Nishant","Vishwa","Rushi"];
				}
				else if(a==="Het"){
					var arr=["Naveen","Janki","Palak","Vaishali","Monika","Ravina","Nishant","Vishwa","Rushi"];
				}
				else if(a==="Palak"){
					var arr=["Naveen","Janki","Het","Vaishali","Monika","Ravina","Nishant","Vishwa","Rushi"];
				 }
				 else if(a==="Vaishali"){
					var arr=["Naveen","Janki","Het","Palak","Monika","Ravina","Nishant","Vishwa","Rushi"];
				 }
				 else if(a==="Monika"){
					var arr=["Naveen","Janki","Het","Palak","Vaishali","Ravina","Nishant","Vishwa","Rushi"];
				 }
				 else if(a==="Ravina"){
					var arr=["Naveen","Janki","Het","Palak","Vaishali","Monika","Nishant","Vishwa","Rushi"];
				 }
				 else if(a==="Nishant"){
					var arr=["Naveen","Janki","Het","Palak","Vaishali","Monika","Ravina","Vishwa","Rushi"];
				 }
				 else if(a==="Vishwa"){
					var arr=["Naveen","Janki","Het","Palak","Vaishali","Monika","Ravina","Nishant","Rushi"];
				 }
				 else if(a==="Rushi"){
				 var arr=["Naveen","Janki","Het","Palak","Vaishali","Monika","Ravina","Nishant","Vishwa"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
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
	<h1 style=" font-size:45px;color:#ffffff;text-shadow: 1.5px 1.5px black; background-color:#5D5C61; margin-top:5px; padding:5px;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px; color:#990000;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Het">Het</option>
			<option value="Naveen">Naveen</option>
			<option value="Janki">Janki</option>
			<option value="Palak">Palak</option>
			<option value="Vaishali">Vaishali</option>
			<option value="Monika">Monika</option>
			<option value="Rushi">Rushi</option>
			<option value="Nishant">Nishant</option>
			<option value="Ravina">Ravina</option>
			<option value="Vishwa">Vishwa</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px; color:#990000;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px; color:#990000;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>


	
	
</body>
</html>