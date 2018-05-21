
<?php 
  
   $subcats=App::getInstance()->getTable('subCategory')->all();
?>
<div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Administration Services</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="?page=subcategory.add"type="button" class="btn btn-sm btn-primary btn-create">add new</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
              <table id="example" class="table table-striped table-bordered table-list" cellspacing="0" width="100%">
          <thead>
              <tr>
                   <td class="text-center">#</td>
                   <td class="text-center">Sub-categorie</td>
                   <td class="text-center">categorie</td>
                   <td align='center'>Action</td>
              </tr>

          </thead>
          <tbody>
              <?php foreach($subcats as $subcat): ?>

                 <tr>
                      <td class="text-center"><?= $subcat->id;?></td>
                      <td class="text-center"><?= $subcat->subcategory;?></td>
                      <td class="text-center"><?= $subcat->category_id;?>

                     <td align="center">
                         <a class="btn btn-default" href="?page=subcategory.edit&id=<?= $subcat->id; ?>"><em class="fa fa-pencil"></em></a>
                        <a class="btn btn-danger" href="?page=subcategory.delete&id=<?= $subcat->id; ?>"><em class="fa fa-trash"></em></a>
                      </td>
                 </tr>

              <?php endforeach;?>
          </tbody>
    </table>

</div>
</div>
</div>
