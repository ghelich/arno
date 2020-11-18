<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>صفحه پروفایل کاربری</title>
	<link rel="stylesheet" href="css/bootstrap-rtl.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" href="css/style.css" rel="stylesheet" />
</head>
<body class="profile-page" data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- The HEADER -->
	<header id="header">
		<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
		</nav>
	</header>
    <!-- navigation -->

<div class="header w3ls wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
  <div class="container">
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header logo">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <h3>
                  <center>
                  <img src="http://uupload.ir/files/ibi0_111.png">
                   <a href="https://arnomaskan.ir"> صفحه اصلی</a>
                                    <center/></a>
                </h3>
              </div>
                </div>
</div>
<!-- //navigation -->
<!-- sidebar -->
	<main>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12">

				</div>
				<!-- start tab content -->
				<div class="col-md-6 col-sm-8 col-xs-12">
					<div class="tab-content">
						<!-- about -->
						<div id="about" class="tab-pane fade in active">
							<h3>پروفایل کاربری شما</h3>
                            <form action="../process.php" method="post">
								<?php
                                include '../config.php';
								$result = isUserExists($_SESSION['userdetail']);
                                echo ' <p><span>   نام:<input type="text" name="name" value='.getvalue($result,"name").' /> </span>   :نام و نام خانوادگی  <input type="text" name="family" value='.getvalue($result,"family").'  /> </span> </p>';
								echo '<p><span><strong>نام کاربری :  <input type="text" name="username" value='.getvalue($result , "username").' /> </strong></span>  </p>';
								echo '<p><span><i class="fa fa-calendar"></i><strong>تاریخ تولد :  <input type="text" name="BirthDate" value='.getvalue($result , "BirthDate").' /></strong></span>  </p>';
								echo '<p><span><i class="fa fa-envelope"></i><strong>پست الکترونیک : <input type="text" name="email" value='.getvalue($result , "email").' /></strong></span>  </p>';
								echo '<p><span><i class="fa fa-map-marker"></i><strong>آدرس :<input type="text" name="address" value='.getvalue($result , "address").' /></strong></span> </p>';
								echo '<p><span><i class="fa fa-phone"></i><strong>تلفن تماس : <input type="text" name="tellephone" value='.getvalue($result , "tellephone").' /></strong></span> </p>';?>
								<p><button type="submit" name="updateProfile">   ذخیره   </button></p>

							</form>

						</div>
						<!-- adventures and blog -->
						<div id="adventures" class="tab-pane fade">
							<h3>مقالات</h3>
							<h4><i class="fa fa-pencil"></i> عنوان مقاله</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
							<h4><i class="fa fa-pencil"></i> عنوان مقاله</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
							<h4><i class="fa fa-pencil"></i> عنوان مقاله</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
							<h4><i class="fa fa-pencil"></i> عنوان مقاله</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
						</div>

						<!-- subset -->
						<div id="subset" class="tab-pane fade">
							<h3>گالری تصاویر</h3>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<div class="thumbnail">
										<img src="pics/chopper.jpg">
										<div class="caption">
											<p>صوفی <small>(jpg)</small><p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<div class="thumbnail">
										<img src="pics/chopper.jpg">
										<div class="caption">
											<p>صوفی <small>(jpg)</small><p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<div class="thumbnail">
										<img src="pics/chopper.jpg">
										<div class="caption">
											<p>صوفی <small>(jpg)</small><p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<div class="thumbnail">
										<img src="pics/chopper.jpg">
										<div class="caption">
											<p>صوفی <small>(jpg)</small><p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<div class="thumbnail">
										<img src="pics/chopper.jpg">
										<div class="caption">
											<p>صوفی <small>(jpg)</small><p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<div class="thumbnail">
										<img src="pics/chopper.jpg">
										<div class="caption">
											<p>صوفی <small>(jpg)</small><p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<div class="thumbnail">
										<img src="pics/chopper.jpg">
										<div class="caption">
											<p>صوفی <small>(jpg)</small><p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<div class="thumbnail">
										<img src="pics/chopper.jpg">
										<div class="caption">
											<p>صوفی <small>(jpg)</small><p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<div class="thumbnail">
										<img src="pics/chopper.jpg">
										<div class="caption">
											<p>صوفی <small>(jpg)</small><p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- contact form -->
						<div id="contact" class="tab-pane fade">
							<h3>ارتباط با پشتیبان سایت</h3>
							<div class="card card-signup">
								<form class="form" method="" action="">
									<div class="content">
										<div class="input-group">
											 <span class="input-group-addon">
												<i class="fa fa-user-circle"></i>نام
											 </span>
											<input type="text" class="form-control" placeholder="نام و نام خانوادگی">
										</div>
										<div class="input-group">
											<span class="input-group-addon">
											  <i class="fa fa-envelope"></i>پست الکترونیک
											</span>
											<input type="text" class="form-control" placeholder="پست الکترونیک">
										</div>
										<div class="input-group">
											<span class="input-group-addon">
											  <i class="fa fa-pencil"></i>متن پیام
											</span>
											<textarea placeholder="متن پیام ..." class="form-control" rows="3"></textarea>
										</div>
									</div>
									<div class="footer text-center">
										<a href="#" class="btn btn-simple btn-success btn-lg text-blue">ارسال پیام</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				</div>
			</div>
		</div>
	</main>

			</nav>
			<div class="copyright pull-right">
				به آرنو اکانت خود خوش آمدید <a class="text-success" href="http://arnomaskan.ir" target="_blank"></a>.
			</div>
		</div>
	</footer>

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>
<?php

function isUserExists($username )
{
    global $pdo;
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username]);
    //return $stmt->rowCount();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return ($result);

}
function getvalue($params , $param){
    return $params[$param];
}
function phpAlert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
