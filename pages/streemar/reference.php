<?php
    $clients=App::getInstance()->getTable('Client')->clients();
    $customs=App::getInstance()->getTable('Client')->distinct();

?>
<section id="content" style="margin-top:80px">
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="margin-top:20px">
				
				<div id="filters-container" class="cbp-l-filters-button">
					<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All<div class="cbp-filter-counter"></div></div>
                    <?php
                        foreach($customs as $custom)
                        {
                            
                    ?>
					     <div data-filter=".<?= $custom->nom ?>" class="cbp-filter-item"><?= $custom->nom ?><div class="cbp-filter-counter"></div></div>
					
                    <?php
                            
                            
                        }
                    ?>
				</div>
				

				<div id="grid-container" class="cbp-l-grid-projects">
					<ul>
						<?php 
                          foreach($clients as $client)
                          {
                        ?>
                                     <li class="cbp-item <?= $client->nom ?>">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-defaultWrap">
                                                <?= '<img src="data:image;base64,'.$client->image_small.'" alt="">';?>
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body">

                                                        <a href="<?= $client->image_path ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="WhereTO App<br>by Tiberiu Neamu">Agrandir</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cbp-l-grid-projects-title">WhereTO App</div>
                                        <div class="cbp-l-grid-projects-desc">Web Design / Identity</div>
                                    </li>
                        <?php
                              
                          }
                        ?>
										
					</ul>
				</div>

			</div>
		</div>
	</div>
	</section>