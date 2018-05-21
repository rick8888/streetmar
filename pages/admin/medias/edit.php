<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $app=$App->getTable('Medias')->find($_GET['id']);

  $clients=$App->getTable('Client')->extrac('id','nom');
  $id=$_GET['id'];
  if(empty($app)){
      $App->notfound();
  }else{
      if(!empty($_POST)){     
?>     <?php
          $App->getTable('Medias')->update($_GET['id'],['image'=>$_POST['jpg'],'image_small'=>$_POST['png'],'adresse_video'=>$_POST['video']]);
       ?>
       <div class="col-sm-offset-4 col-sm-4">
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> votre page a ete modifiee
            </div>
       </div>
<?php   
  }else{
    
     $form->data=['image'=>$app->image,'image_small'=>$app->image_small,
                  'video'=>$app->adresse_video,'client'=>$app->client_id];
      
  }
  }
  
?>

<div class="col-sm-offset-4 col-sm-4">
        <h1>Edition Medias</h1>
        <form method="post">
           <div class="form-group">
            <label class="control-label">Video:</label>
            <?= $form->input('video','text','form-control'); ?>
            <label class="control-label">Big Picture:</label>
            <input  type="file" class="file" name="jpg">
            <label class="control-label">Small Picture:</label>
            <input  type="file" class="file" name="png">
            <br>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>