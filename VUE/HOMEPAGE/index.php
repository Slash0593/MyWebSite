<!DOCTYPE html>
<html lang="FR">
<head>
	<title> GEEKSH | HOMEPAGE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="100">
	<meta http-equiv="X-UA-Compatible" content="ID=edge">
    <link rel="icon" type="image/jpg" href="../../CSS/media/geeksh_logo.jpg"/>

    <!-- SCROLL REVEAL  JS  -->
    <script type="text/javascript" src="../../js/scrollreveal/dist/scrollreveal.js"> </script>
    <script>
        window.sr = ScrollReveal();
    </script>

    <!-- CSS AND BOOTSRAPT   -->
	<link rel="stylesheet" type="text/css" href="../../CSS/bootstrap-3.3.7/dist/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../../CSS/custom_css.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Indie+Flower|Lobster|Playfair+Display" rel="stylesheet">
</head>


<body data-spy="scroll" data-target="#mainnavbar" data-offset="100">
	
	<div id="mymodal1" >
	
			<div id="mymodal_img_container">
			<span class="glyphicon glyphicon-remove-circle close_icon pull-right"></span>
			<img class="big_img" src="../../CSS/media/homepic5.jpg" alt="photo_absi">
			<img class="big_img" src="../../CSS/media/homepic3.jpg">
			<img class="big_img" src="../../CSS/media/homepic7.jpg">
			</div>
	</div>

    <header>
        <?php require('../INCLUDES/nav.php'); ?>
    </header>

	    <div  class="container">

        <div id="" class="row">

            <div id="welcome_section" class="welcome_ctner visible-xs visible-sm visible-lg col-sm-12">
                <p id="welcome_text"> <span class="hidden-xs" ><~</span> WELCOME ON GEEKSH <span class="hidden-xs" >~></span></p>
            </div>
        </div>
