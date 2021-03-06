<!DOCTYPE html>
<html lang="en">
<head runat="server">
	<base href="/Stephanie/public/">
	<meta charset="UTF" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Eagle Flight Microfinance Bank | Admin | Accounts</title>
	<link rel="stylesheet" type="text/css" href="css/magic.css">
	<script src="../vendor/jquery.min.js"></script>
	<script src="js/menu.js"></script>
</head>
<body>
	<div id="header">
		<h1>Eagle Flight Microfinance Bank</h1>
		<?php include 'includes/admin.php';?>
	</div>
	<div id="content">
		<div class="cnt-header">
			<div class="breadcrumbs">
				<h2><a href="Admin/index">Dashboard</a> / <a href="Admin/accounts">Accounts</a></h2>
				<a href="logout" class="btn-profile"><img src="icons/logout.png" title="Logout" /></a>
				<span class="btn-profile">Welcome Admin&nbsp;&nbsp;&nbsp;</span>
			</div>
		</div>
		<div class="cnt-body">
			<div class="cnt-wrap-table">
				<table>
					<tr>
					    <th>SN</th>
					    <th>First Name</th>
					    <th>Other Names</th>
					    <th>Gender</th>
					    <th>Phone Number</th>
					    <th>Account Number</th>
					    <th>View</th>
					</tr>
					<?php $ii=1;?>
					<?php foreach($accounts as $account) :?>
					<tr>
				    	<td><?=$ii;?></td>
				    	<td><?=$account->first_name;?></td>
				    	<td><?=$account->other_name;?></td>
				    	<td><?=$account->gender;?></td>
				    	<td><?=$account->phone_no;?></td>
				    	<td><?=$account->account_no;?></td>
				    	<td><a href="Admin/accountprofile?uas_id=<?=$account->id;?>"><button class="btn-view">view</button></a></td>
				  	</tr>
				  	<?php $ii++;?>
				  	<?php endforeach;?>
				</table>
			</div>
		</div>
		<div class="cnt-header">
			<div class="breadcrumbs">
				<h3>&copy;Benson Idahosa University</h3>
			</div>
		</div>
	</div>
</body>
</html>