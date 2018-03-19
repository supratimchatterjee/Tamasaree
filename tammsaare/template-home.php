<?php
/**
 * Template Name: Home
 */

get_header(); ?>

	

<?php while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="banner">
			<?php layerslider(1) ?>
		</div>
	</div>
	<!--block two-->
	<div class="row">
		<div class="intro-section">
			<div class="intro-content">
				<h1>Tammsaare Ärikeskus</h1>
				<p>Tammsaare Ärikeskus ühendab inspireeriva keskkonna mugavate ja põhjalikult läbimõeldud lahendustega. Siin on ruumi mõelda armastatud kirjaniku A. H. Tammsaare eeskujul avaralt, hoides tema romaanide tegelaskujudele sarnaselt kindlat sihti silme ees. Kolmeosalisest büroohoonest avanevad kaunid linnavaated, see on hoolikalt komponeeritud pisidetailide suurejooneline kooslus, mille eesmärgiks on pakkuda uudset töökeskkonda. 
				</p>
			</div>
		</div>
	</div>
	
	<!--block three-->
	<div class="row">
		<div class="third-section">
			<div class="tab-section">
				<div class="section-title">
					<h2>Keskuse lisaväärtused</h2>									
				</div>
				<div class="tab-container">
					<ul class="tabs custom-tabs" data-tabs id="block-tabs">
					  <li class="tabs-title is-active">
					  	<a href="#panel1" aria-selected="true">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/file-icon.png">
							<h4>Kaasaegne töökeskkond</h4>
							<span class="arrow-on-border"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-arrow.png"></span>
						</a>
					  </li>
					  <li class="tabs-title">
						<a href="#panel2" aria-selected="true">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/note-book-icon.png">
							<h4>Lisateenused</h4>
							<span class="arrow-on-border"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-arrow.png"></span>
						</a>
					  </li>
					  <li class="tabs-title">
						<a href="#panel3" aria-selected="true">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/locator-icon.png">
							<h4>Hea asukoht</h4>
							<span class="arrow-on-border"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-arrow.png"></span>
						</a>
					  </li>
					  <li class="tabs-title">
						<a href="#panel4" aria-selected="true">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cup-icon.png">
							<h4>Toitlustus</h4>
							<span class="arrow-on-border"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-arrow.png"></span>
						</a>
					  </li>
					</ul>	
				</div>
				<div class="section-content">
					<div class="" data-tabs-content="block-tabs">
					  <div class="tabs-panel is-active" id="panel1">
						<div class="row">
							<div class="large-6 columns no-padding">
								<div class="tab-content">
									<h5>Modernne ja esinduslik</h5>
									<p>Üürnikele ja klientidele mõeldes on loodud paindlik ja esinduslik töökeskkond, mis pakub uusimaid tehnilisi lahendusi ja emotsionaalseid arhitektuurielamusi. Kaarjale kirkale klaasfassaadile sekundeerib peegelklaas, hoonet liigendavad tagasiastetega trepikodade selged jõulised mahud.
									</p>
									<h5>Privaatne ja mugav</h5>
									<p>Liftid ja trepikojad on koondatud kolme majatorni vahele, eesmärgiga hajutada inimeste liikumist hoones ja tagada üürnikele privaatsus. Üürnike parkimismaja mahutab 600 autot ja on ühendatud klaasgaleriiga, mis viib otse peahoonesse.
									</p>
									<h5>Toetav ja paindlik</h5>
									<p>Keskuses on madalad kõrvalkulud ja arendajapoolne haldusmeeskond. Tööpäevadel on fuajees administraator, töövälisel ajal turvatöötaja. Vajadusel leiame partnerid koristus-ja kolimisteenustele. Oleme avatud ja loovad üürnike soovide ja erinevate lahenduste osas.
									</p>
								</div>
							</div>
							<div class="large-5 columns no-padding">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.png">
							</div>
						</div>
					  </div>
					  <div class="tabs-panel" id="panel2">
						<div class="row">
							<div class="large-6 columns no-padding">
								<div class="tab-content">
									<p>Keskuses on lai teenustevalik, mis muudab igapäevase töökeskkonna mugavamaks ja aitab säästa aega.</p>
									<ul>
										<li>erakliinik</li>
										<li>ilusalong</li>
										<li>lillepood</li>
										<li>keeltekool</li>
										<li>seminarikeskus</li>
										<li>kindlustus</li>
										<li>autopesula</li>
										<li>elektriautode rent koos ELMO teenusega</li>
									</ul>
								</div>
							</div>
							<div class="large-5 columns no-padding">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image2.png">
							</div>
						</div>
					  </div>
					  <div class="tabs-panel" id="panel3">
						<div class="row">
							<div class="large-6 columns no-padding">
								<div class="tab-content">
									<p>Asume kesklinna läheduses (kaugus linna keskpunktist ca 7 km), lisaks on 8-minutilise autosõidu kaugusel lennujaam ja bussijaam.</p>
									<p>Keskusesse on lihtne ligipääs nii auto kui ka ühistranspordiga, otse üle tee asub Tondi Selver ning Tondi Grill, 5-minutilise jalutuskäigu kaugusel Audentes Spordiklubi ning Tere </p>
								</div>
							</div>
							<div class="large-5 columns no-padding">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image3.png">
							</div>
						</div>
					  </div>
					  <div class="tabs-panel" id="panel4">
						<div class="row">
							<div class="large-6 columns no-padding">
								<div class="tab-content">
									<p>Krõõda majaosas, esimese korruse avaras fuajees, avaneb sissepääs Fazer Amica lõunarestorani. Majasisene restoran pakub mitmekesist menüüd, alates hommikueinest ja võimaldab keskusest lahkumata igapäevaselt meeldivas keskkonnas einestada.</p>
									<p>Restoran on avatud </p>
									<p>E–R 08:30–16:00</p>
									<div>
										<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-icon.png"></span>
										<span>Tutvu päevapakkumistega <br> Tammsaare Ärikeskuse Facebooki lehel</span>
									</div>
								</div>
							</div>
							<div class="large-5 columns no-padding">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image4.png">
							</div>
						</div>
					  </div>
					</div>									
				</div>
			</div>
		</div>
	</div>
	
	<!--block four-->
	<div class="row">
		<div class="testimonial">
			<div class="shadow"></div>
			<div class="row">
				<div class=" large-5 columns">
					<div class="author-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/client1.png">
					</div>
					<div class="author-info">
						<span class="name">Kristi Abakukk</span><br>
						<span class="position">Lorem ipsum dolor </span><br>
						<span class="company">sit amet</span>
					</div>
				</div>
				<div class=" large-7 columns">
					<div class="comment-block">
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in rutrum dolor. In pellentesque orci velit, vitae lobortis justo fringilla vel. Suspendisse potenti. Vivamus ac urna cursus, eleifend orci eu, dignissim nibh. Nunc cursus ornare diam, sit amet gravida tellus facilisis vel.
						<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote-icon.png"></span> 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--fifth block-->
	<div class="row tanents-plan-section large-collapse medium-collapse">
		<div class="large-6 columns">
			<div class="tanent-info">
				<h3>Majajuht</h3>
				<p>Tammsaare Ärikeskus on jaotatud kolmeks kaarjaks osaks.<br>
				 A. H.  Tammsaare romaani “Tõde ja õigus”<br>
				 ainulaadsete tegelaskujude auks oleme andnud majaosadele nimed – <strong>Andres, Krõõt ja Pearu</strong>.
