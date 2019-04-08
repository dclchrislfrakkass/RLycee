<?php /* Template Name: Radio */ ?>

<?php get_header(); ?>


<!-- *********************************** -->
<!-- ************* Header ************* -->
<!-- *********************************** -->
<?php 
$currentClassName = get_the_title(); ?>
<header class="header-Radio">
	<div class="container headerText">
		<div class="row">
			<div class="col headerContent">
				<h1 class="headerTitleContent text-white anim-2"><?php echo( $currentClassName) ?></h1>
			</div>
		</div>
	</div>
	<!-- Dégragé au dessus de la vidéo pour lisser les couleurs -->
	<!--<div class="container-fluid headerGradient">-->
	</div>
</header>


<main>
	<!-- ************* Présentation ************* -->
	<!-- ***************************************** -->
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else : ?>
	
	<h4 class="text-center text-orange">Désolé, mais la page que vous recherchez n'existe pas ou plus.</h4><br/>
	<p class="text-center"><a href="<?php bloginfo( 'url' ); ?>" class="btn btn-warning">Retour à l'accueil</a></p>

<?php endif; ?>

<!-- ************* Galerie ************* -->
<!-- *********************************** -->
<section class="galerie bg-lightGrey">
	<div class="container">
		<h1 class="contentTitle">
			Quelques-unes<br /> de <span class="text-orange">nos</span> réalisations
		</h1>

		<div class="row">
			<!-- Image 1 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-1-xl.jpg" data-lightbox="galerie" data-title="FGI est la radio du festival de la guitare d’Issoudun, l’équipe MédiaComs raconte le festival en ligne et sur la bande FM.">
						<figcaption>
							<h3>Une radio</h3>
							<h4>temporaire sur un festival</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-1-xs.jpg" alt="FGI est la radio du festival de la guitare d’Issoudun, l’équipe MédiaComs raconte le festival en ligne et sur la bande FM">
				</figure>
			</div>
			<!-- Fin image 1 -->
			<!-- Image 2 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-2-xl.jpg" data-lightbox="galerie" data-title="Pour diffuser en ligne des informations à l’ensemble des collaborateurs au même moment dans le monde entier.">
						<figcaption>
							<h3>Une radio</h3>
							<h4>temporaire d’entreprise</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-2-xs.jpg" alt="Pour diffuser en ligne des informations à l’ensemble des collaborateurs au même moment dans le monde entier">
				</figure>
			</div>
			<!-- Fin image 2 -->
			<!-- Image 3 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-3b-xl.jpg" data-lightbox="galerie" data-title="MédiaComs intervient pour répondre aux besoins des organisateurs de salons et événements, ici pour un salon du mariage.">
						<figcaption>
							<h3>Au service</h3>
							<h4>des salons et événements</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-3b-xs.jpg" alt="MédiaComs intervient pour répondre aux besoins des organisateurs de salons et événements, ici pour un salon du mariage">
				</figure>
			</div>
			<!-- Fin image 3 -->
			<!-- Image 4 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-4-xl.jpg" data-lightbox="galerie" data-title="MédiaComs intervient pour répondre aux besoins des organisateurs de salons et événements, ici un reportage photo salle Wagram.">
						<figcaption>
							<h3>Au service</h3>
							<h4>des salons et événements</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-4-xs.jpg" alt="MédiaComs intervient pour répondre aux besoins des organisateurs de salons et événements, ici un reportage photo salle Wagram">
				</figure>
			</div>
			<!-- Fin image 4 -->
			<!-- Image 5 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-5-xl.jpg" data-lightbox="galerie" data-title="Un studio temporaire pour réaliser, en public, une émission événementielle délocalisée à diffuser en direct depuis n’importe quel lieu.">
						<figcaption>
							<h3>Une émission</h3>
							<h4>de radio délocalisée</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-5-xs.jpg" alt="Un studio temporaire pour réaliser, en public, une émission événementielle délocalisée à diffuser en direct depuis n’importe quel lieu">
				</figure>
			</div>
			<!-- Fin image 5 -->
			<!-- Image 6 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-6-xl.jpg" data-lightbox="galerie" data-title="Voilà une histoire qui dure depuis 1981, sur son CV (entre autres) : les correspondances de la rédaction d’Europe 1 depuis presque 30 ans.">
						<figcaption>
							<h3>Laurent Garofalo</h3>
							<h4>et la radio</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/radio/galerie-radio-6-xs.jpg" alt="Voilà une histoire qui dure depuis 1981, sur son CV (entre autres) : les correspondances de la rédaction d’Europe 1 depuis presque 30 ans">
				</figure>
			</div>
			<!-- Fin image 6 -->
		</div>
		<!-- Fin row -->
	</div>
	<!-- Fin container -->
</section>


<!-- ************* Les liens ************* -->
<!-- ************************************ -->
<section class="nosLiens">
	<div class="container">
		<h2 class="contentTitle">Nos liens <span class="text-orange">préférés</span></h2>
		<div class="row align-items-center">
			<div class="col-6 col-md-3 text-center">
				<a href="http://www.studioradiomobile.com"><img class="logoLien" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logos-liens/studioradiomobile.png" alt="Logo Studio Radio Mobile" ></a>
			</div>
			<div class="col-6 col-md-3 text-center">
				<a href="http://www.estacom.fr"><img class="logoLien" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logos-liens/estacom.png" alt="Logo estacom" ></a>
			</div>
			<div class="col-6 col-md-3 text-center">
				<a href="http://spheredigitale.fr"><img class="logoLien" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logos-liens/spheredigitale.png" alt="Logo Sphère Digitale" ></a>
			</div>
			<div class="col-6 col-md-3 text-center">
				<a href="http://www.jeunesocentre.fr"><img class="logoLien" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logos-liens/joc.png" alt="Logo JeunesOcentre" ></a>
			</div>
		</div>
	</div>
</section>

</main>


<?php get_footer(); ?>