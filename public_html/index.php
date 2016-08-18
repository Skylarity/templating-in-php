<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Templating Using PHP";

/*load head-utils.php*/
require_once("php/partials/head-utils.php");
?>

	<body class="sfooter">
		<div class="sfooter-content">

			<!--begin header and navbar-->
			<?php require_once("php/partials/header.php"); ?>

			<!--begin main page content-->
			<main>
				<div class="container">

					<!--begin welcome row-->
					<div class="row">
						<div class="col-md-12">
							<div class="jumbotron">
								<h1>Meow! =^. .^=</h1>
								<p>Welcome to Senator Arlo's Bootstrap page!</p>
							</div>
						</div>
					</div>

					<!--begin 2 column row-->
					<div class="row">
						<div class="col-md-6">
							<div class="content-box">
								<h3>Navbar</h3>
								<p>This example uses Bootstrap's built-in Navbar. RTFM here: <a
										href="http://getbootstrap.com/components/#navbar" target="_blank">http://getbootstrap.com/components/#navbar</a></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="content-box">
								<h3>Flexbox Sticky Footer</h3>
								<p>Keep the footer at the bottom of the page, always. Even if the content-area is "short". This is the finest sticky footer I've ever used. View the source code.</p>
							</div>
						</div>
					</div>

					<!--begin 4 column row-->
					<div class="row">
						<div class="col-md-3">
							<div class="content-box">
								<h3>Jumbotron</h3>
								<p>The Bootstrap "jumbotron" made the "Meow!" big. This is also sometimes referred to as a "Hero Message", lol. RTFM <a href="http://getbootstrap.com/components/#jumbotron" target="_blank">here</a>.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<h3>Box Styling</h3>
								<p>See these fancy round-corner boxes? I did that with some custom CSS. Open devtools and look for the &lt;div class="content-box"&gt;. Yay!</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<h3>Mobile First</h3>
								<p>Check this page out on your mobile device! Bootstrap powers the responsive behavior by default when build websites the Bootstrap way. :D</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<h3>View Source</h3>
								<p>This is a lotta Bootstrap, I know. View the source code, it's well commented. Take a look in devtools. Try stuff. Break things. Have fun.</p>
							</div>
						</div>
					</div>

				</div>
			</main>
		</div><!--.sfooter-content-->

		<!--begin footer content-->
		<?php require_once("php/partials/footer.php");?>
	</body>
</html>
