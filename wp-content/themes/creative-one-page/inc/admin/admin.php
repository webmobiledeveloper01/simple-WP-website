<?php
//about theme info
add_action( 'admin_menu', 'creative_one_page_abouttheme' );
function creative_one_page_abouttheme() {    	
	add_theme_page( esc_html__('About Creative One Page Theme', 'creative-one-page'), esc_html__('About Creative One Page Theme', 'creative-one-page'), 'edit_theme_options', 'creative_one_page_guide', 'creative_one_page_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function creative_one_page_admin_theme_style() {
   wp_enqueue_style('creative-one-page-custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'creative_one_page_admin_theme_style');

//guidline for about theme
function creative_one_page_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>

<div class="wrapper-info">
	<div class="header">
	 	<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="<?php the_title(); ?> post thumbnail image">
	 	<h2><?php esc_html_e('Welcome to Advance Creative One Page Theme', 'creative-one-page'); ?></h2>
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'creative-one-page'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( CREATIVE_ONE_PAGE_BUY_NOW ); ?>" target='_blank'><?php esc_html_e('Buy Now', 'creative-one-page'); ?></a>
			<a href="<?php echo esc_url( CREATIVE_ONE_PAGE_LIVE_DEMO ); ?>" target='_blank'><?php esc_html_e('Live Demo', 'creative-one-page'); ?></a>
			<a href="<?php echo esc_url( CREATIVE_ONE_PAGE_PRO_DOC ); ?>" target='_blank'><?php esc_html_e('Pro Documentation', 'creative-one-page'); ?></a>
		</div>
	</div>
	<div class="button-bg">
		<button role="tab" class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'creative-one-page'); ?></button>
		<button role="tab" class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'creative-one-page'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'creative-one-page'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( CREATIVE_ONE_PAGE_FREE_DOC ); ?>" target='_blank'><?php esc_html_e('Documentation', 'creative-one-page'); ?></a>
			<a href="<?php echo esc_url( CREATIVE_ONE_PAGE_CONTACT ); ?>" target='_blank'><?php esc_html_e('Support', 'creative-one-page'); ?></a>
			<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" target='_blank'><?php esc_html_e('Start Customizing', 'creative-one-page'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'creative-one-page'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'creative-one-page'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'creative-one-page'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'creative-one-page'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="<?php the_title(); ?> post thumbnail image">	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="<?php the_title(); ?> post thumbnail image">	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'creative-one-page'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'creative-one-page'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>
	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'creative-one-page'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( CREATIVE_ONE_PAGE_BUY_NOW ); ?>" target='_blank'><?php esc_html_e('Buy Now', 'creative-one-page'); ?></a>
			<a href="<?php echo esc_url( CREATIVE_ONE_PAGE_LIVE_DEMO ); ?>" target='_blank'><?php esc_html_e('Live Demo', 'creative-one-page'); ?></a>
			<a href="<?php echo esc_url( CREATIVE_ONE_PAGE_PRO_DOC ); ?>" target='_blank'><?php esc_html_e('Pro Documentation', 'creative-one-page'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.png" alt="<?php the_title(); ?> post thumbnail image">
	  			<p><?php esc_html_e( 'One page WordPress theme is your exemplary choice for business and with this clean, user friendly and multipurpose theme, you can create an exemplary website for the corporate company or create a portfolio, personal website or blog. This theme is beautiful, flexible as well as professional apart from having personalization options as well as a testimonial section thus making it fit for the landing pages as well as ecommerce businesses. One page WordPress theme is associated with banners, Call to Action [CTA] button and besides this it is social media integrated and SEO friendly with optimised codes making it a perfect fit for various agencies related to heavy industries as well as the construction businesses. It is accompanied with the clean code besides having faster page load time and these features are good in case of business related to photography, web agency, restaurant, travel, music events and much more.

One page WordPress theme is good for lawyers as well as law firms and is accompanied with stunning features. It is bootstrap based and has shortcodes associated with it and above all it is minimal. It is also light weight and accompanied with the WordPress customizer besides being robust. By the end of the day, it is simple and adaptable making it fit for almost all the businesses and startups. It is good for the online shops and the credit goes to its complete integration with the WooCommerce plugin. Premium one page WordPress theme is completely customizable and is accompanied with a clean design. It comes with the dynamic loading technologies as well as distinct content block modules. It is totally functional and to craft the one page website becomes quite easy. There is no requirement of coding knowledge. It has done excellently well as per the global customer reviews since its inception in online market.', 'creative-one-page' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'creative-one-page' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates, HD Images and Video display', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display, Tagline, Logo', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On., Events, Achievements and So On.', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'creative-one-page' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'creative-one-page' ); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;
	}
</script>

<?php } ?>