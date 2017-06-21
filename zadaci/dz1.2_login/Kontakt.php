<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Kontakt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->


    <link href="http://fonts.googleapis.com/css?family=Chewy" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Terminal+Dosis+Light" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo">
                        <a href="index.php" id="divSiteTitle">Kontakt stranica</a><br />
                        <a href="index.php" id="divTagLine">Javite nam se slobodno....</a>
                    </div>

	            </div>
            </div>   
            <div class="row-fluid">
                <div class="span12">
    					
                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown"><a href="index.php">Početna</a></li>
                                <li class="dropdown">
                                    <a href="page.php" class="dropdown-toggle">Stranica <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle">Dropdown Item &nbsp;&raquo;</a>
                                            <ul class="dropdown-menu sub-menu">
                                                <li><a href="#">Dropdown Item</a></li>
                                                <li><a href="#">Dropdown Item</a></li>
                                                <li><a href="#">Dropdown Item</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dropdown Item</a></li>
                                        <li><a href="#">Dropdown Item</a></li>
                                        <li><a href="#">Dropdown Item</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="login.php">Login!</a></li>
                                <li class="dropdown active"><a href="O_nama.php">O nama</a></li>
                                <li class="dropdown"><a href="Kontakt.php">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

	            </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="index.php">Početna</a> &nbsp;/&nbsp; <span>Kontakt</span>
            </div>

           	<div class="row-fluid">
						<div class="span8" id="divMain">

							<h1>Kontakt</h1>
							
							<div class="container">
								<form id="contact" action="" method="post">
									
									<fieldset>
										<input placeholder="Ime" type="text" tabindex="1" required autofocus>
									</fieldset>
									<fieldset>
										<input placeholder="Vaša email adresa" type="email" tabindex="2" required>
									</fieldset>
									<fieldset>
										<input placeholder="Vaš broj telefona" type="tel" tabindex="3" required>
									</fieldset>
									<fieldset>
										<textarea placeholder="Upišite vašu poruku ovdje...." tabindex="5" required></textarea>
									</fieldset>
									<fieldset>
										<button name="Podnesi" type="submit" id="contact-submit" data-submit="...Sending">
											Podnesi!
										</button>
									</fieldset>
								</form>

							</div>
						</div>

						<div class="span4 sidebar">

							<div class="sidebox">
								<h3 class="sidebox-title">Podaci o kompaniji.</h3>
								<p>
									Apple d.o.o.
									Sjedište: Ramska 20, HR - 31000 Osijek
									Poslovna jedinica: I. Gundulića 5/II, HR - 31000 Osijek</p>
									<p>
									Tel: 031 273 236
									Mob: 097 690 0208, 098 437 585</p>
									<p>
									Radno vrijeme: ponedjeljak - petak, 08:00 do 16:00</p>
									<p>
									Sudski registar trgovačkog suda u Osijeku br. Tt-08/469-3, mbs: 030027395
									Temeljni kapital: 41,400.00 kn uplaćen u cijelosti.</p>
									<p>
									OIB: 90020897203
									IBAN: HR5323600001101368262 | SWIFT: ZABAHR2X
									<br/><br/>
									Član uprave: Direktor svemira vitez Željko Pervan.
								</p>
							</div>

						</div>
					</div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <?php include_once 'footer.php' ?>
    
</div>
<br /><br /><br />

<?php include_once 'skripta.php' ?>




</body>
</html>