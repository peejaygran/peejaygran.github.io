<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">

        <title>Peejay | Portfolio</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link id="pj-theme-color" rel="stylesheet" type="text/css" href="assets/css/custom-green.css">
		<link id="pj-custom-css" rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link id="pj-resposnive-css" rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body>
        <header class="pj-header navbar-fixed-top">	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a class="pj-brand navbar-brand">Peejay <span class="">Gran Bogal III</span></a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#pj-nav-menu-container" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse ia-smooth-scroll" id="pj-nav-menu-container">
							<ul class="pj-nav-menu nav navbar-nav navbar-right">
								<li class="active"><a href="#pj-1st-section">HOME</a></li>
								<li><a href="#pj-2nd-section">ABOUT</a></li>
								<li><a href="#pj-3rd-section">SKILLS</a></li>
								<li><a href="#pj-4th-section">PORTFOLIO</a></li>
								<li><a href="#pj-5th-section">CONTACT</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</header>
        {% block content %} {% endblock %}
		{% block modal %}{% endblock %}
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/addons/jquery/circle-progress.min.js"></script>
		<script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
		<script type="text/javascript" src="assets/js/custom.js"></script>
	
	</body>
	{% block script %} {% endblock %}
</html>