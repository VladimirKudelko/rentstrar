<!--
-главный цвет: #0D8587
-->
<!--
		about-us
		categories
		calculation
		our-partners
		advantages
		sell-spare-parts
		price-list
		feedback
		mymap
-->
<?php @require_once 'config/config.php'; ?>
<?php @require_once 'scripts/feedback.php'; ?>
<!DOCTYPE html>
<html>
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
	<!--Animate files-->
	<link rel="stylesheet" href="css/animate.css">
	<script src="js/wow.min.js"></script>
    <script>
  		new WOW().init();
    </script>
    <script>
    	var item = [];
    	var price = [];

    	<?php $q = mysqli_query ($connection, 'SELECT * FROM `post`'); ?>

    	<?php while ( $r = mysqli_fetch_assoc ($q) ) { ?>
    		item.push ('<?php echo $r ['title']; ?>');
    		price.push (<?php echo $r ['price']; ?>);
    	<?php } ?>
    	
    </script>
</head>

<body>
	<div class="navbar">
		<nav>
			<div class="nav-wrapper">
				<a href="index.php" class="brand-logo">RentStar.by</a>
				<a href="#" class="button-collapse" data-activates="mobile-demo">
					<i class="material-icons">menu</i>
				</a>
				<ul class="right hide-on-med-and-down">
					<li class="active"><a href="index.php">Главная</a></li>
					<li><a href="#categories" onclick="scrollToLink()">Каталог</a></li>
					<li><a href="#advantages" onclick="scrollToLink()">Преимущества</a></li>
					<li><a href="#sell-spare-parts" onclick="scrollToLink()">Продажа запчастей</a></li>	
					<li><a href="#mymap" onclick="scrollToLink()">Карта проезда</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="index.php">Главная</a></li>
					<li><a href="#categories" onclick="scrollToLink()">Каталог</a></li>
					<li><a href="#advantages" onclick="scrollToLink()">Преимущества</a></li>
					<li><a href="#sell-spare-parts" onclick="scrollToLink()">Продажа запчастей</a></li>		
					<li><a href="#mymap" onclick="scrollToLink()">Карта проезда</a></li>
				</ul>
			</div>
		</nav>	
	</div>

	<div class="parallax-container start-slide">
		<div class="parallax valign-wrapper center-align">
			<img src="img/fon_dark.jpg">
			<div class="container start-slide-text white-text">
				<div class="row">
					<h1 id="title" >Аренда и Ремонт <br>строительного оборудования</h1>
				</div>
				<div class="row center-align">
					<div class="col s12 contacts-info">
						<div class="row">
							<div class="col l1 s1 right-align contact-icons"><i class="material-icons">phone</i></div>
							<div class="col l5 s11 left-align"><h5>8-029-625-45-25</h5></div>
						
							<div class="col l1 s1 right-align contact-icons"><i class="material-icons">phone</i></div>
							<div class="col l5 s11 left-align"><h5>8-033-625-99-25</h5></div>
						
							<div class="col l1 s1 right-align contact-icons"><i class="material-icons">email</i></div>
							<div class="col l5 s11 left-align"><h5>rentstar@tut.by</h5></div>
						
							<div class="col l1 s1 right-align contact-icons"><i class="material-icons">access_time</i></div>
							<div class="col l5 s11 left-align"><h5>Пн - Вс 8:30 - 18.00</h5></div>
						
							<div class="col l1 s1 right-align contact-icons"><i class="material-icons">directions_car</i></div>
							<div class="col l5 s11 left-align"><h5>г.Минск, ул. Ф. Скорины, 51а</h5></div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</div>

	<div class="full-width" style="background-color: #F2F2F2; margin-top: 20px;">
		<div class="row">
			<div class="col offset-l2 l8 s12">
				<div class="carousel carousel-slider center">
					<a href="#one!" class="carousel-item"><img src="img/company/slide1.jpg" style="width: 75%; height: 400px;"></a>
					<a href="#two!" class="carousel-item"><img src="img/company/slide2.jpg" style="width: 75%; height: 400px;"></a>
					<a href="#three!" class="carousel-item"><img src="img/company/slide3.jpg" style="width: 75%; height: 400px;"></a>
					<a href="#four!" class="carousel-item"><img src="img/company/slide4.jpg" style="width: 75%; height: 400px;"></a>
					<a href="#five!" class="carousel-item"><img src="img/company/slide5.jpg" style="width: 75%; height: 400px;"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="section  black-text" id="categories" style="margin-bottom: 20px;background-color: #FFED00;">
		<div class="row container center-align">
			<h3 class="header" style="font-weight: bold;"">Категории товаров</h3>
		</div>
	</div>

	<?php $categories = mysqli_query($connection,"SELECT * FROM `categories`"); ?>

	<div class="full-width">
		<div class="row">
			<?php
				if (mysqli_num_rows($categories) === 0) {
					?>
						<div class="container">
							<div class="row">
								<div class="col s12 center-align">
									<h1>Нет ни одной категории</h1>
								</div>
							</div>
						</div>
					<?php
				}
				while($cat = mysqli_fetch_assoc($categories)){
					?>
						<a href="instruments.php?id=<?php echo $cat['id']?>">
							<div class="col  xl2 l3 m4 s6 card-category">
								<div class="card hoverable">
									<div class="card-image waves-effect waves-block waves-light">
								      	<img class="activator" src="img/card_category/<?php echo $cat['img'];?>">
								    </div>
						          	<div class="card-content" style="word-wrap: break-word;">
								      	<span class="card-title activator grey-text text-darken-4"><?php echo $cat['short_title'];?>
								      
								      	</span>
								      	<p class="see-more"><a href="instruments.php?id=<?php echo $cat['id']?>"><span style="color: #010206;background-color: #FFED00;font-size: 1.5em;">Просмотреть</span></a></p>
								    </div>
						        </div>
					        </div>
						</a>						
					<?php
				}
			?>	        
		</div>
	</div>

	<div class="section white" id="about-us">
		<div class="row container wow fadeInLeft" data-wow-duration='2s' data-wow-offset='150'>
			<h1 class="header">О нас</h1>
			<p class="grey-text text-darken-3 lighten-3">
				Компания «РентСтарГрупп» занимается арендой инструмента, ремонтом строительного оборудования, а также продажей запчастей к ним. Альтернативной услугой компании является АРЕНДА строительного инструмента или ПРОКАТ строительного инструмента для физических и юридических лиц. Предоставляемое нами оборудование в аренду высококачественное, профессиональное известных производителей.
                <br><br>
                Арсенал арендного парка компании составляют: бензобуры, нарезчики швов, виброкатки и вибротрамбовки, бензогенераторы, бензорезы, штроборезы, бетономешалки, виброплиты, глубинные вибраторы, отбойные молотки, паркетошлифовальные машины, сварочные инверторы, строительные леса, строительные пылесосы, фасадные люльки, сварочные аппараты (паяльники), подъемное оборудование, тепловые пушки и другой электроинструмент, бензоинструмент.
                <br><br>
                Наша компания предоставляет клиентам не только аренду необходимого строительного инструмента, но и услуги, связанные с ним.
                <br><br>
                Так одной из услуг является послегарантийный РЕМОНТ и техническое обслуживание строительного инструмента и оборудования: виброплит, трамбовок, бензогенераторов, бензорезов, тепловых пушек дизельных (непрямого и прямого нагрева), газовых тепловых пушек и другого строительного оборудования.
                <br><br>
                Еще одной из услуг компании является ПРОДАЖА ЗАПЧАСТЕЙ и расходных материалов для строительного оборудования и инструмента, что позволяет экономить Ваше время на поиск сервиса по ремонту оборудования.
                <br><br>
                На сегодняшний день компания «РентСтарГрупп» позволяет своей услугой — аренда строительного инструмента и оборудования выполнять проекты любых масштабов – от косметического ремонта квартиры до строительного проекта с большими инвестициями. Парк оборудования компании позволяет обслуживать клиентов на нескольких объектах одновременно. В настоящее время компания укомплектована дорогостоящим инструментом и оборудованием, с помощью которого строители выполняют самые сложные задачи.
                <br><br>
                Напоследок, хотелось бы подчеркнуть, что компания «РентСтарГрупп» предоставляет клиенту возможность выбора из перечисленного комплекса услуг (аренда строительного инструмента, ремонт строительного инструмента, продажа запчастей к инструменту). Наши клиенты могут обратиться к нам не только для восстановления оборудования, но и для его технического обслуживания или диагностики, а на время проведения ремонта воспользоваться по выгодной цене нашим строительным инструментом и оборудованием. В компании «РентСтарГрупп» не предусмотрена услуга по доставке строительного оборудования на объект, а также выезда специалиста для оказания услуг по ремонту.
                <br><br>
                Итак, если вы еще не стали клиентом нашей компании, то мы ждем и всегда рады дать Вам консультацию по любому вопросу. Достоинства компании — справедливая ценовая политика за высококачественный сервис.
                <br><br>
                <h5>С Уважением, команда «РентСтарГрупп».</h5>
			</p>
		</div>
	</div>

	<?php $instruments = mysqli_query($connection, "SELECT * FROM `post`"); ?>

	<div class="full-width lighten-1" id="calculation">
		<div class="container calculation-block" style="border: 3px solid black">
			<div class="row" style="margin-top: 40px;">
				<div class="col s12 center-align">
					<h4 class="black-text" style="font-weight: bold;text-transform: uppercase;">Рассчитайте стоимость аренды оборудования:</h4>
				</div>
			</div>
			<div class="row">
				<form action="index.php#" class="xl12" method="post">
					<div class="row">
						<div class="input-field col l5 offset-l1 s12 offset-s1 black-text">
							<div class="row">
								<div class="col  l10 s7"><h5>Количество суток аренды</h5></div>
								<div class="col  l2 s3">
									<input type="text" class="validate" id="count_days" style="color:black;background-color: #E8E8E8;border-radius: 5px;font-size: 1.5em;text-align: center;">
								</div>	
							</div>
							<div class="row">
								<div class="input-field col l6 s10">
									<select id="selectId1">
										<option value="Физическое лицо">Физическое лицо</option>
										<option value="Юридическое лицо">Юридическое лицо</option>
									</select>
								</div>
								<div class="input-field col l6 s10">
									<select id="selectId2">
										<option value="Наличный расчет">Наличный расчет</option>
										<option value="Безналичный расчет">Безналичный расчет</option>
									</select>
								</div>		
							</div>
						</div>


						<div class="input-field col l5 offset-l1 s12 offset-s1 black-text">	
							<div class="row">
								<div class="col l10 s10 center-align">
									<select id="selectId3">
										<option value="" disabled selected>Выберите товар</option>
										<?php 
											if(mysqli_num_rows($instruments) != 0){
												while($inst = mysqli_fetch_assoc($instruments)){
													?>
														<option value="<?php echo $inst['title'];?>"><?php echo $inst['title'];?></option>
													<?php
												}
											}
										 ?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col l10 s6 offset-s2 center-align">									
									<button class="btn waves-effect waves-light modal-trigger" href="#modal1" type="submit" name="submit" onclick="Calculate()">Рассчитать стоимость
									    <i class="material-icons right">send</i>
									</button>
								</div>				
							</div>			
						</div> 	
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function Calculate(){
			var days = document.getElementById('count_days').value;
			var face = document.getElementById('selectId1').value;
			var pay = document.getElementById('selectId2').value;
			var product = document.getElementById('selectId3').value;
			var indexProduct = item.indexOf(product);
			var priceProduct = price[indexProduct]; 
			var total = 0;
			var errors = [];

			if(days == '')
				errors.push("Введите количество дней аренды");
			if(product == '')
				errors.push("Выберите необходимое оборудование");

			if(face == "Физическое лицо" && pay == "Наличный расчет"){
				if(days == 2)
					priceProduct *= 0.95;
				if(days >= 3 && days <= 5)
					priceProduct *= 0.9;
				if(days >= 6)
					priceProduct *= 0.8;

				total = priceProduct * days;
			}
			else{
				if(days >= 7)
					priceProduct *= 0.8;

				total = priceProduct * days;
			}

			if(errors.length != 0)
			{
				for(var i = 0; i < errors.length; i++){
					document.getElementById('productErrors').innerHTML = errors[i];
				}
			}
			else{
				document.getElementById('productName').innerHTML = "<span style='font-weight:bold;'>Наименование: </span>" + product;
				document.getElementById('productPrice').innerHTML = "<span style='font-weight:bold;'>Цена: </span>" + priceProduct + ' руб.';
				document.getElementById('productDays').innerHTML = "<span style='font-weight:bold;'>Суток: </span>" + days;
				document.getElementById('productTotal').innerHTML = "<span style='font-weight:bold;'>Итого: </span>" + total + ' руб.';
			}
		}
	</script>

	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4>Расчет проката</h4>
			<p id="productName"></p>
			<p id="productPrice"></p>
			<p id="productDays"></p>
			<p id="productTotal"></p>
			<p id="productErrors"></p>	
		</div>		
		<div class="modal-footer">
			<a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Понял</a>
		</div>
	</div>

	<div class="full-width" id="vk-group">
		<div class="row">
			<div class="col s12 center-align gray-text text-darken-4">
				<h3 class="pretext">Подпишь на нашу группу в ВК и получи персональную <span class="red-text">5%</span> скидку.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col offset-l4 l4 offset-s2 s8">
				<!-- VK Widget -->
				<div id="vk_groups"></div>

			</div>
		</div>
	</div>
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>
	<script type="text/javascript">VK.Widgets.Group("vk_groups", {mode: 3, width: "auto", color1: 'E2E2E6', color3: '397BC6'}, 135686991);</script>

	<div class="full-width" style="padding-top: 40px;padding-bottom: 40px;background-color: #FFED00;" id="advantages">
		<div class="row">
			<div class="col s12 black-text center-align">
				<h4 style="font-weight: bold;text-transform: uppercase;">Преимущества нашей компании</h4>
			</div>
		</div>
		<div class="container advantages-block">
			<div class="row">
				<div class="col l4 m6 s12 left-align black-text adv wow slideInLeft" data-wow-duration='1.5s' data-wow-offset='100'>
					<div class="row adv-title">
						<div class="col s2">
							<i class="material-icons color-icon">card_giftcard</i>
						</div>
						<div class="col s10">
							<h6>Скидки</h6>
						</div>
					</div>
					<p>В нашей компании действует система посуточных скидок на все оборудование.</p>				
				</div>
				<div class="col l4 m6 s12 left-align black-text adv wow slideInLeft" data-wow-duration='1.25s' data-wow-offset='100'>
					<div class="row adv-title">
						<div class="col s2">
							<i class="material-icons color-icon">security</i>
						</div>
						<div class="col s10">
							<h6>Гарантийное обслуживание</h6>
						</div>
					</div>
					<p>При неисправности инструмента, наша компания оказывает услугу по восстановлению обородувания и возврата денежных средств.</p>
				</div>
				<div class="col l4 m6 s12 left-align black-text adv wow slideInLeft" data-wow-duration='1s' data-wow-offset='100'>
					<div class="row adv-title">
						<div class="col s2">
							<i class="material-icons color-icon">attach_money</i>
						</div>
						<div class="col s10">
							<h6>Гибкая система оплаты</h6>
						</div>
					</div>
					<p>Возможность проката оборудования по начальной предоплате, а остальную сумму после использования.</p>
				</div>
			
				<div class="col l4 m6 s12 left-align black-text adv wow slideInRight" data-wow-duration='1s' data-wow-offset='100'>
					<div class="row adv-title">
						<div class="col s2">
							<i class="material-icons color-icon">build</i>
						</div>
						<div class="col s10">
							<h6>Техническое обслуживание</h6>
						</div>
					</div>
					<p>Качественное техническое обслуживание оборудования квалифицированными мастерами.</p>
				</div>
				<div class="col l4 m6 s12 left-align black-text adv wow slideInRight" data-wow-duration='1.25s' data-wow-offset='100'>
					<div class="row adv-title">
						<div class="col s2">
							<i class="material-icons color-icon">insert_drive_file</i>
						</div>
						<div class="col s10">
							<h6>Официальный договор</h6>
						</div>
					</div>
					<p>Со всеми нашими клиентам мы составляем договор, что даёт гарантию хорошей сделки.</p>
				</div>
				<div class="col l4 m6 s12 left-align black-text adv wow slideInRight" data-wow-duration='1.5s' data-wow-offset='100'>
					<div class="row adv-title">
						<div class="col s2">
							<i class="material-icons color-icon">credit_card</i>
						</div>
						<div class="col s10">
							<h6>Наличный и безналичный расчет</h6>
						</div>
					</div>
					<p>Совершить платеж вы можете любым удобным для вас способом.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="full-width" id="sell-spare-parts">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align">
					<h3 class="pretext">Продажа запчастей и расходных материалов для строительного оборудования</h3>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<p>
						Одной из услуг компании «РентСтарГрупп» является продажа запчастей и расходных материалов к строительному оборудованию и инструменту за наличный и безналичный расчет.
                        Склад, место оформления документов и выдачи запасных частей и расходных материалов находится по адресу г.Минск, ул. Ф.Скорины 51А.
                        По наличию, заказу запчастей и другой информации можно узнать по телефону: 8-029-625-45-25, 8-033-625-99-25.
					</p>
					<ul>
						<li>
							Продажа запчастей для строительного оборудования (бензогенераторам, электростанциям): воздушный фильтр, свеча зажигания, моторное масло, шнур для стартера, двигатель в сборе, ручной и электрический стартер, кольца поршневые , карбюратор, ротор, статор, регулятор напряжения AVR, автомат защиты, поршень, топливный кран, блок двигателя, корпус воздушного фильтра и многое другое.
						</li>
						<li>
							Продажа запчастей для строительного оборудования (бензорезам): воздушный фильтр (основной, дополнительный), ремень клиновой или ручейковый, свеча зажигания, шнур для стартера, глушитель, стартер в сборе, защита и облицовка, поршень, кольца поршневые, карбюратор, декомпрессионный клапан, коленвал, подшипник, шкив, прокладка картера, сальник, сцепление, головка топливного бака, алмазные диски по бетону и асфальту и многое другое.
						</li>
						<li>
							Продажа запчастей для строительного оборудования (нарезчикам швов): двигатель в сборе, ручной стартер, кольца поршневые, карбюратор, поршень, топливный кран, голова блока двигателя, корпус воздушного фильтра, кнопка включения/выключения, сальник, подшипник, топливный бак, глушитель, прокладки и многое другое.
						</li>
						<li>
							Продажа запчастей для строительного оборудования (виброплитам, вибротрамбовкам): воздушный фильтр GX160, GX270, GX390, Robin-Subaru EX13, EX17, EX21, EY15, свеча зажигания, моторное масло, приводной ремень, двигатель в сборе (Honda GX160, GX270, GX390 или аналог Rato R160, R200, R270, R390), вибратор, муфта сцепления, подшипник, стартер, кольца поршневые, карбюратор, поршень, топливный кран, голова блока двигателя, корпус воздушного фильтра, кнопка включения/выключения, сальник, подшипник, топливный бак, глушитель, прокладки и многое другое.
						</li>
						<li>
							Продажа запчастей для строительного оборудования (дизельным тепловым пушкам): фильтра, свечи, форсунки, электроды, фотоэлементы, трансформаторы зажигания, модули управления, электроклапаны, топливные насосы, электродвигатели, роторы, лопатки к ротору и многое другое.
						</li>
						<li>
							Продажа запчастей для строительного оборудования (газовым тепловым пушкам): форсунки, электроды, пьезоподжиг, модули управления, электроклапаны, электродвигатели, термопары, предохранительные клапаны и многое другое.
						</li>
						<li>
							Продажа запчастей для строительного оборудования (мотопомпам): сальник, уплотнение механическое, крыльчатка.
						</li>
						<li>
							Продажа запчастей для строительного оборудования (двигателям бензиновым): воздушные фильтры, масла, свечи, шнуры для стартера, кольца поршневые, стартеры, карбюратор, шатун, фильтровые коробки, коленвал, подшипники, сальники и многое другое.
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="full-width" id="how-to-work">
		<div class="row black-text" style="background-color: #FFED00;">
			<div class="col s12 center-align">
				<h3>Как мы работаем</h3>
			</div>
		</div>
		<div class="row">
			<div class="one-step col offset-xl6 xl6 offset-m2 m10 s12 item wow fadeInRight" data-wow-offset='100'>
				<div class="row">
					<div class="col s3">
						<div class="circle circle_1"><i class="material-icons">settings_phone</i></div>
					</div>
					<div class="col s9">
						<div class="info">Вы звоните нам и спрашиваете о наличии товара.</div>	
					</div>
				</div>
			</div>
			<div class="one-step col xl6 m10 s12 item wow fadeInLeft" data-wow-offset='100'>
				<div class="row">
					<div class="col s9 l8 m9">
						<div class="info2">Приезжаете к нам на склад за товаром по адресу г.Минск, ул. Ф. Скорины, 51а.</div>
					</div>
					<div class="col s3 offset-l1 l3 m3">
						<div class="circle circle_2"><i class="material-icons">gps_fixed</i></div>
					</div>
				</div>
			</div>
			<div class="one-step col offset-xl6 xl6 offset-m2 m10 s12 item wow fadeInRight" data-wow-offset='100'>
				<div class="row">
					<div class="col s3">
						<div class="circle circle_1"><i class="material-icons">visibility</i></div>
					</div>
					<div class="col s9">
						<div class="info">Наши мастра делают осмотр оборудования и выдают его вам.</div>	
					</div>
				</div>
			</div>
			<div class="one-step col xl6 m10 s12 item wow fadeInLeft" data-wow-offset='100'>
				<div class="row">
					<div class="col s9 l8 m9">
						<div class="info2">Мы заключаем официальный договор о прокате оборудования.</div>	
					</div>
					<div class="col s3 offset-l1 l3 m3">
						<div class="circle circle_2"><i class="material-icons">insert_drive_file</i></div>
					</div>
				</div>
			</div>
			<div class="one-step col offset-xl6 xl6 offset-m2 m10 s12 item wow fadeInRight" data-wow-offset='100'>
				<div class="row">
					<div class="col s3">
						<div class="circle circle_1"><i class="material-icons">done</i></div>
					</div>
					<div class="col s9">
						<div class="info">Оборудование готово к использованию.</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="full-width" style="padding-top: 40px; padding-bottom: 40px;background-color: #FFED00;" id="price-list">
		<div class="container" >
			<div class="row">
				<div class="col l12 s12 center-align black-text">
					<h4 style="font-weight: bold;">Скачайте наш прайс-лист</h4>
				</div>
			</div>
			<div class="row">
				<div class="col l12 s12 center-align">
					<div class="btn" style="background-color: black;">
						<i class="material-icons left-align" style="margin-right: 15px;">file_download</i>
						<a href="price-list.xls" download><span style="font-size: 1.5em;color: white;">Скачать</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="full-width" id="feedback">
		<div class="section white">
			<div class="row container center-align">
				<h3 class="header pretext">У вас остались вопросы? Задайте их нам</h3>
			</div>
		</div>
		<div class="row wow bounceIn" data-wow-duration='1s' data-wow-offset='200'>
			<form action="index.php" id="feedback" class="col s12" method="post">
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
					<div class="col m6 left-align black-text">
						<div class="row">
							<div class="col m2">
								<i class="material-icons color-icon">location_on</i>
							</div>
							<div class="col m10">
								<h5 style="font-weight: bold;">Мы находимся:</h5>
								<h5 style="background-color: #FFED00;">г.Минск, ул. Ф.Скорины, 51а</h5>
							</div>
						</div>
					</div>
					<div class="col m6 left-align black-text">
						<div class="row">
							<div class="col m2">
								<i class="material-icons color-icon">local_phone</i>
							</div>
							<div class="col m10">
								<h5 style="font-weight: bold;">Телефон:</h5>
								<h5 style="background-color: #FFED00;">8-029-625-45-25 VEL</h5>
								<h5 style="background-color: #FFED00;">8-033-625-99-25 MTS</h5>
							</div>
						</div>
					</div>					
				</div>	
			</div>
		</footer>
	</div>

	<div id="up" class="white-text" onclick="Up()">
		<i class="material-icons" style="font-size: 3em;">keyboard_arrow_up</i>
	</div>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
		$(".button-collapse").sideNav();// Show menu for mobile version
		$(".parallax").parallax();
		$('select').material_select();
		$(".modal").modal({
			dismissible:false,
			opacity:.9,
			inDuration:200,
			outDuration:200,
			startingTop: '70%'
		});
		$(".carousel.carousel-slider").carousel({//init carousel
			fullWidth:true,
			shift:150,
			indicators:true,
			duration:500,
		});
		
		$('.carousel').carousel('next');
		setInterval(function(){
			$('.carousel').carousel('next', 1);
		},5000);
	});

	function Up(){
		var pageYLabel = 0;
		var pageY = window.pageYOffset || document.documentElement.scrollTop;
		pageYLabel = pageY;
			window.scrollTo(0, 0);
	}

	function scrollToLink(){
		$('a[href^="#"]').bind('click.smoothscroll',function (e) {
			 e.preventDefault();
			 
			var target = this.hash,
			 $target = $(target);
			 
			$('html, body').stop().animate({
			 'scrollTop': $target.offset().top
			 }, 500, 'swing', function () {
			 window.location.hash = target;
			 });
	 	});
	}
  </script>
</body>
</html>