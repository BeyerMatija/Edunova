<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Početna</title>
		
		<?php include_once 'head.php' ?>

		<link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />

		<?php include_once 'head2.php' ?>
		
	</head>
	<body id="pageBody">

		<div id="divBoxed" class="container">

			<div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

			<div class="divPanel notop nobottom">
				<div class="row-fluid">
					<div class="span12">

						<div id="divMenuRight" class="pull-right">
							<div class="navbar">
								<button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
									NAVIGATION <span class="icon-chevron-down icon-white"></span>
								</button>
								<div class="nav-collapse collapse">
									<ul class="nav nav-pills ddmenu">
										<li class="dropdown active">
											<a href="index.php">Početna</a>
										</li>
										<li class="dropdown">
											<a href="page.php" class="dropdown-toggle">Stranica<b class="caret"></b></a>
											
											<?php include_once 'dropdown.php' ?>
											
										</li>
										<li class="dropdown">
											<a href="login.php">Login!</a>
										</li>
										<li class="dropdown">
											<a href="O_nama.php">O nama</a>
										</li>
										<li class="dropdown">
											<a href="Kontakt.php">Kontakt</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="row-fluid">
					<div class="span12">

						<div id="headerSeparator"></div>

						<div class="row-fluid">
							<div class="span6">

								<div id="divHeaderText" class="page-content">
									<div id="divHeaderLine1">
										Tekst naslova ide ovdje!
									</div>
									<br />
									<div id="divHeaderLine2">
										Druga linija naslova teksta za privlačenje dodatne pažnje i dodatnih informacija.
									</div>
									<br />
									<div id="divHeaderLine3">
										<a class="btn btn-large btn-secondary" href="#">Sekundarna tipka</a>   <a class="btn btn-large btn-primary" href="#">Primarna tipka</a>
									</div>
								</div>

							</div>
							<div class="span6">

								<div id="camera_wrap">
									<div data-src="styles/working-on-keyboard.JPG" >
										<div style="position:absolute;bottom:10%;left:3%;padding:10px;width:50%;" class="fadeIn camera_effected camera_caption cap1">
											Lorem Ipsum je jednostavni grafički tekst koji je standard u grafičkoj industriji.
										</div>
									</div>
									<div data-src="styles/two-businessmen.jpg" >
										<div class="camera_caption fadeFromBottom cap2">
											Lorem Ipsum je jednostavni grafički tekst koji je standard u grafičkoj industriji.
										</div>
									</div>
								</div>

							</div>
						</div>

						<div id="headerSeparator2"></div>

					</div>
				</div>

			</div>

			<div class="contentArea">

				<div class="divPanel notop page-content">

					<div class="row-fluid">

						<div class="span12" id="divMain">

							<h1>Dobrodošli</h1>

							<p>
								Planiranje prezentacije na kojem ćete održati izravno publici
								Izlaganja prezentacije publici vaš je obično najbolji način, osobito kada poruka bude složene i očekujete da publika će imati pitanja.
								Da biste započeli stvaranje prezentacije koje namjeravate prenijeti izravno publici, nastavite dio 2: početak stvaranja prezentacije.
							</p>

							<br />

							<div class="row-fluid">
								<div class="span4">
									<h2>1/3 Kolumne</h2>
									<img src="http://placehold.it/150x90/e7e7e7" class="img-polaroid" style="margin:5px 0px 15px;">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										<br />
										<a href="#">Read More &raquo;</a>
									</p>
								</div>
								<div class="span4">
									<h2>1/3 Kolumne</h2>
									<img src="http://placehold.it/150x90/e7e7e7" class="img-polaroid" style="margin:5px 0px 15px;">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										<br />
										<a href="#">Read More &raquo;</a>
									</p>
								</div>
								<div class="span4">
									<h2>1/3 Kolumne</h2>
									<img src="http://placehold.it/150x90/e7e7e7" class="img-polaroid" style="margin:5px 0px 15px;">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										<br />
										<a href="#">Read More &raquo;</a>
									</p>
								</div>
							</div>

						</div>

					</div>

					<div id="footerInnerSeparator"></div>
				</div>
			</div>

			<div id="footerOuterSeparator"></div>

			<?php include_once 'footer.php' ?>
			
		</div>
		<br />
		<br />
		<br />

		<?php include_once 'skripta.php' ?>

	</body>
</html>