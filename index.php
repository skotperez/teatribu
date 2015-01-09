<?php include('header.php'); ?>

<section id="featured" class="row sec">
	<header class="hidden"><h1>Teatro Tribueñe</h1></header>
	<article class="featured-item col-md-12">
		<div class="featured-item-bg"style="background-image: url('images/home.img.01.png');">
			<div class="featured-item-text">
				<header>
					<div class="featured-item-current pull-right text-up">En gira</div>
					<div class="featured-item-date text-up">Del 24 de abril al 22 de junio</div>
					<h3 class="featured-item-tit text-up">Bodas de sangre</h3>
				</header>
				<div class="featured-item-author">de Federico García Lorca</div>
				<div class="featured-item-director">Dirección Irina Kouberskaya</div>
			</div>
		</div>
	</article><!-- .featured-item -->
	<div class="clearfix visible-md visible-lg"></div>
	<article class="featured-item featured-item-left col-md-6">
		<div class="featured-item-bg"style="background-image: url('images/home.img.02.png');">
			<div class="featured-item-text">
				<header>
					<div class="featured-item-date text-up">Del 26 de abril al 24 de junio</div>
					<h3 class="featured-item-tit text-up">La casa de Bernarda Alba</h3>
				</header>
				<div class="featured-item-author">de Federico García Lorca</div>
				<div class="featured-item-director">Dirección Irina Kouberskaya</div>
			</div>
		</div>
	</article><!-- .featured-item -->
	<article class="featured-item featured-item-right col-md-6">
		<div class="featured-item-bg"style="background-image: url('images/home.img.03.png');">
			<div class="featured-item-text">
				<header>
					<div class="featured-item-date text-up">Del 26 de abril al 24 de junio</div>
					<h3 class="featured-item-tit text-up">Caminos</h3>
				</header>
				<div class="featured-item-author">de Federico García Lorca</div>
				<div class="featured-item-director">Dirección Irina Kouberskaya</div>
			</div>
		</div>
	</article><!-- .featured-item -->
</section><!-- #featured -->

<section id="social" class="row sec">
	<header class="hidden"><h2>Redes sociales</h2></header>
	<div class="col-sm-5 col-md-3 col-lg-4">
		<h3 class="sec-tit">Twitter</h3>
		<a class="twitter-timeline"  href="https://twitter.com/TeatroTribuene" data-widget-id="553271157965979648">Tweets by @TeatroTribuene</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div class="col-sm-7 col-md-5 col-lg-4">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<h3 class="sec-tit">Facebook</h3>
		<div class="fb-like-box" data-href="https://www.facebook.com/pages/Teatro-Tribue&#xf1;e/283458045110407" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>
	</div>
	<div class="clearfix visible-sm"></div>
	<div class="col-sm-12 col-md-4">
		<h3 class="sec-tit">Calendario</h3>
	</div>
</section>

<section id="news" class="row sec">
	<div class="col-sm-12">
		<header><h2 class="sec-tit">Noticias</h2></header>
		<article class="news-item">
			<header>
				<time datetime="2014-12-04">04/12/2014</time>
				<h3 class="news-item-tit"><a href="">Paseillo de Hugo Pérez de la Pica</a></h3>
			</header>
			<div class="news-item-desc">Una celebración estertórica, la intrahistoria de los restos de la fiesta. Una visión nueva de los engranajes y esencias. El arte de torear y alrededores. Bailado, cantado y recitado. Lo majo, lo curro, lo manolo, lo flamenco dónde y cuándo se diluyeron.</div>
		</article>
		<article class="news-item">
			<header>
				<time datetime="2014-12-01">01/12/2014</time>
				<h3 class="news-item-tit"><a href="">¡Este puente ven al teatro!</a></h3>
			</header>
			<div class="news-item-desc">Os esperamos en Tribueñe con: "Navegando por ideas escondidas" jueves a las 20h, "Bodas de sangre" viernes a las 20h y "Regreso al hogar" sábados y domingos a las 19h.</div>
		</article>
	</div>
</section><!-- #news -->

<?php include('footer.php'); ?>
