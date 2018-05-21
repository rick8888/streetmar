<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $app=$App->getTable('subcategory')->find($_GET['id']);
  $cats=$App->getTable('Category')->extrac('id','categorie');
  $id=$_GET['id'];
  if(empty($app)){
      $App->notfound();
  }else{
      if(!empty($_POST)){     
?>     <?php
          $App->getTable('subcategory')->update($_GET['id'],['subcategory'=>$_POST['subcategorie'],'category_id'=>$_POST['categorie']]);
       ?>
       <div class="col-sm-offset-4 col-sm-4">
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> votre SubCategories a ete modifiee
            </div>
       </div>
<?php   
  }else{
    
     $form->data=['subcategorie'=>$app->subcategory];
      
  }
  }
  
?>

<div class="col-sm-offset-4 col-sm-4">
        <h1>Edition Subcategorie</h1>
        <form method="post">
           <div class="form-group">
            <?= $form->input('subcategorie','text','form-control'); ?>
            <?= $form->select('categorie',$cats); ?>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>