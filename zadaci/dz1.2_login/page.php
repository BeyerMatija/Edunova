<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Stranica</title>
    
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

                    <div id="divLogo">
                        <a href="index.php" id="divSiteTitle">Lagani početak</a><br />
                        <a href="index.php" id="divTagLine">Čisti HTML5 predložak</a>
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
                                <li class="dropdown active">
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
                                <li class="dropdown"><a href="O_nama.php">O nama</a></li>
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
                <a href="index.php">Početna</a> &nbsp;/&nbsp; <span>Stranica</span>
            </div>

            <div class="row-fluid">
                <div class="span8">

                    <h1>Komponente stranice</h1>
        
                    <div class="hero-unit">	        
                <h1>Pozdrav,Svijete!</h1>  
	            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content.</p>  
	            <p>    
                <a class="btn btn-primary btn-large">      Learn more    </a>  
                </p>            
            </div>
            <br />

            <h2>Labels</h2>
            <p>
                <span class="label">Default</span> &nbsp;
                <span class="label label-success">Success</span> &nbsp;
                <span class="label label-warning">Warning</span> &nbsp;
                <span class="label label-important">Important</span> &nbsp;
                <span class="label label-info">Info</span> &nbsp;
                <span class="label label-inverse">Inverse</span>
            </p>
            <br />

            <h2>Badges</h2>
            <p>
                <span class="badge">Default</span> &nbsp;
                <span class="badge badge-success">Success</span> &nbsp;
                <span class="badge badge-warning">Warning</span> &nbsp;
                <span class="badge badge-important">Important</span> &nbsp;
                <span class="badge badge-info">Info</span> &nbsp;
                <span class="badge badge-inverse">Inverse</span>
            </p>
            <br />

            <h2>Alert</h2>
            <p>
                <div class="alert alert-block">                          
	                <h4>Warning!</h4>              
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>            
                </div>
                <div class="alert alert-error">                            
                    <strong>Oh snap!</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
                <div class="alert alert-success">                           
                    <strong>Well done!</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
                <div class="alert alert-info">                          
                    <strong>Heads up!</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </p>
            <br />

            <h2>Thumbnails</h2>
            <ul class="thumbnails">              
	            <li class="span2"><a href="#" class="thumbnail"><img src="http://placehold.it/260x180" alt="" /></a></li>
	            <li class="span2"><a href="#" class="thumbnail"><img src="http://placehold.it/260x180" alt="" /></a></li>          
            </ul>
            <p>
                <img src="http://placehold.it/140x140" class="img-rounded" alt="" />&nbsp;
                <img src="http://placehold.it/140x140" class="img-circle" alt="" />&nbsp;
                <img src="http://placehold.it/140x140" class="img-polaroid" alt="" />&nbsp;
            </p>
            <br />


            <div class="page-header">  
	            <h1>Page header <small>Subtext for header</small></h1>
            </div>
            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>          
            <br />

            <h2>Lead copy</h2>
            <p class="lead">Lead copy here. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p> 
            <br />

            <!--<h2>Dropdown</h2>
            <ul class="nav nav-pills">
                <li class="dropdown">
                <a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                    <li><a tabindex="-1" href="javascript:">Option 1</a></li>
                    <li><a tabindex="-1" href="javascript:">Option 2</a></li>
                    <li><a tabindex="-1" href="javascript:">Option 3</a></li>
                </ul>
                </li>
            </ul>
            <br />-->

            <h2>Tabs</h2>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="tab-pane fade" id="profile">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="tab-pane fade" id="settings">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <br />

            <h2>Accordion</h2>
            <div class="accordion" id="accordion2">

                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                            Collapsible Group Item #1
                        </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                            Collapsible Group Item #2
                        </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                            Collapsible Group Item #3
                        </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                        <div class="accordion-inner">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        </div>
                    </div>
                </div>
                <br />

                <h2>Buttons</h2>
                <p>
                    <a class="btn btn-large" href="#">Large button</a>
                    <a class="btn" href="#">Default button</a>
                    <a class="btn btn-small" href="#">Small button</a>
                    <a class="btn btn-mini" href="#">Mini button</a>
                </p>
                <p>
                    <a class="btn btn-primary" href="#">Primary</a>
                    <a class="btn btn-secondary" href="#">Secondary</a>
                    <a class="btn btn-info" href="#">Info</a>
                    <a class="btn btn-success" href="#">Success</a>
                    <a class="btn btn-warning" href="#">Warning</a>
                    <a class="btn btn-danger" href="#">Danger</a>
                    <a class="btn btn-inverse" href="#">Inverse</a>
                </p>

                <br />

                <h2>kontakt forma</h2>

                <form>

                    <label>This is a label.</label>
                    <input type="text" placeholder="Standard Input">

                    <br /><br />

                    <label class="checkbox">
                        <input type="checkbox"> Check me out
                    </label>

                    <br />

                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that&mdash;be sure to include why it's great
                    </label>
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                    </label>

                    <br />

                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Option 1
                    </label>
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Option 2
                    </label>
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> Option 3
                    </label>

                    <br /><br />

                    <input class="input-mini" type="text" placeholder=".input-mini">
                    <input class="input-small" type="text" placeholder=".input-small">
                    <input class="input-medium" type="text" placeholder=".input-medium">
                    <input class="input-large" type="text" placeholder=".input-large">
                    <input class="input-xlarge" type="text" placeholder=".input-xlarge">
                    <input class="input-xxlarge" type="text" placeholder=".input-xxlarge">

                </form>

                <h2>Modal</h2>

                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 id="myModalLabel">Modal Heading</h3>
                    </div>
                    <div class="modal-body">
                        <h4>Text in a modal</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Save changes</button>
                    </div>
                </div>

                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Launch demo modal</a>

                <br /><br />

                <h2>General Icons</h2>

                <div class="row-fluid">
                <div class="span4">
                    <i class="general foundicon-settings"></i> .foundicon-settings<br />
                    <i class="general foundicon-heart"></i> .foundicon-heart<br />
                    <i class="general foundicon-star"></i> .foundicon-star<br />
                    <i class="general foundicon-plus"></i> .foundicon-plus<br />
                    <i class="general foundicon-minus"></i> .foundicon-minus<br />
                    <i class="general foundicon-checkmark"></i> .foundicon-checkmark<br />
                    <i class="general foundicon-remove"></i> .foundicon-remove<br />
                    <i class="general foundicon-mail"></i> .foundicon-mail<br />
                    <i class="general foundicon-calendar"></i> .foundicon-calendar<br />
                    <i class="general foundicon-page"></i> .foundicon-page<br />
                    <i class="general foundicon-tools"></i> .foundicon-tools<br />
                    <i class="general foundicon-globe"></i> .foundicon-globe<br />
                    <i class="general foundicon-home"></i> .foundicon-home<br />
                    <i class="general foundicon-quote"></i> .foundicon-quote<br />
                    <i class="general foundicon-people"></i> .foundicon-people<br />
                    <i class="general foundicon-monitor"></i> .foundicon-monitor<br />
                </div>
                <div class="span4">    
                    <i class="general foundicon-laptop"></i> .foundicon-laptop<br />
                    <i class="general foundicon-phone"></i> .foundicon-phone<br />
                    <i class="general foundicon-cloud"></i> .foundicon-cloud<br />
                    <i class="general foundicon-error"></i> .foundicon-error<br />
                    <i class="general foundicon-right-arrow"></i> .foundicon-right-arrow<br />
                    <i class="general foundicon-left-arrow"></i> .foundicon-left-arrow<br />
                    <i class="general foundicon-up-arrow"></i> .foundicon-up-arrow<br />
                    <i class="general foundicon-down-arrow"></i> .foundicon-down-arrow<br />
                    <i class="general foundicon-trash"></i> .foundicon-trash<br />
                    <i class="general foundicon-add-doc"></i> .foundicon-add-doc<br />
                    <i class="general foundicon-edit"></i> .foundicon-edit<br />
                    <i class="general foundicon-lock"></i> .foundicon-lock<br />
                    <i class="general foundicon-unlock"></i> .foundicon-unlock<br />
                    <i class="general foundicon-refresh"></i> .foundicon-refresh<br />
                    <i class="general foundicon-paper-clip"></i> .foundicon-paper-clip<br />
                    <i class="general foundicon-video"></i> .foundicon-video<br />
                </div>
                <div class="span4">     
                    <i class="general foundicon-photo"></i> .foundicon-photo<br />
                    <i class="general foundicon-graph"></i> .foundicon-graph<br />
                    <i class="general foundicon-idea"></i> .foundicon-idea<br />
                    <i class="general foundicon-mic"></i> .foundicon-mic<br />
                    <i class="general foundicon-cart"></i> .foundicon-cart<br />
                    <i class="general foundicon-address-book"></i> .foundicon-address-book<br />
                    <i class="general foundicon-compass"></i> .foundicon-compass<br />
                    <i class="general foundicon-flag"></i> .foundicon-flag<br />
                    <i class="general foundicon-location"></i> .foundicon-location<br />
                    <i class="general foundicon-clock"></i> .foundicon-clock<br />
                    <i class="general foundicon-folder"></i> .foundicon-folder<br />
                    <i class="general foundicon-inbox"></i> .foundicon-inbox<br />
                    <i class="general foundicon-website"></i> .foundicon-website<br />
                    <i class="general foundicon-smiley"></i> .foundicon-smiley<br />
                    <i class="general foundicon-search"></i> .foundicon-search<br />
                </div>
                </div>
                <br />

                <h2>Social Icons</h2>

                <div class="row-fluid">
                <div class="span4">
                    <i class="social foundicon-thumb-up"></i> .foundicon-thumb-up<br />
                    <i class="social foundicon-thumb-down"></i> .foundicon-thumb-down<br />
                    <i class="social foundicon-rss"></i> .foundicon-rss<br />
                    <i class="social foundicon-facebook"></i> .foundicon-facebook<br />
                    <i class="social foundicon-twitter"></i> .foundicon-twitter<br />
                    <i class="social foundicon-pinterest"></i> .foundicon-pinterest<br />
                    <i class="social foundicon-github"></i> .foundicon-github<br />
                    <i class="social foundicon-path"></i> .foundicon-path<br />
                    <i class="social foundicon-linkedin"></i> .foundicon-linkedin<br />
                    <i class="social foundicon-dribbble"></i> .foundicon-dribbble<br />
                </div>
                <div class="span4">
                    <i class="social foundicon-stumble-upon"></i> .foundicon-stumble-upon<br />
                    <i class="social foundicon-behance"></i> .foundicon-behance<br />
                    <i class="social foundicon-reddit"></i> .foundicon-reddit<br />
                    <i class="social foundicon-google-plus"></i> .foundicon-google-plus<br />
                    <i class="social foundicon-youtube"></i> .foundicon-youtube<br />
                    <i class="social foundicon-vimeo"></i> .foundicon-vimeo<br />
                    <i class="social foundicon-flickr"></i> .foundicon-flickr<br />
                    <i class="social foundicon-slideshare"></i> .foundicon-slideshare<br />
                    <i class="social foundicon-picassa"></i> .foundicon-picassa<br />
                    <i class="social foundicon-skype"></i> .foundicon-skype<br />
                </div>
                <div class="span4">
                    <i class="social foundicon-instagram"></i> .foundicon-instagram<br />
                    <i class="social foundicon-foursquare"></i> .foundicon-foursquare<br />
                    <i class="social foundicon-delicious"></i> .foundicon-delicious<br />
                    <i class="social foundicon-chat"></i> .foundicon-chat<br />
                    <i class="social foundicon-torso"></i> .foundicon-torso<br />
                    <i class="social foundicon-tumblr"></i> .foundicon-tumblr<br />
                    <i class="social foundicon-video-chat"></i> .foundicon-video-chat<br />
                    <i class="social foundicon-digg"></i> .foundicon-digg<br />
                    <i class="social foundicon-wordpress"></i> .foundicon-wordpress<br />
                </div>
                </div>
                <br />

                <h2>Video</h2>

                <article class="flex-video">
                    <iframe width="560" height="315" src="http://www.youtube.com/embed/e7OYeIXsW60"></iframe>
                </article>    
                <br />

                <article class="flex-video">
                    <iframe width="560" height="315" src="http://player.vimeo.com/video/2203727"></iframe>
                </article>    
                <br />

                <h2>Pagination</h2>

                <div class="pagination pagination-large">
                    <ul>
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <div class="pagination">
                    <ul>
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <div class="pagination pagination-small">
                    <ul>
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <div class="pagination pagination-mini">
                    <ul>
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <br />

                <h2>Media Object</h2>

                <div class="media">
                    <a class="pull-left" href="#">
                        <img src="http://placehold.it/64x64" class="img-rounded" />
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <div class="media">
                    <a class="pull-left" href="#">
                        <img src="http://placehold.it/64x64" class="img-rounded" />
                    </a>
                    <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://placehold.it/64x64" class="img-rounded" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                    </div>
                </div>
                <br />

                <h2>Media List</h2>

                <ul class="media-list">
                    <li class="media">
                    <a class="pull-left" href="#">
                        <img src="http://placehold.it/64x64" class="img-circle" />
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                        <!-- Nested media object -->
                        <div class="media">
                        <a class="pull-left" href="#">
                            <img src="http://placehold.it/64x64" class="img-circle" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Nested media heading</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            <!-- Nested media object -->
                            <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://placehold.it/64x64" class="img-circle" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- Nested media object -->
                        <div class="media">
                        <a class="pull-left" href="#">
                            <img src="http://placehold.it/64x64" class="img-circle" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Nested media heading</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        </div>
                        </div>
                    </div>
                    </li>
                </ul>

                </div>
                <div class="span4">

                    <div class="input-append">
                        <input class="span9" id="appendedInputButton" size="16" type="text"><button class="btn" type="button">Go!</button>
                    </div>

                    <br />

                    <h2>Naslov druge važnosti</h2>

                    <br />

                    <blockquote>
	                    <p>Apple Inc. ili Apple Computer, Inc. je američka računarska kompanija sa sjedištem u Silicijskoj dolini u gradu Cupertino, 
					savezna država Kalifornija. Apple je jedna od kompanija koja je pomogla pokretanju revolucije u osobnim računalima (PC) u kasnim 1970-im.
				    Smatra se kako je njezin Apple II praktički pokrenuo industriju poslovnih kompjutera nakon čega je proizvela Macintosh, 
				    prvi uspješni kompjuter s grafičkim operativnim sistemom čiji će dijelovi potom biti kopirani u nastanku Windowsa. 
				    Krajem 1990-ih je Apple promijenio svoj fokus s kompjutera na druge proizvode od kojih su najpoznatiji iPod, iTunes Music Store i Iphone. 
				    Zbog svega toga je Apple stekao reputaciju najveće svjetske tehnološke korporacije 2011. u doba smrti njenog osnivača i dugogodišnjeg generalnog direktora 
				    Stevea Jobsa.
					</p>
	                    <small>by Albert Einstein</small>
                    </blockquote>

                    <h1>Glavni naslov</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    <h2>Naslov druge važnosti</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    <h3>Naslov treće važnosti</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                
                    <h4>H4</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    <h5>H5</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                
                    <h6>H6</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                    <br />

                    <h2>neorganizirana lista</h2>
                    <ul>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    </ul>
                    <br />

                    <h2>organizirana lista</h2>
                    <ol>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    </ol>
                    <br />

                    <h2>Address</h2>
                    <p>
                        <address><strong>Your Company, Inc.</strong><br />
                        Address<br />
                        City, State, Zip<br />
                        <abbr title="Phone">P:</abbr> (123) 456-7890</address> 
                        <address>  <strong>Full Name</strong><br />
                        <a href="mailto:#">first.last@gmail.com</a></address>  
                    </p>
                    <br />

                    <h2>Well</h2>
                    <div class="well">              
                        Look, I'm in a well!
                    </div>
                    <br />

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