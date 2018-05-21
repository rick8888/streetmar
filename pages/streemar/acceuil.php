    <?php

      $bans=App::getInstance()->getTable('Banniere')->BanAll('acceuil');
    
      //$video=App::getInstance()->getTable('Medias')->ext('id','adresse_video',1);//avec 1 (ici page acceuil)numero page

    ?>
	<div class="slider" style="margin-top:137px">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
                    <?php
                    $act='active';
                    $i=0;
                    foreach($bans as $ban)
                    {
                        if($i<3)
                        {
                            
                    ?>
                    
                    
					<div class="item <?=$act?>">						
						<!--<img src="i/img/1.jpg" class="img-responsive" alt="">-->
                         <?= '<img  src="data:image;base64,'.$ban->image.'">';?>
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2 ><span><?= $ban->titre_accroche;?></span></h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									<p style="background-color:#01B3C5; font-size:27px"><?=  $ban->titre_detail; ?></p>
								</div>
							</div>
							<!--<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										<button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div>
									<div class="form-group">
										<button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div>
								</form>
							</div>-->
						</div>
				    </div>
			        <?php
                        }
                        $act='';
                        $i+=1;
                    }
                    ?>
 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
	<!-- end slider -->	

	
	<section id="content">
		<div class="container">
		<div class="row">
        <div class="col-lg-12">
				
                <div class="col-lg-6">
                    <ul class="recent">
                        <li>
                            <h6 class="pull-right"><a href="#" style="color:#01B3C5;font-variant: small-caps">Notre Experience</a></h6>
                            <div class="pull-right"><p>Forte de ses nombreuses expériences STREEMAR COM met à votre disposition son savoir-faire pour organiser  votre campagne. Conseil, expérience et créativité s’allient pour satisfaire vos envies.Forte de ses nombreuses expériences STREEMAR COM met à votre disposition son savoir-faire pour organiser  votre campagne. Conseil, expérience et créativité s’allient pour satisfaire vos envies.</p></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="recent">
                        <li>
                            <h6 class="pull-left"><a href="#" style="color:#01B3C5;font-variant: small-caps">Vos Attentes</a></h6>
                            <p class="pull-left">Nous vous proposons des solutions sur-mesure. Cocktail, location, panomobile, invitation tout est personnalisable. Nous travaillons main dans la main pour trouver ensemble des solutions adaptées.Forte de ses nombreuses expériences STREEMAR COM met à votre disposition son savoir-faire pour organiser  votre campagne. Conseil, expérience et créativité s’allient pour satisfaire vos envies.</p>
                        </li>
                    </ul>
                </div>
        </div>		
        </div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
                <div class="text-center" style="margin-bottom: 65px"><h4 style="color:#01B3C5;font-variant: small-caps">Nos Services</h4></div>
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">								
								<div class="icon">
				      <!--<a href="streetmarketing.html" style="color: black"><i class="fa fa-desktop fa-5x"></i></a>-->
                                    <a href="streetmarketing.html" style="color: black"><img src="public/img/selection/sliderss/street-01.png" alt="vehiculemobile" style="height: 80px"></a>                                                                            
								</div>
								<h4>Street Marketing</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">								
								<div class="icon">
								<!--<a style="color: black" href="evenementiel.html"><i class="fa fa-file-code-o fa-5x"></i></a>-->
                                <a href="eventCategories.html" style="color: black"><img src="public/img/selection/sliderss/event-01.png" alt="vehiculemobile" style="height: 80px"></a>
								</div>
								<h4>Evenementiel</h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">								
								<div class="icon">
                                    <a href="printCategories.html" style="color: black"><img src="public/img/selection/sliderss/print-01.png" alt="vehiculemobile" style="height: 80px"></a>
                                    <!--<a style="color: black" href="evenementiel.html"><i class="fa fa-paper-plane-o fa-5x"></i></a>-->
                                    <!--<a style="color: black" href="evenementiel.html"><i class="fa fa-paper-plane-o fa-5x"></i></a>-->
								</div>
								<h4>Creation et Impression</h4>
							</div>
						</div>
					</div>
				    
				</div>
            </div>
        <!-- debut Nos recents traveaux-->

        <!-- fin Nos recents traveaux-->
        <div class="container">
		<div class="row">
			<div class="col-lg-12">
                <h4 class='text-center' style="margin-bottom: 45px; color:#01B3C5; font-variant: small-caps">Notre Entreprise</h4>
				<div class="row">
                <div class="col-sm-6 col-lg-6">
				    <div class="post-video">

                        <div class="video-container">
								<video width="520" controls>
                                  <source src="public/img/selection2/street.mp4" type="video/mp4">
                                  <source src="mov_bbb.ogg" type="video/ogg">
                                  Your browser does not support HTML5 video.
                                </video>
                        </div>
                    </div>
                </div>
				
				<div class="col-sm-6 col-lg-6">
                      <div style="margin-top:0px">
                        <p><strong>Meliore inciderint qui ne. Suas cotidieque vel ut lobortis reformida</strong></p>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate
						</p>
						<p>
						Mel explicari adipiscing consectetuer no, no mel apeirian scripserit repudiandae, ad assum mundi scribentur eam. Graecis offendit phaedrum eu his, eius ferri quidam eos ad, quis delenit vel ei. Alia modus facete te eos, eu tation appellantur per  
                        Alia modus facete te eos, eu tation appellantur per  Alia modus facete te eos, eu tation appellantur per  Alia modus facete te eos, eu tation appellantur per  Alia modus facete te eos,
                        Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate
						</p>
                        
                    </div>
						
                        
				</div>
            </div>
			</div>
		</div>
		</div>
                
        </div>
		</div>
		
		
		<!-- clients -->
		<div class="container">
				<div class="row">
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" style="padding-top:25px"src="public/img/clients/marjane.png" class="img-responsive"/>
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="public/img/clients/cityclub.png" class="img-responsive" />
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="public/img/clients/omran.png" class="img-responsive" />
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="public/img/clients/audit.png" class="img-responsive" />
								</div>									
								
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="public/img/clients/carrefour.png" class="img-responsive" />
								</div>									
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="public/img/clients/emsi.png" class="img-responsive" />
								</div>	

				</div>
		</div>
	
	</section>
	