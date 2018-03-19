<?php
/**
 * Template Name: Developer
 */

get_header(); ?>

	

<?php while ( have_posts() ) : the_post(); ?>
	<div class="row backgroud_image large-collapse">
		<div class="inner_banner">
        	<h1>Arendaja</h1>
		</div>
        
        <div class="small-12 large-7 columns">
        	 <div class="developer_kamos">
                <h2>Kaamos Group</h2>
                <p>ammsaare Ärikeskuse arendaja Kaamos Group on 2002. aastal<br>kodumaise kapitaliga asutatud ettevõte, mis toetub traditsiooni<br>kuid on alati avatud innovaatilistele lahendustele ja lähtub<br>põhimõttest, et iga rajatud hoone oleks vaatamisväärsus ning<br>sulanduks harmooniliselt keskkonda.
</p>
                <p>ammsaare Ärikeskuse arendaja Kaamos Group on 2002. aastal<br>kodumaise kapitaliga asutatud ettevõte, mis toetub traditsiooni<br>kuid on alati avatud innovaatilistele lahendustele ja lähtub<br>põhimõttest, et iga rajatud hoone oleks vaatamisväärsus ning<br>sulanduks harmooniliselt keskkonda.
</p>
		<div class="company_improvement_developer">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/logo_developer_page.png" alt="">
                <span>Kaamos Group arendused:</span>
                <ul>
                	<li><a href="#">www.kaamos.ee</a></li>
                    <li><a href="#">www.kaamos.ee/rohu</a></li>
                    <li><a href="#">www.kaamos.ee/jaama</a></li>
                    <li><a href="#">www.kaamos.ee/hobemetsa</a></li>
                </ul>
            </div>
          </div>
       </div>
        <div class="small-12 large-5 columns">
        	<div class="gallery_endla">
            	<h2>Endla 16 Ärimaja</h2>
                <p>Lisaks Tammsaare Ärikeskusele pakub Kaamos<br>Group erinevaid üüripindu kesklinnas Endla 16<br>Ärimajas. Väga hea asukohaga ja mugavate<br>parkimisvõimalustega Endla tänava<br>büroohoones on enam kui 4000 m2<br>kontoripinda, kvaliteetne lõunarestoran ja<br>95 parkimiskohta.<br> 
Paljud üüripinnad on loodud sisekujunduse<br>uusimaid trende silmas pidades. 2016 a. suvel<br>alustatakse Endla 16 Ärimaja fassaadi täieliku<br> renoveerimisega, uuenenud büroohoone<br>avaneb uutele üürnikele juba 2017 a. kevadel.
</p>
                <span><strong>Lisainfo:</strong> Priit-Risto Lunden lunden@kaamos.ee</span>  
             </div>
                      <img class="gallery_bottom_image" src="<?php echo get_template_directory_uri(); ?>/images/devloper_right_bottom_image.png" alt="">

        </div>
	</div>
    
	
<?php endwhile; // End of the loop.?>


<?php
//get_sidebar();
get_footer();
