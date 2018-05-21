<?php 
   $medias=App::getInstance()->getTable('Medias')->medias();   
?>
<div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Administration Pages</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="?page=medias.add"type="button" class="btn btn-sm btn-primary btn-create">add</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
              <table id="example" class="table table-striped table-bordered table-list" cellspacing="0" width="100%">
          <thead>
              <tr>
                   <td class="text-center">#</td>
                   <td class="text-center"><strong>Big Image Location</strong></td>
                   <td class="text-center"><strong>Small Image Location</strong></td>
                   <td class="text-center"><strong>adresse video</strong></td>
                   <td class="text-center"><strong>Service</strong></td>
                   <td class="text-center"><strong>Client</strong></td>
                   <td class="text-center"><strong>Page</strong></td>
                   <td>Action</td>
              </tr>

          </thead>
          <tbody class="searchable" id="myTable">
              <?php foreach($medias as $media): ?>

                 <tr>
                      <td class="text-center"><?= $media->id;?></td>
                      <td class="text-center">
                          <?= '<img height="80" weidht=80 src="data:image;base64,'.$media->image.'">';?>
                          
                      </td>
                      <td class="text-center">
                          <?= '<img height="80" weidht=80 src="data:image;base64,'.$media->image_small.'">';?>
                      </td>
                      <td class="text-center"><?= $media->adresse_video;?></td>
                      <td class="text-center"><?= $media->subcategory;?></td>
                      <td class="text-center"><?= $media->nom;?></td>
                      <td class="text-center"><?= $media->libelle;?></td>
                      <td align="center">
                        <a href="?page=medias.edit&id=<?= $media->id; ?>" class="btn btn-primary"><em class="fa fa-pencil"></em></a>
                     </td>
                 </tr>

              <?php endforeach;?>
          </tbody>
    </table>

</div>
</div>
</div>