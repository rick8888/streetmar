
<?php 
  
   $dbs=App::getInstance()->getTable('Banniere')->banniere();

?>
<div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Administration Contenus Pages</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="?page=ban.add"type="button" class="btn btn-sm btn-primary btn-create">add new</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
              <table id="example" class="table table-striped table-bordered table-list" cellspacing="0" width="100%">
          <thead>
              <tr>
                   <td class="text-center">#</td>
                   <td class="text-center">Image</td>
                   <td class="text-center">Titre Accroche</td>
                   <td class="text-center">Accroche Detail</td>
                   <td class="text-center">Page</td>
                   <td>Action</td>
              </tr>

          </thead>
          <tbody>
              <?php foreach($dbs as $db): ?>

                 <tr>
                      <td class="text-center"><?= $db->id;?></td>
                      <td class="text-center">
                          <?= '<img height="80" weidht=80 src="data:image;base64,'.$db->image.'">';?>   
                      </td>
                      <td class="text-center"><?= $db->titre_accroche;?></td>
                      <td class="text-center"><?= $db->titre_detail;?></td>
                      <td class="text-center"><?= $db->libelle;?></td>
                
                     <td align="center">
                        <a href="?page=ban.edit&id=<?= $db->id; ?>" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                      </td>
                 </tr>

              <?php endforeach;?>
          </tbody>
    </table>

</div>
</div>
</div>
