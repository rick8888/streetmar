<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $cats=$App->getTable('Category')->extrac('id','categorie');
  $subcat=$App->getTable('Subcategory');
  if(isset($_POST)){
      
      if(!empty($_POST['subcategorie']) and !empty($_POST['categorie']))
      {
         
         if(!$subcat->existId(['subcategory'=>$_POST['subcategorie']]))
         {
          $CreateCat=$subcat->create(['subcategory'=>$_POST['subcategorie'],
                                      'category_id'=>$_POST['categorie']]);
      
          if($CreateCat)
          {

    ?>
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong> Sub-Categorie creee.
                    </div>
                </div>

<?php
           }else echo "<div class='alert alert-danger'>Echec</div>";
         }else
         {
             ?>
              <div class="col-sm-offset-4 col-sm-4">
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Attention!</strong> Cette sub-Categorie existe Deja.
                    </div>
                </div>
             <?php
         }
          
      }   
      
  }
  
  
?>
<div class="col-sm-offset-4 col-sm-4">
        <h1>Add Sub-Categorie</h1>
        
        <form method="post">
           <div class="form-group">
            <?= $form->input('subcategorie','text','form-control'); ?>
            <?= $form->select('categorie',$cats); ?>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>