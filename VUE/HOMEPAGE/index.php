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

        <div id="" class="">

            <div id="welcome_section" class="welcome_ctner visible-xs visible-sm visible-lg col-sm-12">
                <p id="welcome_text"> <~<span id="" > WELCOME ON GEEKSH </span>~></p>
            </div>
        </div>
            <div class="visible-xs" id="space"></div>
        <section id="carousel_sec" class="carousel_profile_section">
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

        <section id="page_about">
            <div id="section_title" class="row">
                <h2 class="lucida_fnt"> About Geeksh</h2>
                <div id="underline_bar" class=" hidden-sm hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
                <div id="underline_bar" class="pull-left visible-xs visible-sm hidden-md hidden-lg"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
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

        <section id="page_tutos" class="">
            <div id="section_title" class="row">
                <h2 class="lucida_fnt"> Tutoriels</h2>
                <div id="underline_bar" class=" hidden-sm hidden-xs"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
                <div id="underline_bar" class="pull-left visible-xs visible-sm hidden-md hidden-lg"> <div id="line_cercle" ><span class="fa fa-arrow-circle-down mycaret"></span> </div> </div>
            </div>
            <div id="tuto_container" class="row">

                        <div class="col-lg-12 ">
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

                        <div id="all_link_div" class="col-lg-12 ">
                            <a class="btn btn-primary" id="all_tutos">< All Tutos /></a>
                        </div>
            </div>
        </section>
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

</body>
</html>