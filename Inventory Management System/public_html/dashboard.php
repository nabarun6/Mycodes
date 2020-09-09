<?php 

include_once ("./database/constants.php");
if (isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
}

 ?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/main.js"></script>

</head>
<body>

<!------------------------Navbar------------------------->
	<?php include_once("./templates/header.php"); ?>
	<br/><br/>

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card mx-auto">
					  <img src="./images/user.png" style="width: 60%;" class="card-img-top mx-auto" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Profile information</h5>
					    <p class="card-text"><i class="fa fa-address-card">&nbsp;</i>Nabarun Samaddar</p>
					    <p class="card-text"><i class="fa fa-user-circle">&nbsp;</i>Admin</p>
					    <p class="card-text"><i class="fa fa-clock-o">&nbsp;</i>Last Login : xxxx-xx-xxx</p>
					    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
					  </div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="jumbotron" style="width: 100%;height: 100%;">
						<h1>Welcome Admin</h1>
						<div class="row">
							<div class="col-sm-6">
								<iframe src="http://free.timeanddate.com/clock/i7g0c82a/n54/szw210/szh210/hocfff/hbw0/cf100/hgr0/fas20/facfff/fdi86/mqc000/mqs2/mql3/mqw4/mqd70/mhc000/mhs2/mhl3/mhw4/mhd70/mmv0/hhs3/hms3/hsc00f" frameborder="0" width="210" height="210"></iframe>


							</div>
							<div class="col-sm-6">
								 <div class="card">
								      <div class="card-body">
								        <h5 class="card-title">New Orders</h5>
								        <p class="card-text">Here you can make new orders as per your requirement</p>
								        <a href="#" class="btn btn-primary"><i class="fa fa-file-text-o">&nbsp;</i>New Orders</a>
								      </div>
								  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p></p>
		<p></p>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Categories</h5>
							<p class="card-text">Here you can manage your everey categories</p>
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_category"><i class="fa fa-plus-circle">&nbsp;</i>Add</a>
							<a href="#" class="btn btn-primary"><i class="fa fa-hourglass-3">&nbsp;</i>Manage</a>
						</div>
					</div>	
				</div>
				<div class="col-md-4">
				<div class="card">
						<div class="card-body">
							<h5 class="card-title">Brands</h5>
							<p class="card-text">Here you can manage your all famous brands and add new brands</p>
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_brand"><i class="fa fa-plus-circle">&nbsp;</i>Add</a>
							<a href="#" class="btn btn-primary"><i class="fa fa-hourglass-3">&nbsp;</i>Manage</a>
						</div>
				</div>
				</div>	
				<div class="col-md-4">
				<div class="card">
						<div class="card-body">
							<h5 class="card-title">Products</h5>
							<p class="card-text">Here you can manage your all products and add new product items</p>
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_products"><i class="fa fa-plus-circle">&nbsp;</i>Add</a>
							<a href="#" class="btn btn-primary"><i class="fa fa-hourglass-3">&nbsp;</i>Manage</a>
						</div>
				</div>	
				</div>
			</div>
		</div>


		<?php 

		//Category form
		include_once("./templates/category.php");
		 ?>
		 <?php 
		
		//Brands form
		include_once("./templates/brand.php");
		 ?>
		 <?php 
		
		//Products form
		include_once("./templates/products.php");
		 ?>


</body>
</html>
