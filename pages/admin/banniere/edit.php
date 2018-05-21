<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $ban=$App->getTable('Banniere')->find($_GET['id']);
  $id=$_GET['id'];

  
  if(empty($app)){
      $App->notfound();
  }
  else
  {
      if(isset($_POST['send']))
      {
       
?>     <?php
          if(isset($_FILES['pic']))
          {
                 
                 $img = addslashes($_FILES['pic']['tmp_name']);
                 $image=file_get_contents ($img);
                 $App->getTable('Banniere')->update($_GET['id'],['image'=>base64_encode($image),
                                                          'titre_accroche'=>$_POST['titre1'],
                                                          'titre_detail'=>$_POST['titre2']]);
       ?>
       <div class="col-sm-offset-4 col-sm-4">
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> votre banniere a bien ete modifiee
            </div>
       </div>
<?php 
          }else echo"veuiller choisir une Image";
        }
         else
         {
    
          $form->data=['titre1'=>$ban->titre_accroche,
                       'titre2'=>$ban->titre_detail
                 ];
      
         }
}

  
?>

<div class="col-sm-offset-4 col-sm-4">
        <h1>Edition Banniere</h1>
        <form enctype="multipart/form-data" method="post">
            
            <?= $form->input('titre1','text','form-control'); ?>
            <br>
            <?= $form->input('titre2','text','form-control'); ?>
            <br>
            <label class="control-label">Picture</label>
            <input  type="file" class="file" name="pic" value="hfhdhdhdh">
            <br>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>