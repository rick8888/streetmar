<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $subcats=$App->getTable('Subcategory')->extrac('id','subcategory');
  $clients=$App->getTable('Client')->extrac('id','nom');
  $media=$App->getTable('Medias');
  if(isset($_POST['send'])){

      $page=$App->getTable('Page')->findbylibelle($subcats[$_POST['subcategorie']]);
        
      if(!empty($_POST['subcategorie']) and !empty($_POST['client']) and !empty($_FILES['pic1']) and !empty($_FILES['pic2']))
      {
         $img_big = addslashes($_FILES['pic1']['tmp_name']);
         $img_smal = addslashes($_FILES['pic2']['tmp_name']);
         $img1=file_get_contents ($img_big);
         $img2=file_get_contents ($img_smal);
          
         if(!$media->existId(['image'=>$img_big]))
         {
          $CreateCat=$media->create([ 'image'=>base64_encode($img1),
                                      'image_small'=>base64_encode($img2),
                                      'client_id'=>$_POST['client'],
                                      'subcategory_id'=>$_POST['subcategorie'],
                                      'page_id'=>$page->id,
                                      'image_path'=>'public/img/sec/'.$_FILES['pic1']['name']
                                    ]);
                                      
       
          if($CreateCat)
          {

    ?>
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong> Image generee.
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
                      <strong>Attention!</strong> Cette image existe deja.
                    </div>
                </div>
             <?php
         }
          
      }   
      
  }
  
  
?>
<div class="col-sm-offset-4 col-sm-4">
        <h1>Ajouter des Image</h1>
        
        <form enctype="multipart/form-data"method="post">
           <div class="form-group">
           
            <label class="control-label">Choisir Service:</label>
            <?= $form->select('subcategorie',$subcats); ?>
            <label class="control-label">Choisir Client:</label>
            <?= $form->select('client',$clients); ?>
            <label class="control-label">Big Picture</label>
            <input  type="file" class="file" name="pic1">
            <label class="control-label">Small Picture</label>
            <input  type="file" class="file" name="pic2">
            <br>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>