<?php
require ('champquery.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spell Timers</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <main class="site-main">
        <section class="hero_area">
            <div class="hero_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>League of Legends Spell Timers</h1>
                            <p algin='center'> 
								<select name"leaguechampsdata">
									<?php InsertData(); ?>
								</select>
								
							</p>
								
                        </div>
                    </div>
                </div>
            </div>
        </section>
		

         <section class="home-area">
            <div class="home_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12"><h2 class="sub_title">Enemy Champions</h2></div>
                        <div class="home_list">
                            <ul>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/photo1.jpg" alt="Post">
                                        <div class="caption">
                                            <h3>Material: T200 Grey Cast Iron</h3>
                                            <p>Induction furnace starter plugs, for Anode rodding shop</p>
                                            
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/photo2.jpg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3>Material: 500/7 Ductile Iron</h3>
                                            <p>Lower tapping spouts- Aluminium hot metal transfer ladles</p>
                                            
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/photo3.jpg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3>Material: 500/7 Ductile Iron</h3>
                                            <p>Upper tapping spouts- Aluminium hot metal transfer ladles</p>
                                            
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/photo4.jpg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3>Material: Heat –Resistant, 500/7 ductile iron</h3>
                                            <p>Upper Tapping spouts, Aluminium hot metal transfer ladles</p>
                                        </div>
                                    </div>                                        
                                </li>  
								<li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/photo4.jpg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3>Material: Heat –Resistant, 500/7 ductile iron</h3>
                                            <p>Upper Tapping spouts, Aluminium hot metal transfer ladles</p>
                                        </div>
                                    </div>                                        
                                </li>    								
                            </ul>
                        </div>
                    </div>
		
        
    </main>
    <footer class="site-footer">
        <!--
		<div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>COMPANY NAME</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue lectus diam, sit amet cursus massa efficitur sed. </p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>SERVICES</h4>
                    <ul class="big">
                        <li><a href="#" title="">Title One</a></li>
                        <li><a href="#" title="">Title Two</a></li>
                        <li><a href="#" title="">Title Three</a></li>
                        <li><a href="#" title="">Title Four</a></li>
                        <li><a href="#" title="">Title Five</a></li>
                        <li><a href="#" title="">Title Six</a></li>
                        <li><a href="#" title="">Title Seven</a></li>
                        <li><a href="#" title="">Title Eight</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>CONTENT</h4>
                    <ul class="big">
                        <li><a href="#" title="">Title One</a></li>
                        <li><a href="#" title="">Title Two</a></li>
                        <li><a href="#" title="">Title Three</a></li>
                        <li><a href="#" title="">Title Four</a></li>
                        <li><a href="#" title="">Title Five</a></li>
                        <li><a href="#" title="">Title Six</a></li>
                        <li><a href="#" title="">Title Seven</a></li>
                        <li><a href="#" title="">Title Eight</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>CONTENT</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adi piscing elit.</p>
                    <p><a href="tel:+902222222222"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +90 222 222 22 22</a></p>
                    <p><a href="mailto:iletisim@agrisosgb.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> mail@awebsitename.com</a></p>
                </div>
            </div>
        </div>
		-->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pull-left">&copy; 2017 BAUXTEK</p>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-inline navbar-right">
                            <li><p id="contactid">Contact:</p></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });        
    </script>
</body>
</html>