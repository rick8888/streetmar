
<?php 
  
   $cats=App::getInstance()->getTable('Category')->all();
?>
<div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Administration Categories</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="?page=category.add"type="button" class="btn btn-sm btn-primary btn-create">add new</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
              <table id="example" class="table table-striped table-bordered table-list" cellspacing="0" width="100%">
          <thead>
              <tr>
                   <td class="text-center">#</td>
                   <td class="text-center">Categorie</td>
                   <td align='center'>Action</td>
              </tr>

          </thead>
          <tbody>
              <?php foreach($cats as $cat): ?>

                 <tr>
                      <td class="text-center"><?= $cat->id;?></td>
                      <td class="text-center"><?= $cat->categorie;?></td>
                      <td align="center">
                         <a class="btn btn-default" href="?page=category.edit&id=<?= $cat->id; ?>"><em class="fa fa-pencil"></em></a>
                        <a class="btn btn-danger" href="?page=category.delete&id=<?= $cat->id; ?>"><em class="fa fa-trash"></em></a>
                      </td>
                 </tr>

              <?php endforeach;?>
          </tbody>
    </table>

</div>
</div>
</div>
