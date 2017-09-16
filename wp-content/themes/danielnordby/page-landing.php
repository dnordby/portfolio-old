<?php /* Template Name: Home Page */ ?>
<div class="landing-wrapper">
	<section class="info-short row">
		<div class="col-xs-12 svg-wrapper">
			<?php get_template_part('templates/snippets/icon-info') ?>
			<h5>About Me</h5>
		</div>
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 info-short-text">
			<h1 class="h1">Hey, I'm Daniel. I live and work in NYC. I build responsive frontend website experiences with talented people for ecommerce, lifstyle, and corporate brands.</h1>
			<p class="h4"><a href="<?php echo( get_site_url() ); ?>/about">More about me</a></p>
		</div>
	</section>

	<section class="work row">
		<div class="col-xs-12 svg-wrapper">
			<?php get_template_part('templates/snippets/icon-work') ?>
			<h5>Work Highlights</h5>
		</div>
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 work-text">
			<p>The sites I build are in cooperation with amazing clients and designers. Here are a few of my favorites!</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 img-16-9 portfolio-link">
			<a href="http://greenwichlibrary.org" target="_blank">
				<img src="<?php echo(get_template_directory_uri()) ?>/assets/images/greenwich-library.png">
				<div class="overlay">
					<p class="h3">Greenwich Library
				</div>
			</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 img-16-9 portfolio-link">
			<a href="https://oomphhome.com" target="_blank">
				<img src="<?php echo(get_template_directory_uri()) ?>/assets/images/oomph-home.png">
				<div class="overlay">
					<p class="h3">oomph Home Furnishings</p>
				</div>
			</a>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 img-16-9 portfolio-link">
			<a href="https://where-mountains-meet.myshopify.com" target="_blank">
				<img src="<?php echo(get_template_directory_uri()) ?>/assets/images/where-mountains-meet.png">
				<div class="overlay">
					<p class="h3">where Mountains Meet</p>
				</div>
			</a>
		</div>
	</section>

	<section class="contact row">
		<div class="col-xs-12 svg-wrapper">
			<?php get_template_part('templates/snippets/icon-contact') ?>
			<h5>Get in Touch</h5>
		</div>
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1 contact-text">
			<p>Have questions, or want to get in touch to discuss your project? Shoot me an email and I'll be happy to get in touch to discuss your custom project!</p>
			<p class="h4"><a href="mailto:nordbydaniel@gmail.com">nordbydaniel@gmail.com</a></p>
		</div>
	</section>
</div>