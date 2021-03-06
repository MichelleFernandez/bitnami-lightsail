<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

	<div class="blog-masthead">
		<nav class="blog-nav">
			<a class="blog-nav-item active" href="#">Home</a>
			<a class="blog-nav-item" href="#">Our Tour</a>
			<a class="blog-nav-item" href="#">Schedule</a>
			<a class="blog-nav-item" href="#">FAQ</a>
		</nav>
	</div>
	

	<div id="hero">
		<div class="content-wrapper">
			<div class="blog-header">
				<h1 class="blog-title">Do you know Medellín?</h1>
				<p class="lead blog-description">...Do it riding a bici with us!</p>
			</div>
			<div class="hero-action">
				<button>Conctact us</button>
				<button>Book Your Space</button>
			</div>
		</div>
	</div>

	<div class="container">
