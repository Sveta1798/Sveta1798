<?php

	require_once "start.php";

	if (!empty($_POST['addCall'])) {
		$fn = $_POST['fn'];
		$sn = $_POST['sn'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		
		$add = $DB->prepare("INSERT INTO `calls` (`sn`, `fn`, `tel`, `email`) VALUES (:s, :f, :t, :e)");
		
		$add->bindValue(":s", $sn);
		$add->bindValue(":f", $fn);
		$add->bindValue(":t", $tel);
		$add->bindValue(":e", $email);
		
		if ($add->execute()) {
			showMessage("Ок!!!!");
		} else {
			showMessage("Всё плохо ):");
		}
		
		redirect("index.php");
	}


	$data = $DB->query("SELECT * FROM `settings`")->fetchAll(PDO::FETCH_ASSOC);
	$data = $data[0];

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="%D0%A1%D0%BB%D0%B0%D0%B9%D0%B4%D0%B5%D1%80/style.css">
        <link rel="stylesheet" type="text/css" href="css/reser.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link href="js/card.js">
        <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
        <link rel="stylesheet" href="js/parallax.js">
        
        
        
        <!--Анимация-->
         <link rel="stylesheet" media="all" href="css/animate.css">
        <link href="https://fonts.googleapis.com/css?family=Marmelad" rel="stylesheet">     
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa&subset=cyrillic-ext" rel="stylesheet" type="text/css" >
        
        <script src="js/wow.min.js">
        </script>
        <script> new WOW().init();
        </script> 
                   
       <meta name=viewport content="width=device-width, initial-scale=1.0 ">
		
                     
    </head>
    
    
    
    <body>
           
        
            
            <!--1 часть-->  
            <section id="fon1" >
                  
                    <header>
                    
						<nav class="menu">
						
					  
					   <div class="itemsMenu">
							<li><a href="#fon1">Главная</a></li>
							<li><a href="#sale">Акция</a></li>
							<li><a href="#fon2">Почему мы</a></li>
							<img src="img/logotip.png">
							<li><a href="#fon3">Услуги</a></li>
							<li><a href="#timeline">Как мы работаем</a></li>
							<li><a href="#fon5">О нас</a></li>
						
					   </div>
					   
					</nav>
                   </header>
                    
					<h1>Цветы на Таганке
                       <p>Это всегда только свежее.</p>
                        <p>Круглосуточная доставка</p>
                        <p>по Москве и области.</p></h1>

                    
                    
                   
                </section>
            

            <!--2 часть-->
            <section id="sale">
            <div class="akci">
            	<h1>
				<p><?= $data["sale_text"] ?></p>
            	</h1>
            	<br>
            	<script src="http://megatimer.ru/s/1e3e7a14ada90f9fee803e107b87a986.js"></script>
            	<p><a href="#fon5"><input type="button" value="Заказать" ></a></p>
            	</div>
            	<div class="pion">
            		<img src="<?= $data["img"]; ?>" alt="Акция">
            	</div>
            	
            </section>
       
                 
           <!--3 часть-->
            <section id="fon2" >
                   <div class="dos">
                        <img src="img/%D0%B4%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B0.png"  class="fadeInRight wow " alt="Dostavka">
                        <h1 class="fadeInRight wow ">Доставка в течение часа</h1>
                    </div>
                    <div class="of">
                        <img src="img/%D0%B1%D1%83%D0%BA%D0%B5%D1%82.png"  class="fadeInRight wow " alt="Oformlenie">
						<h1 class="fadeInRight wow ">Оформление букетов</h1>
                    </div>
                    <div class="karta">

                        <img src="img/%D0%BA%D0%B0%D1%80%D1%82%D0%B0.png" class="fadeInRight wow " alt="card">
                        <h1 class="fadeInRight wow ">Постоянным клиентам предостовляется
                           <p>клубная карта</p></h1>
                    </div>
                    <div class="skidka">
                        <img src="img/%D1%81%D0%BA%D0%B8%D0%B4%D0%BA%D0%B0.png" class="fadeInRight wow " alt="sale">
                        <h1 class="fadeInRight wow ">Скидка в праздники 15%</h1>
                    </div>
                    
                    <div class="cena">
                        <img src="img/%D0%B4%D0%B5%D0%BD%D1%8C%D0%B3%D0%B8.png"  class="fadeInRight wow " alt="price">
                        <h1 class="fadeInRight wow ">Низкие цены</h1>
                    </div>
                    
                </section>
            

            <!--4 часть-->
            <section id="fon3">
            <h1>Оформление букетов</h1>
            <div class="all">
			<input checked type="radio" name="respond" id="desktop">
			<article id="slider">
					<input checked type="radio" name="slider" id="switch1">
					<input type="radio" name="slider" id="switch2">
					<input type="radio" name="slider" id="switch3">
					<input type="radio" name="slider" id="switch4">
					<input type="radio" name="slider" id="switch5">
				<div id="slides">
					<div id="overflow">
						<div class="image">
							<article><img src="img/stand.jpg"></article>
							<article><img src="img/exq.jpg"></article>
							<article><img src="img/sva.jpg"></article>
							<article><img src="img/inkor.jpg"></article>
							<article><img src="img/plush.jpg"></article>
						</div>
					</div>
				</div>
				<div id="controls">
					<label for="switch1"></label>
					<label for="switch2"></label>
					<label for="switch3"></label>
					<label for="switch4"></label>
					<label for="switch5"></label>
				</div>
				<div id="active">
					<label for="switch1"></label>
					<label for="switch2"></label>
					<label for="switch3"></label>
					<label for="switch4"></label>
					<label for="switch5"></label>
				</div>
			</article>
			</div>
			</section>      


            <!--5 часть-->
			<section id="timeline">'
			  	<h1>Принцип работы</h1>
				  <ul>
					<li>
					  <div class="zai">
					  	<img src="img/zai.png" alt="" class="fadeInRight wow ">
						<h3 class="fadeInRight wow ">Оставляете заявку</h3> 
						
					  </div>
					</li>
					<li>
					  <div class="phone">
						 
						<img src="img/phone.png" alt="" class="fadeInRight wow ">
						<h3 class="fadeInRight wow ">Мы перезваниваем</h3>
					  </div>
					</li>
					<li>
					  <div class="dostav">
					  	<img src="img/dos.png" alt="" class="fadeInRight wow ">
						<h3 class="fadeInRight wow ">Доставляем</h3>
						
					  </div>
					</li>
					<li>
					  <div class="oplata">
					  <img src="img/cash.png" alt="" class="fadeInRight wow ">
						<h3 class="fadeInRight wow ">Опата</h3> 
						
					  </div>
					</li>
				  </ul>
				</section>
            

            <!--6 часть-->
            <section id="fon5" >
                    <form class="zak_zv" method="POST">
                        <h1>Заказать звонок</h1>
                        <fieldset>
                           
                            <label>Имя</label>
                            <p><input type="text" name="sn"></p>
                            <p><label>Фамилия</label></p>
                            <p><input type="text" name="fn"></p>
                            <p><label>Телефон</label></p>
                            <p><input type="tel" name="tel"></p>
                            <p><label>E-mail</label></p>
                            <p><input type="email" name="email"></p>
							<p><input type="submit" name="addCall" value="Заказать"></p>
                        </fieldset>
                    </form>
                    <div class="mesto">
                    <h1>Мы находимся</h1>
                    <h2>Россия, г.Москва, ул.Нижняя Радищевская,д.88с4
                             <p>+7(495) 678-37-61</p></h2>
                              <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae404b478ed17b4c070da95a837e619d2aa8e5a61b355b29554a3243b32dfc2de&amp;width=640&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>

                    </div>
		</section>
            
           <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>  
			<script src="js/parallax.js"></script>
    </body>
</html>        