Maja peasissepääs avaneb Krõõda majaosast. 
				</p>
			</div>
			<div class="tanent-type">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tanent-type.png" />
			</div>
			<div class="renter-log">
				<h3>Üürnikud</h3>
				<p>Keskuses on kokku 24 000 m2 pinda ja tegutseb ligikaudu 80 pikaajalist üürnikku. 
				</p>
				<a class="button bttn2">VAATA KÕIKI</a>
			</div>					
		</div>
		<div class="large-6 columns">
			<div class="background">
				
			</div>
		</div>
	</div>
	
	<!--block six-->
	<div class="row">
		<div class="sixth-section">
			<div class="sixth-section-content">
				<h1>Vabad pinnad</h1>
				<div class="row">
					<div class="large-7 columns">
						<div class="left-block">
							<p>Hetkel vabad pinnad puuduvad. Kui soovid üüripinda meie majas, või Endla 16 Ärimajas, võta palun ühendust Priit-Risto Lunden’iga telefonil 506 1608, e-maili teel lunden@kaamos.ee
							</p>
							<p>utvu Endla 16 Ärimaja üüripindadega  <a class="megenta" href="#">SIIN >></a>
							</p>
						</div>
					</div>
					<div class="large-5 columns">
						<a class="button bttn">VAATA TÄPSEMALT</a>
					</div>
				</div>
			</div>
		</div>
		<div class="gallery-section">
			<div class="row">
				<div class="large-7 columns end">
					<div class="sections">
						<h2>Galerii</h2>
					</div>
				</div>
				<div class="large-12 columns">
					<div class="image-gallery-block clearfix">
						<div class="grid-sizer"></div>
						<div class="image-frame image-frame2">
							<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"></a>
						</div>
						<div class="image-frame">
							<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/image5.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image5.png"></a>
						</div>
						<div class="image-frame image-frame3">
							<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"></a>
						</div>
						
						<div class="image-frame image-frame3">
							<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/gim.JPG"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gim.JPG"></a>
						</div>
						<div class="image-frame">
							<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"></a>
						</div>
						<div class="image-frame">
							<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/toit.jpg"></a>
						</div>
						<div class="image-frame image-frame3">
							<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"></a>
						</div>
						
						<div class="image-frame image-frame2">
							<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"></a>
						</div>
						<div class="image-frame">
							<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"></a>
						</div>
						<div class="image-frame">
							<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/room-one.png"></a>
						</div>
					</div>
				</div>
			</div>
			<di>
		</div>
	</div>
	
	<!--company location-->
	<div class="location-info-section">
		<div class="row">
			<div class="large-7 columns">
				<div class="sections type_l">
					<h2>Kuidas tulla</h2>
					<p>Tammsaare ärikeskus asub Tallinnas, aadressil Tammsaare tee 47.<br>
					 Järvevana tee – Tammsaare tee – Pärnu maantee liiklussõlm lihtsustab ligipääsu keskusesse.<br>
					 Asukoht on mugav ka ühistransporti kasutatavate töötajate ja klientide jaoks. 
					</p>
				</div>
			</div>
			<div class="large-5 columns">
				<div class="sections">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/MAP_1.png">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-7 columns">
				<div class="sections type_l">
					<h2>Ühistransport</h2>
					<div class="direction-info">
						<span class="travel-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bus-icon.png"></span>
						<p>A. H. Tammsaare tee, peatus „Sõjakooli" <bold> bussid nr 12, 13, 20, 20A</bold><br>
						<semibold>“Sõjakooli” peatuses väljudes kasutage sõidutee ületamiseks jalakäijate tunnelit.</semibold>
						</p>
						<p>Rahumäe tee, peatus „Tuisu" <bold>bussid nr 23, 61</bold><br> 
						Pärnu mnt, peatus „Virve“<bold> bussid 5, 18, 32, 36, 45, 57.</bold> 
						Peatusest liigu edasi mööda Virve, Alajaama ja Tuisu tänavat Tammsaare Ärikeskuseni.<br></p>
						<p>
						Busside sõidugraafikud leiad aadressilt <a href="#">peatus.ee</a><br></p>
					</div>
					<div class="direction-info">
						<span class="travel-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/train-icon.png"></span>
						<p>
						Rongipeatus “Järve”. Peatusest liigu edasi mööda<br> Alajaama ja Tuisu tänavat Tammsaare Ärikeskuseni.
						</p>
					</div>
				</div>
			</div>
			<div class="large-5 columns">
				<div class="sections type_ll">
					<h2>Parkimine</h2>
					<p>Kinnistule sissepääs on Tammsaare teelt ja Tuisu tänavalt. Maja ees on jalgrattaparkla ja avar 110-kohaline parkla, kus parkimine on klientidele <bold>2h tasuta.</bold></p>
				</div>
			</div>
		</div>
		<div class="row large-collapse">
				<div class="large-6 columns">
					<div class="primary-map">
						<a class="image-popup-vertical-fit" href="<?php echo get_stylesheet_directory_uri(); ?>/images/map_3.png">
							<div class="overlay">
								<span clas="plus"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-icon2.png"></span>
							</div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_3.png">
						</a>
						
					</div>
				</div>
				<div class="large-6 columns">
					<div class="secondary-map">
						<a class="image-popup-vertical-fit" href="<?php echo get_stylesheet_directory_uri(); ?>/images/map_3.png" >
							<div class="overlay">
								<span class="plus"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-icon2.png"></span>
							</div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map_3.png">
						</a>
						
					</div>
				</div>
		</div>
	</div>
	



<?php endwhile; // End of the loop.?>


<?php
//get_sidebar();
get_footer();
