<?php
    $imgs=App::getInstance()->getTable('Medias')->servicesmedias('crea');
    $conts=App::getInstance()->getTable('Contenus')->contenupage('crea');
    $bans=App::getInstance()->getTable('Banniere')->BanAll('crea');
?>

  </div>
    <div class="container">
    <div class="row text-center"><h3 style="color:#01B3C5; margin-top:180px; font-variant: small-caps;">Creation <em class="small"> le leader dans ce domaine </em></h3></div>
    <div class="row" style="margin-top:30px;margin-bottom:30px">
        <div id="col1" class="col-lg-6"style="margin-top:30px">
            <?php
            foreach($conts as $cont)
            {
         ?>
            <h4  style="color:#01B3C5;font-variant: small-caps"><?=$cont->titre?></h4>
            <p>
            <?=$cont->contenu?>
            </p>
            
        <?php
            }
        ?>
        </div>
     <div class="col-lg-6"> 
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
             
              <?php
                $i=0;
                $act='active';
                foreach($bans as $ban)
                {
                    
                    if($i<3)
                    {
              ?>
                      <div class="item <?=$act?>">
                          
                        <?= '<img src="data:image;base64,'.$ban->image.'">';?>

                      </div>
                
              <?php
                    }
                    $i+=1;
                    $act='';
                }
                
              ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
    
    </div>
        
    <div class="row">
        <div class="container">
            <h3 style="color:#01B3C5; font-variant: small-caps; margin-top:50px;margin-bottom:25px" class="text-center">Carcteristiques<em class="small"> nous vous servons </em></h3>
     
            <div id="grid-container" class="cbp-l-grid-projects">
                            <ul>
                                
                                <?php foreach($imgs as $img){ ?>
                                
                                <li class="cbp-item graphic">
                                    <div class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <?= '<img src="data:image;base64,'.$img->image_small.'" alt='.$img->subcategory.'>';?>
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <a href="<?= $img->image_path?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita" style="background-color:#01B3C5">Agrandir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cbp-l-grid-projects-title">Caracteristique:</div>
                                    <div class="cbp-l-grid-projects-desc">Image de Marque</div>
                                </li>
                                
                                
                                <?php } ?>
                            </ul>
            </div>
        </div>
    </div>
        
        
    <div class="row">
        <div class="col-lg-12" style="padding-top:20px; padding-bottom:30px">
            <div style="margin-left:500px">
              <a href="devis.html"><button type="button" class="btn btn-default btn-lg">Votre Devis Ici</button></a>
            </div>
        </div>
    </div>
</div>

