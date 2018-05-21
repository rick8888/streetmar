<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $app=$App->getTable('Medias')->find($_GET['id']);
  $subcats=$App->getTable('Subcategory')->extrac('id','subcategory');
  $clients=$App->getTable('Client')->extrac('id','nom');
  $id=$_GET['id'];
  if(empty($app)){
      $App->notfound();
  }else{
      if(!empty($_POST)){     
?>     <?php
          $App->getTable('Medias')->update($_GET['id'],['image'=>$_POST['jpg'],'image_small'=>$_POST['png'],'client_id'=>$_POST['client'],'subcategory_id'=>$_POST['subcategorie']]);
       ?>
       <div class="col-sm-offset-4 col-sm-4">
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> votre SubCategories a ete modifiee
            </div>
       </div>
<?php   
  }else{
    
     $form->data=['image'=>$app->image,'image_small'=>$app->image_small];
      
  }
  }
  
?>

<div class="col-sm-offset-4 col-sm-4">
        <h1>Edition Subcategorie</h1>
        <form method="post">
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">link 1</span>
              <input type="text" class="form-control"  aria-describedby="basic-addon1" name="jpg"value="<?=$form->getIndex('image')?>"</inpu>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">link 2</span>
              <input type="text" class="form-control" aria-describedby="basic-addon1" name="png" value="<?=$form->getIndex('image_small')?>">
            </div>
            <br>
            <?= $form->select('subcategorie',$subcats); ?>
            <br>
            <?= $form->select('client',$clients); ?>
            <br>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>