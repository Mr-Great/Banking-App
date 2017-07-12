<!DOCTYPE html>
<html lang="en">
<head runat="server">
	<base href="/Stephanie/public/">
	<meta charset="UTF" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Eagle Flight Microfinance Bank | <?=$_SESSION['session_fullname'];?> | Buy Airtime</title>
	<link rel="stylesheet" type="text/css" href="css/magic.css">
	<script src="../vendor/jquery.min.js"></script>
	<script src="js/menu.js"></script>
</head>
<body>
	<div id="header">
		<h1>Eagle Flight Microfinance Bank</h1>
		<?php include 'includes/menu.php';?>
	</div>
	<div id="content">
		<div class="cnt-header">
			<div class="breadcrumbs">
				<h2><a href="User/index">Dashboard</a> / <a href="User/recharge">Buy Airtime</a></h2>
				<a href="logout" class="btn-profile"><img src="icons/logout.png" title="Logout" /></a>
				<span class="btn-profile">Welcome <?=$_SESSION['session_username'];?>&nbsp;&nbsp;&nbsp;</span>
			</div>
		</div>
		<div class="cnt-body">
			<div class="cnt-wrap-signup">
				<dl class="form">
					<?=$stat?>
					<form action="User/recharge" method="post">
					<dt class="form-control">
						<label for="amount">Select Network</label>
						<select name="network" required>
							<option>Choose Network</option>
							<option value="mtn">Mtn</option>
							<option value="glo">Glo</option>
							<option value="airtel">Airtel</option>
							<option value="Etisalat">Etisalat</option>
						</select>
					</dt>
					<dt class="form-control">
						<label for="amount">Amount</label>
						<input type="number" id="amount" name="amount" required />
					</dt>
					<dt class="form-control">
						<label for="phone">Phone Number</label>
						<input type="text" id="phone" name="phone" />
					</dt>
					<dt class="form-control">
						<label for="pin">Pin</label>
						<input type="password" id="pin" name="pin" />
					</dt>
					<dt class="form-control">
						<input type="submit" value="Make Payment" name="btn_recharge" />
					</dt>
					</form>
				</dl>
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