<!--            <div class="visible-xs" id="space"></div>-->
        <section id="carousel_sec" class="carousel_profile_section row">
		    <div class="row">
			    <aside  class="col-lg-4">
				    <div class="row">
					    <div class="col-lg-12 homepic_container" id="thumbnail_container">
                            <a href="#"><img id="img_circle1" class="img-thumbnail homepic_img" src="../../CSS/media/homepic5.jpg"></a>
                            <a href="#"><img id="img_circle2" class="img-thumbnail homepic_img" src="../../CSS/media/homepic3.jpg"></a>
                            <a href="#"><img id="img_circle3" class="img-thumbnail homepic_img" src="../../CSS/media/homepic7.jpg"></a>
                        </div>
                    </div>
                    <div id="des_side" class="row">
                        <hr>
                        <h3 id="geek_name">Aboubacar Sidiki Camara </h3>
                        <hr>
                    </div>
                    <div id="des" class="row">
                        <p >
                            Je vous fais parvenir par la présente, une demande de stage au sein de votre entreprise qui suscite un vif intérêt tant pour mon avenir professionnel que.
                        </p>
                        <button id="ld_button" type="button" class=" soccial_media_btn_lg btn btn-default btn-sm"> <i class="fa fa-linkedin-square"></i><a href="#"> </a>linkedin </button>
                        <button id="git_button" type="button" class=" soccial_media_btn_lg btn btn-default btn-sm"> <i class="fa fa-github-square"></i><a href="#"> </a>github </button>

                        <button id="fb_button" type="button" class=" soccial_media_btn btn btn-primary btn-sm"><span class="fa fa-facebook-square"></span> <a href="#"> </a>facebook </button>
                        <button id="yt_button" type="button" class=" soccial_media_btn btn btn-danger btn-sm"> <i class="fa fa-youtube-square"></i><a href="#"> </a>youtube </button>
                        <button id="yt_twitter" type="button" class=" soccial_media_btn btn btn-info btn-sm"> <i class="fa fa-twitter-square"></i><a href="#"> </a>twitter </button>
                    </div>
			    </aside>

				<div id="carousel" class="carousel slide col-lg-8">
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"> </li>
						<li data-target="#carousel" data-slide-to="1" > </li>
						<li data-target="#carousel" data-slide-to="2"> </li>
					</ol>
					<div class="carousel-inner">
						<div class="item active carousel_img "> <img class="img-responsive" id="homepic_container" src="../../CSS/media/carousel2.jpg">
							<p class="carousel-caption hidden-xs"> Je vous fais parvenir par la présente, une demande de stage au sein de votre entreprise qui suscite </p>
						 </div>
						 <div class="item carousel_img "> <img class="img-responsive" id="homepic_container" src="../../CSS/media/carousel1.jpg">
							<p class="carousel-caption hidden-xs"> Je vous fais parvenir par la présente, une demande de stage au sein de votre entreprise qui suscite </p>
						 </div>
						<div class="item  carousel_img">  <img class="img-responsive" id="homepic_container" src="../../CSS/media/carousel34.jpg">
							<p class="carousel-caption hidden-xs"> Je vous fais parvenir par la présente, une demande de stage au sein de votre entreprise qui suscite </p>
						 </div>

						 <a class="left carousel-control" href="#carousel" data-slide="prev">
						<span class="icon-prev"></span>
						</a>
						<a class="right carousel-control" href="#carousel" data-slide="next">
						<span class="icon-next"></span>
						</a>

					</div>
				</div>

		</div>
	</section>

        <section id="page_about" class="row">
            <div id="section_title" class="row">
                <h2 class="lucida_fnt"> About Geeksh</h2>
                <div id="underline_bar" class=" hidden-sm hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
                <div id="underline_bar" class="pull-left visible-xs visible-sm hidden-md hidden-lg hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
            </div>

            <div id="about_content" class="row">
                <div id="who_am_i" class="col-lg-12 about_content_reveal myjumb">
                    <h4> < Who Am I ? /></h4>
                    <hr>
                    <p class="trebuchet_fnt">
                        He'll want to use your yacht, and I don't want this thing smelling like fish. I'm half machine. I'm a monster.
                        Steve Holt! No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.
                        Steve Holt! No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.

                    </p>
                </div>

                <div id="who_am_i" class="col-lg-12 about_content_reveal myjumb">
                    <h4> < What Is Geeksh ? /></h4>
                    <hr>
                    <p class="trebuchet_fnt">
                        He'll want to use your yacht, and I don't want this thing smelling like fish. I'm half machine. I'm a monster.
                        Steve Holt! No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.
                        Steve Holt! No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.
                        He'll want to use your yacht, and I don't want this thing smelling like fish. I'm half machine. I'm a monster.
                    </p>
                </div>

                <div id="who_am_i" class="col-lg-12 about_content_reveal myjumb">
                    <h4> < Want To Get In Touch ? /></h4>
                    <hr>
                    <p class="trebuchet_fnt">
                        He'll want to use your yacht, and I don't want this thing smelling like fish. I'm half machine. I'm a monster.
                        Steve Holt! No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.
                        He'll want to use your yacht, and I don't want this thing smelling like fish. I'm half machine. I'm a monster.
                        Steve Holt! No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.
                    </p>
                </div>

            </div>



        </section>

        <section id="page_tutos" class="row">
            <div id="section_title" class="row">
                <h2 id="tuto_title" class="lucida_fnt"> Tutorials</h2>
                <div id="underline_bar" class=" hidden-sm hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
                <div id="underline_bar" class="pull-left visible-xs visible-sm hidden-md hidden-lg hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
            </div>

            <div id="tuto_container" class="row ">

                        <div class="col-lg-12">
                            <div>
                                <iframe class="jumbotron tutos_reveal_left" src="http://www.youtube.com/embed/VmnIeLmjuHA"> <</iframe>
                                <p> <a href="#">garder la tete haute<br> <?= ' '.date('Y-m-d H:i:s')?> </a> </p>

                            </div>
                            <div>
                                <iframe class="jumbotron tutos_reveal_left" src="http://www.youtube.com/embed/VmnIeLmjuHA"> <</iframe>
                                <p> <a href="#">ne pas s'affoler surtout et encore <br> <?= ' '.date('Y-m-d H:i:s')?></a></p>
                            </div>
                            <div>
                                <iframe class="jumbotron tutos_reveal_right" src="http://www.youtube.com/embed/VmnIeLmjuHA"> <</iframe>
                                <p> <a href="#">maintenir la forme<br> <?= ' '.date('Y-m-d H:i:s')?></a> </p>
                            </div>
                            <div>
                                <iframe class="jumbotron tutos_reveal_right" src="http://www.youtube.com/embed/VmnIeLmjuHA"> <</iframe>
                                <p> <a href="#">redemander la chance change it <br> <?= ' '.date('Y-m-d H:i:s')?></a></p>
                            </div>
                        <div class="hidden-xs">
                            <div>
                                <iframe class="jumbotron tutos_reveal_left" src="http://www.youtube.com/embed/VmnIeLmjuHA"> <</iframe>
                                <p> <a href="#">approche en douceur <br> <?= ' '.date('Y-m-d H:i:s')?></a></p>
                            </div>
                            <div>
                                <iframe class="jumbotron tutos_reveal_left" src="http://www.youtube.com/embed/VmnIeLmjuHA"> <</iframe>
                                <p> <a href="#">gaming su le tas et sur le mil <br> <?= ' '.date('Y-m-d H:i:s')?></a></p>
                            </div>
                            <div>
                                <iframe class="jumbotron tutos_reveal_right" src="http://www.youtube.com/embed/VmnIeLmjuHA"> <</iframe>
                                <p> <a href="#">npm et node.js en detail <br> <?= ' '.date('Y-m-d H:i:s')?></a></p>
                            </div>
                            <div>
                                <iframe class="jumbotron tutos_reveal_right" src="http://www.youtube.com/embed/VmnIeLmjuHA"> <</iframe>
                                <p> <a href="#">Telecharger gratos sur le net <br> <?= ' '.date('Y-m-d H:i:s')?></a></p>
                            </div>
                        </div>
                        </div>

            </div>
            <div id="all_link_div" class="">
                <a class="btn btn-primary" id="all_tutos">< All Tutos /></a>
            </div>
        </section>

        <section id="page_service" class="row" >

                <div id="section_title" class="row">
                    <h2 id="srv_title" class="lucida_fnt">Services</h2>
                    <div id="underline_bar" class=" hidden-sm hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
                    <div id="underline_bar" class="pull-left visible-xs visible-sm hidden-md hidden-lg hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
                </div>

                <div id="services_offered" class="row ">
                    <div id="networking" class="col-lg-3 col-md-6 col-sm-6 col-lg-12">

                        <div class="row"> <a href="#"> <img id="" class="thumbnail" src="../../CSS/media/netserv.png"> <br> <hr class="pull-left"><br></a></div>
                        <h3 class="row"> Networking<br></h3>
                        <div class="row">
                            <p>Je vous fais parvenir par la présente, une demande de stage au sein de votre entreprise.</p>
                            <button type="button" href="#" class="srv_btn_link btn-default srv_btn">en savoir plus <span class="glyphicon glyphicon-play"></span></button>
                        </div>


                    </div>
                    <div id="web_dev" class="col-lg-3 col-md-6 col-sm-6">

                        <div class="row"> <a href="#"> <img id="" class="thumbnail"src="../../CSS/media/webdev3.png"> <br> <hr class="pull-left"><br></a></div>
                        <h3 class="row"> Web App<br></h3>
                        <div class="row">
                            <p>Je vous fais parvenir par la présente, une demande de stage au sein de votre</p>
                            <button type="button" href="#" class="srv_btn_link btn-default srv_btn">en savoir plus <span class="glyphicon glyphicon-play"></span></button>
                        </div>

                    </div>
                    <div id="software_dev" class="col-lg-3 col-md-6 col-sm-6">

                        <div class="row"> <a href="#"> <img id="" class="thumbnail" src="../../CSS/media/softdev2.jpg"> <br> <hr class="pull-left"><br></a></div>
                        <h3 class="row"> Mobile App<br></h3>
                        <div class="row">
                            <p>Je vous fais parvenir par la présente, une demande de stage au sein de votre entreprise.</p>
                            <button type="button" href="#" class="srv_btn_link btn-default srv_btn">en savoir plus <span class="glyphicon glyphicon-play"></span></button>
                        </div>

                    </div>
                    <div id="geek_training" class="col-lg-3 col-md-6 col-sm-6">

                        <div class="row"> <a href="#"> <img id="" class="thumbnail" src="../../CSS/media/trainingpack.png"> <br> <hr class="pull-left"><br></a></div>
                        <h3 class="row"> Geek Training<br></h3>
                        <div class="row">
                            <p>Je vous fais parvenir par la présente, une demande de stage au sein de votre entreprise.</p>
                            <button type="button" href="#" class="srv_btn_link btn-default srv_btn">en savoir plus <span class="glyphicon glyphicon-play"></span></button>
                        </div>

                    </div>
                </div>
            </section>

        <section id="page_portfolio" class="row">
            <div id="section_title" class="row">
                <h2 id="srv_title" class="lucida_fnt">Portfolio</h2>
                <div id="underline_bar" class=" hidden-sm hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
                <div id="underline_bar" class="pull-left visible-xs visible-sm hidden-md hidden-lg hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
            </div>

            <div id="portfolio_container" class="carousel slide row">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"> </li>
                    <li data-target="#carousel" data-slide-to="1" > </li>

                </ol>
                <div class="carousel-inner">
                    <div class="item active carousel_portfolio ">
                        <p class=""> Je vous fais parvenir par la présente, une demande de stage au sein de votre entreprise qui suscite Lorem ipsum dolor sit amet, tempor prodesset eos no.
                            Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.

                        </p>
                        <div class="portfolio_imges ">
                            <a href="#"> <img  id="" class="thumbnail img-responsive" src="../../CSS/media/geeksh2.jpg"></a>
                        </div>
                    </div>

                    <div class="item carousel_portfolio ">
                        <p class=""> Je vous fais parvenir par la présente, une demande de stage au sein de votre entreprise qui suscite Lorem ipsum dolor sit amet, tempor prodesset eos no.
                            Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.

                        </p>
                        <div class="portfolio_imges">
                            <a href="#"> <img id="" class="thumbnail img-responsive" src="../../CSS/media/bckimg.jpg"></a>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#carousel" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel" data-slide="next">
                        <span class="icon-next"></span>
                    </a>

                </div>
            </div>
            <span id="project_stat" class="pull-left"> Complete => <?= '10'?> </span>
            <span id="project_stat" class="pull-right">Pending => <?= '5'?> </span>
        </section>

        <section id="page_contact" class="row">
           <div id="section_title" class="row">
               <h2 id="srv_title" class="lucida_fnt">Contact</h2>
               <div id="underline_bar" class=" hidden-sm hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
               <div id="underline_bar" class="pull-left visible-xs visible-sm hidden-md hidden-lg hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
           </div>

           <div class="row" id="contact_wrapper">

               <div class=" col-lg-6">
                   <p class="contact_section_title"> Leave a message</p>
                   <form class="">
                       <div class="row">
                           <div class="form-group col-md-6">
                               <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" id="sender_name" name="sender_name" class="contact_input form-control" required placeholder="Name">
                                </div>
                            </div>
                           <div class="form-group col-md-6">
                                   <div class="input-group ">
                                       <span class="input-group-addon"><i>@</i></span>
                                       <input id="sender_name" name="sender_email" placeholder="Email" class="contact_input form-control" type="email">
                                   </div>
                           </div>
                       </div>

                       <div id="snd_row" class="row">
                           <div class="form-group col-md-">
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                   <input type="text" id="sender_name" name="sender_name" class="contact_input form-control" required placeholder="Object">
                               </div>
                           </div>
                           <div class="form-group ">
                               <div class="input-group col-md-12">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                   <textarea id="sender_name" cols="5" name="sender_name" class="contact_input form-control" required placeholder="Object"></textarea>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="input-group">

                                   <button type="submit" id="email_submit" class="btn btn-primary input-sm"><span class="glyphicon glyphicon-send "></span> Submit</button>
                               </div>
                           </div>
                       </div>



                   </form>
               </form>

                <div class="col-xs-4 ">

                </div>
           </div>


               <div class="col-lg-6 ">
                   <p class="contact_section_title">Reach out</p>
                    <div class="row ">
                        <div id="contact_info" class="col-lg-4">

                           <p>
                               <i class="glyphicon glyphicon-map-marker"></i> Dakar, Senegal
                           </p>

                           <p><i class="glyphicon glyphicon-send"></i> absi@geeksh.com </p>
                           <p><i class="fa fa-phone"> </i> +77 571 76 82</p>
                        </div>

                        <!-- Map -->
                        <div class="col-lg-8">
                            <div class="thumbnail" id="map"></div>
                        </div>

                    </div>
               </div>

        </section>

        <footer>
            <div class="row">
                <div class="col-lg-4">
                    <p class=""> Copyright © GEEKSH. Designed by GEEKSH</p>
                </div>
                <div class="col-lg-4">
                    <p id="geeksh_footer">GEEKSH</p>
                </div>
                <div class="col-lg-4">
                    <span class="pull-right hidden-xs"> <a id="tramod" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Traduire cette page</a></span>
                </div>
            </div>
        </footer>

        </div>






	
	
	

<script type="text/javascript" src="../../js/jquery-3-2-1.js"> </script>
<script type="text/javascript" src="../../js/bootstrap.js"> </script>
<script type="text/javascript" src="../../js/myjs.js"> </script>
<script type="text/javascript" src="../../js/query.js"> </script>
<script type="text/javascript" >
	$(function () {
		$('.carousel').carousel({
			interval: 5000
		})
	});

 </script>
    <script>
        function initMap() {
            var uluru = {lat: 14.715995, lng: -17.463768};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvpRq0NA9_dLOTTQ14c8AKO1HTGwcpHVM&callback=initMap">
    </script>

</body>
</html>