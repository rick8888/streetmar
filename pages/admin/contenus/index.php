
<?php 
  
   $conts=App::getInstance()->getTable('Contenus')-> contenu();
?>
<div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Administration Contenus Pages</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="?page=contenus.add"type="button" class="btn btn-sm btn-primary btn-create">add new</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
              <table id="example" class="table table-striped table-bordered table-list" cellspacing="0" width="100%">
          <thead>
              <tr>
                   <td class="text-center">#</td>
                   <td class="text-center"><strong>titre</strong></td>
                   <td class="text-center"><strong>contenu</strong></td>
                   <td class="text-center"><strong>Page</strong></td>
                   <td><strong>Action</strong></td>
              </tr>

          </thead>
          <tbody class="searchable">
              <?php foreach($conts as $cont): ?>

                 <tr>
                      <td class="text-center"><?= $cont->id;?></td>
                      <td class="text-center"><?= $cont->titre;?></td>
                      <td class="text-center"><?= $cont->contenu;?></td>
                      <td class="text-center"><?= $cont->libelle;?></td>
                      <td align="center">
                        <a href="?page=contenus.edit&id=<?= $cont->id; ?>" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                      </td>
                 </tr>

              <?php endforeach;?>
          </tbody>
    </table>

</div>
</div>
</div>
