<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $app=$App->getTable('Category')->find($_GET['id']);
  $id=$_GET['id'];
  if(empty($app)){
      $App->notfound();
  }else{
      if(!empty($_POST)){     
?>     <?php
          $App->getTable('Category')->update($_GET['id'],['categorie'=>$_POST['categorie']]);
       ?>
       <div class="col-sm-offset-4 col-sm-4">
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> votre gategories a ete modifier
            </div>
       </div>
<?php   
  }else{
    
     $form->data=['categorie'=>$app->categorie];
      
  }
  }
  
?>

<div class="col-sm-offset-4 col-sm-4">
        <h1>Edition du client</h1>
        <form method="post">
           <div class="form-group">
            <?= $form->input('categorie','text','form-control'); ?>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>