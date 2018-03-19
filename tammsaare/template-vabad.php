<?php
/**
 * Template Name: Vabad
 */

get_header(); ?>

	

<?php while ( have_posts() ) : the_post(); ?>
	<div class="row backgroud_image large-collapse">
		<div class="inner_banner">
        	<h1>Vabad pinnad</h1>
		</div>
    </div>
        <div class="row vabad_main_content">
              <div class="small-12 medium-4 large-4 columns">
                <div class="vabad_left_section">
                        <h2>Büroopind	60 m2</h2>
                        <span><strong>Asukoht</strong>3 korrus</span>
                        <span><strong>Pind vabaneb </strong>30.juunil 2016</span>
                </div>
                <div class="vabad_left_section vabad_tabs clearfix">
                 	<div class="rounded_tab"><a href="#">And</a></div>
                    <div class="rounded_tab rounded_tab1"><a href="">Krõõt</a></div>
                    <div class="rounded_tab rounded_tab2"><a href="#">Pearu</a></div>
                    
                </div>
                <div class="vabad_left_section">
                        <h2>Büroopind	60 m2</h2>
                        <span><strong>Asukoht</strong>3 korrus</span>
                        <span><strong>Pind vabaneb </strong>30.juunil 2016</span>   
                </div>
               <div class="vabad_left_section vabad_tabs clearfix">
                 	<div class="rounded_tab"><a href="#">And</a></div>
                    <div class="rounded_tab rounded_tab1"><a href="">Krõõt</a></div>
                    <div class="rounded_tab rounded_tab2"><a href="#">Pearu</a></div>
                    
                </div>
              </div>
              <div class="small-12 medium-4 large-4 columns">
              	<div class="image_download">
                	<a class="downloadable_image" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/middle_-section-Image1.jpg"></a>
                	<a style="background: url(<?php echo get_template_directory_uri(); ?>/images/download_arrow.jpg) no-repeat bottom center;" class="download_arrow" href="#">Büroopinna joonis pdf</a>
                </div>
            	 <div class="image_download">
                	<a class="downloadable_image" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/middle_-section-Image1.jpg"></a>
                	<a style="background: url(<?php echo get_template_directory_uri(); ?>/images/download_arrow.jpg) no-repeat bottom center;" class="download_arrow" href="#">Büroopinna joonis pdf</a>
                </div>
              </div>
              <div class="small-12 medium-4 large-4 columns">
              	<div class="contact">
                	<h2 class="contact_heading">Anna oma soovist meile teada </h2>
                    <div class="contact_from">
                    	<form action="contact_form.asp">
                          <input type="text" name="name" placeholder="*Nimi"><br>
                          <input type="text" name="tele" placeholder="Telefon"><br>
                          <input type="text" name="e-mail" placeholder="*E-posti aadress"><br>
                          <input type="text" name="Töötaj" placeholder="Töötajate arv"><br>
                          <input type="text" name="Soovitav" placeholder="Soovitav sissekolimise aeg"><br>
                          <textarea placeholder="*Märkused"></textarea> 
                           <a href="#"><em>SAADA</em></a>
                           <span>*Kohustuslikud väljad</span>
						</form>  
                    </div>
                </div>
                <div class="more">
                	<h2>Ei leidnud sobivat üüripinda?</h2>
                    <span>Tutvu lisaks Endla 16 Ärimaja<br>võimalustega<a href="#">SIIN >></a></span>
                </div>
              </div>
		</div>
        
    
	
<?php endwhile; // End of the loop.?>


<?php
//get_sidebar();
get_footer();


