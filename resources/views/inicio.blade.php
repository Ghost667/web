<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Inicio</title>
	<link rel="stylesheet" href="{{ asset('plugins/materialize/css/materialize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="parallax">
	<header>
		<div class="navbar-fixed">
			<nav class="opaque-navbar">
				<div class="container">
					<div class="nav-wrapper">
						<a href="{{ url('/inicio') }}" class="brand-logo">Tech Solutions</a>
						<ul class="right side-nav" id="nav-mobile" style="overflow: auto; transform: translateX(-100%);">
							<li class="hide-on-small-only"><a href="{{ url('/inicio') }}"><i class="mdi-navigation-arrow-back"></i></a></li>
						</ul>
						<a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<main>
		<div class="parallax-container parallax-top-fixed">
			<div class="parallax">
				<img src="{{ asset('images/parallax1.jpg') }}" alt="...">
			</div>
		</div>
		<div class="section">
			<div class="container">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum modi nostrum, molestiae rem, sit natus nemo facere officia, nihil amet quaerat eos asperiores sequi cumque dolor est. Iusto, fuga, temporibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex non, deleniti nisi autem, ab repellat, laborum aliquam soluta veritatis doloremque magnam blanditiis sunt ut aperiam quaerat accusamus numquam provident, reprehenderit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, sit, voluptas. Perferendis qui eaque voluptate voluptatem, illo debitis numquam sed dolore accusamus eius facere molestias at odio atque saepe deserunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam iste quos quibusdam, cum architecto fuga dolore aperiam dicta harum incidunt doloribus, praesentium provident, reiciendis facilis voluptas enim rerum ut facere!</p>
			</div>
		</div>
		<div class="parallax-container">
			<div class="parallax">
				<img src="{{ asset('images/parallax2.jpg') }}" alt="...">
			</div>
		</div>
		<div class="section">
			<div class="container">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum modi nostrum, molestiae rem, sit natus nemo facere officia, nihil amet quaerat eos asperiores sequi cumque dolor est. Iusto, fuga, temporibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex non, deleniti nisi autem, ab repellat, laborum aliquam soluta veritatis doloremque magnam blanditiis sunt ut aperiam quaerat accusamus numquam provident, reprehenderit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, sit, voluptas. Perferendis qui eaque voluptate voluptatem, illo debitis numquam sed dolore accusamus eius facere molestias at odio atque saepe deserunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam iste quos quibusdam, cum architecto fuga dolore aperiam dicta harum incidunt doloribus, praesentium provident, reiciendis facilis voluptas enim rerum ut facere!</p>
			</div>
		</div>
	</main>
	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2014 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>
	<script src="{{ asset('plugins/materialize/js/jquery.js') }}"></script>
	<script src="{{ asset('plugins/materialize/js/materialize.js') }}"></script>
	<script src="{{ asset('js/parallax.js') }}"></script>
</body>
</html>