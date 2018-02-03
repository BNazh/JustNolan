<?php 
if(isset($_GET['delete'])){
	unset($_COOKIE['user']);
	setcookie("user", "", time() - 3600);
}
$avto = false;
if(isset($_COOKIE['user'])){
	$avto = true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="MainPage.css">
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	 <!-- <script src="MainPage.js" defer></script> -->
	 
</head>
<body>
	
	<header>
		<div id="header">
			<a href="MainPage.php" style="text-decoration: none;"><span id="mainName">Salexy</span></a>
			
			<div id="divSearch1">
				<select id="selectCity">
					<option>Astana</option>
					<option>Almaty</option>
					<option>Taraz</option>
					<option>Aktau</option>
					<option>Semey</option>
					<option>Oral</option>
				</select>
				<input class="search" id="searchInput" type="text" name="">
				<button class="search" id="searchButton" >Найти</button>
			</div>
			<div id="leftOperations">
				<div id="userDask">
					<?php
					if($avto){ ?>
					<p style="color: grey;">Добро пожаловать на Salexy</p>
					<hr>
					<br>
					<a href="MainPage.php?delete=ok" class="moi"><button style="background-color:#8AB5FF ;border-radius: 2px;width: 180px;height: 30px;border:1px solid #8AB5FF; ">Выйти</button></a>
					<p><a href="" class="moi">Мой Salexy</a></p>
					<p><a href="" class="moi">Мои заказы</a></p>
					<p><a href="" class="moi">Мои обявление</a></p>
					<p><a href="" class="moi">Мои желания</a></p>
					<p><a href="" class="moi">Мои купон</a></p>
					
					<?php
					}else{ ?>
					<p style="color: grey;">Добро пожаловать на Salexy</p>
					<a href="lodin.php"><button style="background-color:#8AB5FF ;border-radius: 2px;width: 180px;height: 30px;border:1px solid #8AB5FF; ">Войти</button></a>
					
					<hr>
					<p style="color: grey;">Новый покупатель?</p>
					<a href="registr.php"><button style="background-color:#8AB5FF ;border-radius: 2px;width: 180px;height: 30px;border:1px solid #8AB5FF ;">Зарегистрироваться</button></a>
					<br>	
					<p><a href="" class="moi">Мой Salexy</a></p>
					<p><a href="" class="moi">Мои заказы</a></p>
					<p><a href="" class="moi">Мои обявление</a></p>
					
					<?php
					}
					?>
					
				</div>
				<img id="star" src="Star.png">
				<img id="user" src="User.png">
				<a href="page4.php"><button id="add">Подать объявление</button></a>
			</div>
		</div>
	
	</header>
	<section>
		<div id="section">
		<div id="divSearch2">
			<select id="selectCity">
				<option>Astana</option>
				<option>Almaty</option>
				<option>Taraz</option>
				<option>Aktau</option>
				<option>Semey</option>
				<option>Oral</option>
			</select>
			<input class="search" id="searchInput" type="text" name="" size="80"><button class="search" id="searchButton" >Найти</button>
		</div>
		<br>
		<br>
		<br>
		<span id="linkCity">Все объявления Алматы<a href="">Астана</a><a href="">Актобе</a><a href="">Шымкент</a><a href="">Тараз</a><a href="">Актау</a></span>
		<div id="cards">
			<div href="" class="cardLink">
				<a href="page2.php">
				<div class="card" title="Автомобили и мотоциклы">
					<img class="cardIcon" src="car.png">
					<div class="iconName">Автомобили и мотоциклы</div> 
				</div>
				</a>
				<div class="allCategory">
					<a href="" class="linkCategory">Легковые автомобили</a>
					<a href="" class="linkCategory">Грузовые автомобили</a>
					<a href="" class="linkCategory">Мотоциклы и мототехника</a>
					<a href="" class="linkCategory">Автобусы</a>
					<a href="" class="linkCategory">Спецтехника</a>
					<a href="" class="linkCategory">Сельхозтехника</a>
					<a href="" class="linkCategory">Водный транспорт</a>
					<a href="" class="linkCategory">Запчасти и аксессуары</a>
					<a href="" class="linkCategory">Шины и диски</a>
					<a href="" class="linkCategory">Прочее</a>
				</div>
			</div>
			<div href="" class="cardLink">
				<div class="card" title="Недвижимость">
					<img class="cardIcon" src="property.png">
					<div class="iconName">Недвижимость</div>
				</div>
				<div class="allCategory">
					<a href="" class="linkCategory">Квартиры</a>
					<a href="" class="linkCategory">Комнаты</a>
					<a href="" class="linkCategory">Комнаты</a>
					<a href="" class="linkCategory">Участки</a>
					<a href="" class="linkCategory">Коммерческая</a>
					<a href="" class="linkCategory">Гаражи</a>
				</div>
			</div>
			<div href="" class="cardLink">
				<div class="card" title="Работа">
					<img class="cardIcon" src="work.png">
					<div class="iconName">Работа</div> 
				</div>
				<div class="allCategory">
					<a href="" class="linkCategory">Ищу работу</a>
					<a href="" class="linkCategory">Вакансии</a>
				</div>
			</div>
			<div href="" class="cardLink">
				<div class="card" title="Услуги">
					<img class="cardIcon" src="service.png">
					<div class="iconName">Услуги</div> 
				</div>
				<div class="allCategory">
					<a href="" class="linkCategory">Бытовые услуги</a>
					<a href="" class="linkCategory">Коммунальные услуги</a>
					<a href="" class="linkCategory">Ритуальные услуги</a>
					<a href="" class="linkCategory">Фото и видеосъемка</a>
					<a href="" class="linkCategory">Страхование</a>
					<a href="" class="linkCategory">Связь</a>
					<a href="" class="linkCategory">Грузчики, грузоперевозки</a>
					<a href="" class="linkCategory">Переводы</a>
					<a href="" class="linkCategory">Услуги няни</a>
					<a href="" class="linkCategory">Ремонт техники</a>
					<a href="" class="linkCategory">Такси</a>
					<a href="" class="linkCategory">Интернет</a>
					<a href="" class="linkCategory">Обслуживание компьютеров</a>
					<a href="" class="linkCategory">Прочее</a>
					<a href="" class="linkCategory">Автосервис</a>
					<a href="" class="linkCategory">Ремонт и строительство</a>
					<a href="" class="linkCategory">Образование</a>
					<a href="" class="linkCategory">Красота и здоровье</a>
					<a href="" class="linkCategory">Организация праздников</a>
					<a href="" class="linkCategory">Риэлторские услуги</a>
				</div>
			</div>
			<div href="" class="cardLink">
				<div class="card" title="Мода, личные вещи">
					<img class="cardIcon" src="style.png">
					<div class="iconName">Мода, личные вещи</div>
				</div>
				<div class="allCategory">
					<a href="" class="linkCategory">Одежда</a>
					<a href="" class="linkCategory">Обувь</a>
					<a href="" class="linkCategory">Ткани</a>
					<a href="" class="linkCategory">Красота и здоровье</a>
					<a href="" class="linkCategory">Сумки, чемоданы</a>
					<a href="" class="linkCategory">Прочее</a>
					<a href="" class="linkCategory">Аксессуары</a>
				</div> 
			</div>
			<div href="" class="cardLink">
				<div class="card" title="Для детей">
					<img class="cardIcon" src="baby.png">
					<div class="iconName">Для детей</div> 
				</div>
				<div class="allCategory">
					<a href="" class="linkCategory">Игрушки, игры</a>
					<a href="" class="linkCategory">Детская одежда</a>
					<a href="" class="linkCategory">Детская обувь</a>
					<a href="" class="linkCategory">Автомобильные кресла</a>
					<a href="" class="linkCategory">Коляски</a>
					<a href="" class="linkCategory">Товары для новорожденных</a>
					<a href="" class="linkCategory">Прочее</a>
				</div>
			</div>
			<div href="" class="cardLink">
				<div class="card" title="Для дома и дачи">
					<img class="cardIcon" src="forHome.png">
					<div class="iconName">Для дома и дачи</div>
				</div>
				<div class="allCategory">
					<a href="" class="linkCategory">Стройматериалы
</a>
					<a href="" class="linkCategory">Мебель и интерьер
</a>
					<a href="" class="linkCategory">Хозтовары
</a>
					<a href="" class="linkCategory">Товары для дачи
</a>
					<a href="" class="linkCategory">Сауна, баня
</a>
					<a href="" class="linkCategory">Сад и огород
</a>
					<a href="" class="linkCategory">Садовая техника
</a>
					<a href="" class="linkCategory">Продукты питания
</a>
					<a href="" class="linkCategory">Прочее
</a>
				</div> 
			</div>
			<div href="" class="cardLink">
				<div class="card" title="Электронная техника">
					<img class="cardIcon" src="elect.png">
					<div class="iconName">Электронная техника</div> 
				</div>
				<div class="allCategory">
					<a href="" class="linkCategory">Видеокамеры
</a>
					<a href="" class="linkCategory">Компьютеры
</a>
					<a href="" class="linkCategory">Бытовая техника
</a>
					<a href="" class="linkCategory">Аудиотехника
</a>
					<a href="" class="linkCategory">Телевизоры, проекторы
</a>
					<a href="" class="linkCategory">Фотоаппараты
</a>
					<a href="" class="linkCategory">Видео, DVD, Blu-Ray плееры
</a>
					<a href="" class="linkCategory">Игровые приставки
</a>
					<a href="" class="linkCategory">Системы безопасности
</a>
					<a href="" class="linkCategory">Климатическая техника
</a>
					<a href="" class="linkCategory">Прочее
</a>
				</div>
			</div>
			<div href="" class="cardLink">
			<div class="card" title="Мобильные устройства">
				<img class="cardIcon" src="mobile.png">
				<div class="iconName">Мобильные устройства</div>
			</div>
				<div class="allCategory">
					<a href="" class="linkCategory">Смартфоны

</a>
					<a href="" class="linkCategory">Мобильные телефоны

</a>
					<a href="" class="linkCategory">Аксессуары

</a>
					<a href="" class="linkCategory">SIM карты, подключение

</a>
					<a href="" class="linkCategory">Планшеты

</a>
				</div> 
			</div>
			<div href="" class="cardLink">
				<div class="card" title="Животные и Растения">
					<img class="cardIcon" src="animals.png">
					<div class="iconName">Животные и Растения</div> 
				</div>
				<div class="allCategory">
						<a href="" class="linkCategory">Растения комнатные
</a>
					<a href="" class="linkCategory">Аквариум и террариум
</a>
					<a href="" class="linkCategory">Собаки
</a>
					<a href="" class="linkCategory">Кошки
</a>
					<a href="" class="linkCategory">Грызуны
</a>
					<a href="" class="linkCategory">Птицы
</a>
					<a href="" class="linkCategory">Экзотические животные
</a>
					<a href="" class="linkCategory">Ветеринарные услуги
</a>
					<a href="" class="linkCategory">Товары для животных
</a>
					<a href="" class="linkCategory">Прочее
</a>
				</div>
			</div>
			<div href="" class="cardLink">
				<div class="card" title="Хобби и отдых">
					<img class="cardIcon" src="hobby.png">
					
					<div class="iconName">Хобби и отдых</div> 
				</div>
				<div class="allCategory">
					<a href="" class="linkCategory">Досуг
</a>
					<a href="" class="linkCategory">Книги, журналы
</a>
					<a href="" class="linkCategory">Коллекционирование
</a>
					<a href="" class="linkCategory">Спортивное питание
</a>
					<a href="" class="linkCategory">Спортивное снаряжение
</a>
					<a href="" class="linkCategory">Музыкальные инструменты
</a>
					<a href="" class="linkCategory">Рукоделие
</a>
					<a href="" class="linkCategory">Рестораны, кафе, бары
</a>
					<a href="" class="linkCategory">Туристическое снаряжение
</a>
					<a href="" class="linkCategory">Путешествия
</a>
					<a href="" class="linkCategory"Охота и рыбалка
></a>
					<a href="" class="linkCategory">Прочее
</a>
				</div>
			</div>
			<div href="" class="cardLink">
				<div class="card" title="Для бизнеса">
					<img class="cardIcon" src="business.png">
					<div class="iconName">Для бизнеса</div>
				</div> 
				<div class="allCategory">
					<a href="" class="linkCategory">Услуги для бизнеса

</a>
					<a href="" class="linkCategory">Покупка и продажа бизнеса
</a>
					<a href="" class="linkCategory">Оборудование для бизнеса

</a>
					<a href="" class="linkCategory">Спортивное питание
</a>
					<a href="" class="linkCategory">Промышленность

</a>
				</div>
			</div>
		</div>
		<div id="btKategory">
			<button data-toot="true">ВСЕ КАТЕГОРИИ</button>
		</div>
		
		<br>
		<div id="recMain">Сайт бесплатных объявлений Алматы</div>
		<div id="recBody">
			<p>Вы хотите продать или купить что-либо быстро и выгодно? К вашим услугам доска бесплатных объявлений Алматы Salexy.kz !</p>
			<p>На нашем портале объявлений вы найдёте всё, начиная от мелких бытовых приборов и заканчивая недвижимостью и автомобилями. А если вы продаёте товар, услугу, сдаёте или снимаете жилье, мы поможем решить вашу задачу быстро и эффективно, для этого просто добавьте объявление бесплатно!</p>
			<p>Чем хороша наша доска объявлений Алматы?</p>
			<p>- Широким предложением товаров и услуг. Товары, услуги, недвижимость, работа, автомобили и даже хобби и отдых – здесь вы найдёте объявления на любой вкус!</p>
			<p>- Огромной аудиторией. Тысячи ваших потенциальных клиентов посещают наш сайт ежедневно. Не упускайте их, подайте объявление прямо сейчас!</p>
			<p>- Удобством пользования. Продуманная структура разделов и поиск объявлений помогут вам быстро найти нужные предложения. А разместить объявление вы сможете всего в несколько кликов.</p>
			<p>- Дополнительными возможностями. Если вы хотите дать объявление в Алматы так, чтобы его увидело больше людей, мы предлагаем недорогие дополнительные услуги – от выделения объявления цветом, до размещения его в VIP-зонах на самых видных местах страниц.</p>
			<p>Кроме размещения частных объявлений, доска объявлений Salexy.kz – это удобный и эффективный инструмент для бизнеса. Здесь вы можете подать бесплатное объявление и найти новых клиентов.</p>
			<p>Размещайте бесплатные объявления в Алматы: экономьте время и средства!</p>
		</div>

		</div>

	</section>
	<footer>
		<div id="footer">
			<p>2003-2017 © salexy.kz</p> 
			<dir id="footerLink">
				 <a href="">Объявления</a>
				 <a href="">Добавить</a>
				 <a href="">Условия</a>
				 <a href="">Реклама</a>
				 <a href="">Контакты</a>
		</div>
			</dir>
			
	</footer>
	<script type="text/javascript">
	 	document.querySelector("#user").addEventListener('mousein',function(){
	if(document.querySelector("#userDask").style.display=="block"){
		document.querySelector("#userDask").style.display="none";
	}
	else {
		document.querySelector("#userDask").style.display="block"
	}
});
	 </script>
</body>
</html>