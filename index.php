<html>
<head>
    <title>Basic Banking System</title>
    
   
	 
	<style>
	.primary_btn {
			width: 250px;
		  height:50px;
		  display: inline-block;
		  background-color: #5D5C61;
		 font-weight:bold;
		  padding: 0px 50px;
		  color: #ffffff;
		  font-family: "Roboto", sans-serif;
		  font-size: 15px;
		  font-weight: 500;
		  line-height: 48px;
		  border: 2px solid #ffffff;
		  border-radius: 15px;
		  outline: none !important;
		  box-shadow: none !important;
		  text-align: center;
		  text-transform: uppercase;
		  cursor: pointer;
		  transition: all 300ms linear 0s; 
		}
	.primary_btn:hover {
		background: #000000;
		color: #fff;
     }
  .primary_btn.yellow_btn {
    background: #fdbb00 !important;
    border: 1px solid #fdbb00 !important;
    color: #000000; }
    .primary_btn.yellow_btn:hover {
      background: transparent !important; }
	body
	{
		text-align:center;
		margin:0px;
	}
		body{
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		background-color:gray;
		background-image:url("images/11a.jpg");
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
		font-size:20px;
		text-align: center;
		padding: 20px 50px;
		text-decoration: none;
		font-family:Courier;
	}
	li a:hover {
		background-color: #fff;
		color:#111;
	}
	td{
		padding:150px 120px;
		align:center;
		
	}
	.header{
		margin:0px;
	}
	.section{
		margin:10px;
	}
	footer p{
		background-color:#5D5C61;
		text-align:center;
		color:white;
		padding:30px;
		margin:auto;
	}
	</style>
</head>
<body >
	
	<div id="header">
	   <h1 style="position: absolute; margin:0px; padding:9px 10px; color:white; font-family:Courier;font-size:40px;">Digital Bank</h1>
	<ul>
  <li><a href="transaction.php">Transaction history</a></li>
  <li><a href="transfer.php">Transfer Money</a></li>
  <li><a href="getdetail.php">View All User</a></li>
  <li><a href="index.php">Home</a></li>
	</ul>
	</div>
       <h1 style=" font-family:Agency FB; font-size: 55px;color:#ffffff;text-shadow: 2px 2px black;margin-top:150px;margin-right:100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome<br>  &nbsp;&nbsp;&nbsp; To<br> &nbsp;&nbsp;&nbsp; Basic Banking System </h1>

        <div id="section">
            <table>
                <tr>
                <td>
				<a href="getdetail.php">
               <button class="primary_btn" id="button "type="button" href="getdetail.php">View users</button>
                </a>

               
                </td>

                <td>        
               <a href="transfer.php">
			   <button class="primary_btn" id="button" type="button">Transfer Money</button>
               </a>
               
               </td>
			   
			    <td>        
                <a href="transaction.php">
			   <button class="primary_btn" id="button" type="button">All Transaction</button>
               </a>
			   </td>
			   </tr>

            </table>
    </div>
	
	<footer>
		<p>&copy; Made By Het Pandya <br>
		GRIP The Sparks Foundation</p>
	</footer>
	           
</body>
</html>