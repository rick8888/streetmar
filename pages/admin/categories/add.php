<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $cat=$App->getTable('Category');

  if(isset($_POST)){
      
      if(!empty($_POST['categorie']))
      {
          
         if(!$cat->existId(['categorie'=>$_POST['categorie']]))
         {
          $CreateCat=$cat->create(['categorie'=>$_POST['categorie']]);
      
          if($CreateCat)
          {

    ?>
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong> Nouvelle Categorie creer.
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
                      <strong>Attention!</strong> Cette Categorie existe Deja.
                    </div>
                </div>
             <?php
         }
          
      }   
      
  }
  
  
?>
<div class="col-sm-offset-4 col-sm-4">
        <h1>Ajouter Categorie</h1>
        <form method="post">
           <div class="form-group">
            <?= $form->input('categorie','text','form-control'); ?>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>