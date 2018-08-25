<?php @require_once 'config/config.php'; ?>
<?php @require_once 'scripts/feedback.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Аренда и ремонт строительного оборудования в Минске</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="favicon.jpg" type="images/x-icon">
	<style type="text/css">
		body{background-color: #F2F2F2;}
	</style>
</head>
<body>
	<!-- Modal Trigger -->
	<div class="callback">
		<a class="btn btn-floating btn-large cyan pulse modal-trigger" href="#modal1"><i class="material-icons">phone</i></a>
	</div>

	<!-- Modal Structure -->
	<div id="modal1" class="modal">
    	<div class="modal-content">
      		<h4>Наши номера телефонов</h4>
			<div class="row">
				<div class="col s12"><i class="material-icons">phone</i><span> 8-029-625-45-25 Velcom</span></div>
			</div>
			<div class="row">
				<div class="col s12"><i class="material-icons">phone</i><span> 8-033-625-99-25 MTS</span></div>
			</div>
			<div class="row">
				<div class="col s12"><i class="material-icons">phone</i><span> 8-017-265-94-88 Городской</span></div>
			</div>
			<div class="row">
				<div class="col s12"><i class="material-icons">email</i><span> rentstar@tut.by</span></div>
			</div>
			<div class="row">
				<div class="col s12"><i class="material-icons">access_time</i><span> Пн - Вс 8:30 - 18.00</span></div>
			</div>
			<div class="row">
				<div class="col s12"><i class="material-icons">directions_car</i><span> г.Минск, ул. Ф. Скорины, 51а</span></div>
			</div>
    	</div>
	    <div class="modal-footer">
	      	<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Закрыть</a>
	    </div>
  	</div>

	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="index.php" class="brand-logo">Rentstar.by</a>
				<a href="#" class="button-collapse" data-activates="mobile-demo">
					<i class="material-icons">menu</i>
				</a>
				<ul class="right hide-on-med-and-down">
					<li><a href="index.php">Главная</a></li>
					<li><a href="#categories">Каталог</a></li>
					<li><a href="#sell-spare-parts">Продажа запчастей</a></li>	
					<li><a href="#mymap">Карта проезда</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="index.php">Главная</a></li>
					<li><a href="#categories">Каталог</a></li>
					<li><a href="#sell-spare-parts">Продажа запчастей</a></li>		
					<li><a href="#mymap">Карта проезда</a></li>
				</ul>
			</div>
		</nav>	
	</div>

	<?php 
		$instruments = mysqli_query($connection, "SELECT * FROM `post` WHERE `category_id` =".(int) $_GET['id']); 
		$category = mysqli_query($connection, "SELECT * FROM `categories` WHERE `id` =".(int) $_GET['id']);
		$cat = mysqli_fetch_assoc($category);
	?>	

	<div class="full-width" style="background-color: #FFED00;">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<h2><?php echo $cat['title'];?></h2>
				</div>
			</div>
		</div>
	</div>

	<div class="full-width">
		<div class="row">
			<?php
				while ($instrument = mysqli_fetch_assoc($instruments)) {
					?>
						<div class="col xl2 l3 m4 s6">
							<div class="card card__instr">
							    <div class="card-image waves-effect waves-block waves-light">
							     	<img class="activator" src="img/card_models/<?php echo $instrument['photo'];?>">
							    </div>
							    <div class="card-content">
							    	<span class="card-title activator grey-text text-darken-4"><?php if($instrument['title'] != ''){echo $instrument['title'];}?><i class="material-icons right">more_vert</i></span>
							      	<p class="price">
							      		<?php 
			           						if($instrument['price'] != 0){
			           							echo "<span style='font-weight:bold;'>1 сутки:</span><span class='red-text'> " . $instrument['price'] . ' руб<br></span>';
			           							echo "<span style='font-weight:bold;'>2 суток:</span> " . '5% скидка<br>';
			           							echo "<span style='font-weight:bold;'>3-5 суток:</span> " . '10% скидка<br>';
			           							echo "<span style='font-weight:bold;'>от 6 суток:</span> " . '20% скидка';
			           						}					
			           					 ?>
							      	</p>
							    </div>
							    <div class="card-reveal">
							      	<span class="card-title grey-text text-darken-4"><?php if($instrument['title'] != ''){echo $instrument['title'];}?><i class="material-icons right">close</i></span>
							      	<p>
							      		<?php 
		              						if($instrument['description'] != ''){
		              							echo $instrument['description'];
		              						}
		              					 ?>
							      	</p>
							    </div>
							</div>
						</div>
					<?php
				}
			?>
		</div>
	</div>

	<div class="full-width" id="feedback">
		<div class="section" style="background-color: #FFED00;">
			<div class="row container center-align">
				<h3 class="header">У вас остались вопросы? Задайте их нам</h3>
			</div>
		</div>
		<div class="row wow bounceIn section white" data-wow-duration='1s' data-wow-offset='200'>
			<form action="instruments.php" id="feedback" class="col s12" method="post">
				<div class="container">
					<div class="row">
						<div class="input-field col offset-l3 l6 offset-m2 m8 s12">
							<i class="material-icons prefix">lock</i>
							<label for="name"><?php echo empty ($errors ['name']) ? 'Имя' : "<span class='red-text'>" . $errors ['name'] . '</span>'; ?></label>
							<input type="text" class="validate" id="name" name="name" value="<?php if(!empty($_POST["name"])){echo $_POST["name"];}?>">
						</div>
					</div>
					<div class="row">
						<div class="input-field col offset-l3 l6 offset-m2 m8 s12">
							<i class="material-icons prefix">mail</i>
							<label for="email"><?php echo empty ($errors ['email']) ? 'Электронный адрес' : "<span class='red-text'>" . $errors ['email'] . '</span>'; ?></label>
							<input type="email" class="validate" id="email" name="email" value="<?php if(!empty($_POST["email"])){echo $_POST["email"];}?>">
						</div>
					</div>
					<div class="row">
						<div class="input-field col offset-l3 l6 offset-m2 m8 s12">
							<i class="material-icons prefix">edit_mode</i>
							<textarea id="textarea1" class="materialize-textarea" name="message" value="<?php if(!empty($_POST["message"])){echo $_POST["message"];}?>">
							</textarea>
          					<label for="textarea1"><?php echo empty ($errors ['mess']) ? 'Текст сообщения' : "<span class='red-text'>" . $errors ['mess'] . '</span>'; ?></label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col offset-l3 l6 offset-m2 m8 s12">
							<button class="btn waves-effect waves-light" type="submit" name="send" style="background-color: #FFED00;color: black;">Отправить
							    <i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="full-width" id="mymap" style="position: relative;">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad7870f044cf9f1d71fe3d9133201515531cbdac5281a13911fa09a9c5939721a&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col s12 center-align black-text">
						<h4 style="font-weight: bold;">Контакты</h4>
					</div>
				</div>
				<div class="row">
					<div class="col s6 left-align black-text">
						<div class="row">
							<div class="col s2">
								<i class="material-icons color-icon">location_on</i>
							</div>
							<div class="col s10">
								<h5 style="font-weight: bold;">Мы находимся:</h5>
								<h5 style="background-color: #FFED00;">г.Минск, ул. Ф.Скорины, 51а</h5>
							</div>
						</div>
					</div>
					<div class="col s6 left-align black-text">
						<div class="col s2">
							<i class="material-icons color-icon">local_phone</i>
						</div>
						<div class="col s10">
							<h5 style="font-weight: bold;">Телефон:</h5>
							<h5 style="background-color: #FFED00;">8-029-625-45-25 VEL</h5>
							<h5 style="background-color: #FFED00;">8-033-625-99-25 MTS</h5>
						</div>
					</div>					
				</div>	
			</div>
		</footer>
	</div>
					            
	<style type="text/css">
		.card .card-title {font-size: 1.25em;font-weight: 300;}
		.card .price {font-size: 1.25em;}
		.card {height: 500px;}
		.card{min-height: 400px;}
		.card .card-content{padding-left: 10px;padding-top: 20px;min-height: 100px;}
		.card .card-image{background-size: contain;}
		.price{font-size: 1.5em;}
		.callback{position: fixed; bottom: 50px; right: 50px; z-index: 100;}
		.modal-content span{margin-top: -20px;}
		@media (max-width: 550px){
			.card{min-height: 500px;}
			.price{font-size: 1.15em;}}
	</style>


	
	<!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
		$(".button-collapse").sideNav();// Show menu for mobile version
		$(".parallax").parallax();
		$('select').material_select();
		$('.modal').modal();
  });
  </script>
</body>
</html>