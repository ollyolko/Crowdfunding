{{--<!DOCTYPE html>--}}
{{--<html lang="ua">--}}
{{--<head>--}}
	{{--<meta charset="utf-8" />--}}
	{{--<title></title>--}}
	{{--<link href="css/style.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--@section('contentTop')--}}
{{--<a name="top"></a>--}}
	{{--<div class="header">--}}
		{{--<div class="header-left">--}}
			{{--<div class="header-left-empty">--}}
			{{--</div>--}}
			{{--<div class="header-left-full">--}}
				{{--<p><span class="menu">&equiv;</span></p>--}}
				{{--<h1>МІСТО<img src="img/shirt.png"/>УСПІХУ</h1>--}}
                {{--<div class="line">--}}
					{{--<img src="img/hzy.png" />--}}
                {{--</div>--}}
				{{--<h4>Вінниця - місто успіху!</h4>--}}
				{{--<p>Краудфандинг в Вінниці.<br/> Венчурна філантропія.<br /> Соціальні інновації.<br /> Розвиток спільнот</p>--}}
				{{--<p>{{$dobro}} доброчинці</p>--}}
				{{--<p>{{$money}} грн</p>--}}
				{{--<p>{{$project}} успішних проектів</p>--}}
				{{--<a href="{{route('add')}}">--}}
					{{--<div class="add-project">+ДОДАТИ ПРОЕКТ</div>--}}
				{{--</a>--}}
				{{--<!--<div class="header-ring">-->--}}
					{{--<!--<div class="left-rot">&#9660;</div>-->--}}
					{{--<!--<div>&#9675;</div>-->--}}
					{{--<!--<div>&#9675;</div>-->--}}
					{{--<!--<div>&#9675;</div>-->--}}
					{{--<!--<div>&#9675;</div>-->--}}
					{{--<!--<div>&#9675;</div>-->--}}
					{{--<!--<div class="right-rot">&#9660;</div>-->--}}
				{{--<!--</div>-->--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="header-right">--}}
			{{--<div class="header-right-data">--}}
				{{--<h2 class="hot-color"><img src="img/hz.png">Проект:</h2>--}}
				{{--<h1>Управління містом</h1>--}}
				{{--<hr class="main-color"/>--}}
				{{--<p><span class="main-color">Опис:</span>Місто де дух успішності та відчувається з першрго погляду, з першого подиху, з першого візиту.<b>Де все нове одразу стає рідним і близьким! </b>Де кожен досягає успіху - в сім'ї,  на роботі, в суспільстві, в освіті, в спірті, в творчості</p>--}}
				{{--<div class="three-image">--}}
					{{--<div class="statistic">--}}
						{{--<p class="statistic-header"> фінансували:</p>--}}
						{{--<div class="statistic-img">--}}
							{{--<img src="img/s_people.png">--}}
						{{--</div>--}}
						{{--<div class="statistic-data">--}}
							{{--<p class="hot-color">225</p>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="statistic">--}}
						{{--<p class="statistic-header"> зібрано коштів::</p>--}}
						{{--<div class="statistic-img">--}}
							{{--<img src="img/s_grn.png">--}}
						{{--</div>--}}
						{{--<div class="statistic-data">--}}
							{{--<p class="hot-color">22,5k</p>--}}
							{{--<img src="img/line.png">--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="statistic">--}}
						{{--<p class="statistic-header"> залишилось:</p>--}}
						{{--<div class="statistic-img">--}}
							{{--<img src="img/s_calendar.png">--}}
						{{--</div>--}}
						{{--<div class="statistic-data">--}}
							{{--<p class="hot-color">76 днів</p>--}}
							{{--<img src="img/line.png">--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<a href="AddProject.html">--}}
					{{--<div class="add-fond">ФОНДУВАТИ</div>--}}
				{{--</a>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
{{--@endsection--}}

@section('content')
{{--<div class="content">--}}
	@section('superCity')
	{{--<div class="content-top">--}}
		{{--<h1><img src="img/mapLable.png" class="h-mage">Вінниця - місто успіху!</h1>--}}
		{{--<div class="content-top-data">--}}
			{{--<div class="content-img">--}}
				{{--<img src="img/tram.jpg">--}}
			{{--</div>--}}
			{{--<div class="content-bracket">--}}
				{{--<p>&ldquo;</p>--}}
			{{--</div>--}}
			{{--<div class="content-top-parag">--}}
				{{--<p class="count-color">Місто де дух успішності та відчувається з першрго погляду, з першого подиху, з першого візиту.Де все нове одразу стає рідним і близьким!Де кожен досягає успіху - в сім'ї, на роботі, в суспільстві, в освіті, в спірті, в творчості</p>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
	@endsection
	@section('articles')
	{{--<div class="content-main">--}}
		{{--<div class="content-main-data">--}}
			    {{--<h1><img src="img/bag.png" class="h-mage">Проекти що чекають підтримки</h1>--}}
				{{--<hr class="hot-color"/>--}}
				{{--<p><img src="img/run.png"/><span class="main-color">нові</span><span class="count-color"> (36)<img src="img/paper.png" /></span> <span class="hot-color"> гарячі</span><span class="count-color"> (16)</span></p>--}}
				{{--<hr class="hot-color"/>--}}
			{{--<div class="content-main-data-p">--}}
				{{--<p><span class="count-color">Галузі краудфандингу:</span></p>--}}
			{{--</div>--}}
			{{--<div class="content-main-data-a">--}}
				{{--<a href="#">Освіта</a>--}}
				{{--<a href="#">Культура</a>--}}
				{{--<a href="#">ІТ-сфера</a>--}}
				{{--<a href="#">Туризм та розваги</a>--}}
				{{--<a href="#">Спорт та ЗОЖ</a>--}}
				{{--<a href="#">Транспорт</a>--}}
				{{--<a href="#">Екологія</a>--}}
				{{--<a href="#">Управління містом</a>--}}
				{{--<a href="#">Здорове харчування</a>--}}
				{{--<a href="#" class="count-color">...інші</a>--}}
			{{--</div>--}}
			{{--<div>--}}
				{{--<div class="content-main-block">--}}
					{{--<img src="img/myr.jpg" class="content-main-block-img">--}}
					{{--<h3>Правильне управління містом: без депутатів та іншої мерзоти</h3>--}}
					{{--<hr/>--}}
					{{--<p><span class="main-color">Опис:</span>Місто де дух успішності та відчувається з першрго погляду, з першого подиху, з першого візиту.<b>Де все нове одразу стає рідним і близьким!</b>Де кожен досягає успіху - в сім'ї,  на роботі, в суспільстві, в освіті, в спірті, в творчості відчувається з першого погляду.</p>--}}
					{{--<p class="count-color content-main-block-author">Черновецький<br/>Владислав</p>--}}
					{{--<hr class="content-hr-vertical"/>--}}
					{{--<div class="three-image" style="width: 350px">--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> фінансували:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_people.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">225</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> зібрано коштів:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_grn.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">22,5k</p>--}}
								{{--<img src="img/line.png">--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> залишилось:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_calendar.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">76 днів</p>--}}
								{{--<img src="img/line.png">--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="content-main-block">--}}
					{{--<img src="img/myr.jpg" class="content-main-block-img">--}}
					{{--<h3>Правильне управління містом: без депутатів та іншої мерзоти</h3>--}}
					{{--<hr/>--}}
					{{--<p><span class="main-color">Опис:</span>Місто де дух успішності та відчувається з першрго погляду, з першого подиху, з першого візиту.<b>Де все нове одразу стає рідним і близьким!</b>Де кожен досягає успіху - в сім'ї,  на роботі, в суспільстві, в освіті, в спірті, в творчості відчувається з першого погляду.</p>--}}
					{{--<p class="count-color content-main-block-author">Черновецький<br/>Владислав</p>--}}
					{{--<hr class="content-hr-vertical"/>--}}
					{{--<div class="three-image" style="width: 350px">--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> фінансували:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_people.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">225</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> зібрано коштів:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_grn.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">22,5k</p>--}}
								{{--<img src="img/line.png">--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> залишилось:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_calendar.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">76 днів</p>--}}
								{{--<img src="img/line.png">--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="content-main-block">--}}
					{{--<img src="img/myr.jpg" class="content-main-block-img">--}}
					{{--<h3>Правильне управління містом: без депутатів та іншої мерзоти</h3>--}}
					{{--<hr/>--}}
					{{--<p><span class="main-color">Опис:</span>Місто де дух успішності та відчувається з першрго погляду, з першого подиху, з першого візиту.<b>Де все нове одразу стає рідним і близьким!</b>Де кожен досягає успіху - в сім'ї,  на роботі, в суспільстві, в освіті, в спірті, в творчості відчувається з першого погляду.</p>--}}
					{{--<p class="count-color content-main-block-author">Черновецький<br/>Владислав</p>--}}
					{{--<hr class="content-hr-vertical"/>--}}
					{{--<div class="three-image" style="width: 350px">--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> фінансували:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_people.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">225</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> зібрано коштів:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_grn.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">22,5k</p>--}}
								{{--<img src="img/line.png">--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> залишилось:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_calendar.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">76 днів</p>--}}
								{{--<img src="img/line.png">--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="content-main-block">--}}
					{{--<img src="img/myr.jpg" class="content-main-block-img">--}}
					{{--<h3>Правильне управління містом: без депутатів та іншої мерзоти</h3>--}}
					{{--<hr/>--}}
					{{--<p><span class="main-color">Опис:</span>Місто де дух успішності та відчувається з першрго погляду, з першого подиху, з першого візиту.<b>Де все нове одразу стає рідним і близьким!</b>Де кожен досягає успіху - в сім'ї,  на роботі, в суспільстві, в освіті, в спірті, в творчості відчувається з першого погляду.</p>--}}
					{{--<p class="count-color content-main-block-author">Черновецький<br/>Владислав</p>--}}
					{{--<hr class="content-hr-vertical"/>--}}
					{{--<div class="three-image" style="width: 350px">--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> фінансували:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_people.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">225</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> зібрано коштів:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_grn.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">22,5k</p>--}}
								{{--<img src="img/line.png">--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="statistic">--}}
							{{--<p class="statistic-header"> залишилось:</p>--}}
							{{--<div class="statistic-img">--}}
								{{--<img src="img/s_calendar.png">--}}
							{{--</div>--}}
							{{--<div class="statistic-data">--}}
								{{--<p class="hot-color">76 днів</p>--}}
								{{--<img src="img/line.png">--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
	@endsection
	@section('aboutUs')
	{{--<div class="about-us">--}}
		{{--<h1><img src="img/people.png" class="h-mage">Про нас</h1>--}}
		{{--<div class="about-us-data">--}}
			{{--<hr class="hot-color"/>--}}
			{{--<a href="#">Місія та цінності</a>--}}
			{{--<a href="#">Наші завдання</a>--}}
			{{--<a href="#">Наші принципи</a>--}}
			{{--<a href="#">Джерела фінансування</a>--}}
			{{--<hr class="hot-color"/>--}}
			{{--<div class="about-us-headers">--}}
				{{--<img src="img/shot.png">--}}
				{{--<hr class="line-vertical"/>--}}
				{{--<h2 class="main-color">Місія:</h2>--}}
				{{--<p>постійно генерувати позитивні і тільки справжні, дружні зміни в житті мешканців та гостів міста</p>--}}
				{{--<h2 class="main-color">Цінності:</h2>--}}
			{{--</div>--}}
			{{--<div style="column-count: 2;">--}}
				{{--<ul>--}}
					{{--<li>інноваційність - створюємо унікальні, перспективні речі;</li>--}}
					{{--<li>справжність - ніяких фальшивих і "показушних" справ;</li>--}}
					{{--<li>професійність - тільки світові стандарти та якість і краще;</li>--}}
					{{--<li>прозорість - все відкрито і чесно, нічого не приховуємо;</li>--}}
					{{--<li>дружність - усі справи по родинному близькі кожному;</li>--}}
					{{--<li>соціальність - усе, що робимо має соціальну складову;</li>--}}
					{{--<li>осяжність - результати проектів отримуємо за рік-два;</li>--}}
					{{--<li>ініціативність - не чекаємо ініціативи від влади;</li>--}}
				{{--</ul>--}}
			{{--</div>--}}
			{{--<hr class="hot-color"/>--}}
		{{--</div>--}}
	{{--</div>--}}
	@endsection
	@section('succesProject')
	{{--<div class="project">--}}
		{{--<div class="project-data">--}}
			{{--<h1><img src="img/bagAndMan.png" class="h-mage">Успішні проекти</h1>--}}
			{{--<hr class="hot-color"/>--}}
			{{--<a href="#">Комплексні бізнес-інкубатори</a>--}}
			{{--<a href="#">Енергозберігаючі технології повсюди</a>--}}
			{{--<a href="#">Масовий туризм</a>--}}
			{{--<a href="#" class="count-color">...Всі проекти</a>--}}
			{{--<hr class="hot-color"/>--}}
			{{--<div class="project-data-content">--}}
				{{--<div class="project-image">--}}
					{{--<img src="img/tram.jpg">--}}
				{{--</div>--}}
				{{--<div class="project-text">--}}
					{{--<h2>Розробка візуального стилю міста</h2>--}}
					{{--<h4 class="count-color">місто має свій унікальний стиль та бренд</h4>--}}
					{{--<hr class="main-color"/>--}}
					{{--<p><span class="main-color">Опис:</span>Вінницькі люди - митці,підприємці, мами, тати,науковці, кондуктора, ІТ-шники, пекарі, продавці, водії; Вінницькі університети, школи, садочки, кав'ярні, магазини; Вінницькі дороги, велодоріжки, автостоянки; Вінницький сувенір, Вінницька кава, обід, штрудель, ковбака тощо</p>--}}
					{{--<p class="main-color">ще наші проекти</p>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
	{{--<div class="rocket">--}}
		{{--<div class="rocket-data">--}}
			{{--<div class="rocket-data-gagarin">--}}
				{{--<img src="img/gagrin.jpg">--}}
			{{--</div>--}}
            {{--<div class="rocket-data-rocket">--}}
                {{--<img src="img/rocket.jpg">--}}
            {{--</div>--}}
			{{--<div class="rocket-data-anchor">--}}
				{{--<a href="#top">Наверх</a>--}}
			{{--</div>--}}

		{{--</div>--}}
	{{--</div>--}}
{{--</div>--}}
@endsection

{{--@section('footer')--}}
{{--<footer>--}}
	{{--<div class="footer">--}}
		{{--<div class="footer-link">--}}
			{{--<div class="footer-link-a">--}}
				{{--<a href="#">Контакти</a>--}}
				{{--<a href="#">Блог</a>--}}
				{{--<a href="#">Партнери</a>--}}
				{{--<a href="#">Правила сайту</a>--}}
				{{--<a href="#">Авторизуватись</a>--}}
				{{--<a href="#">Про нас</a>--}}
				{{--<a href="#">Програма</a>--}}
				{{--<a href="#">Контакти</a>--}}
				{{--<a href="#">Допомога</a>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="footer-form">--}}
			{{--<div class="footer-form-input">--}}
				{{--<form action="#" method="post" name="form">--}}
					{{--<label>Дізнайтеся про нові проекти першим:--}}
						{{--<input name="email" type="email">--}}
					{{--</label>--}}
				{{--</form>--}}
			{{--</div>--}}
		{{--</div>--}}
		{{--<div class="footer-contact">--}}
			{{--<div class="footer-contact-items">--}}
				{{--<a href="#">www.uspih.vn.ua</a>--}}
				{{--<a href="#">uspih.city@gmail.com</a>--}}
				{{--<p>+38(063)198-22-56</p>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
{{--</footer>--}}
{{--@endsection--}}
{{--@show--}}
{{--</body>--}}
{{--</html>--}}