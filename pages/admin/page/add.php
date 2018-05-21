<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $subcats=$App->getTable('Subcategory')->extrac('id','subcategory');
  $clients=$App->getTable('Client')->extrac('id','nom');
  $media=$App->getTable('Medias');
  if(isset($_POST)){
      
      if(!empty($_POST['subcategorie']) and !empty($_POST['client']) and !empty($_POST['jpg']) and !empty($_POST['png']))
      {
         
         if(!$media->existId(['image'=>$_POST['jpg']]))
         {
          $CreateCat=$media->create([ 'image'=>$_POST['jpg'],
                                      'image_small'=>$_POST['png'],
                                      'client_id'=>$_POST['client'],
                                      'subcategory_id'=>$_POST['subcategorie']]);
      
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
        
        <form method="post">
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">link 1</span>
              <input type="text" class="form-control" placeholder="public/images/libolo.jpg" aria-describedby="basic-addon1" name="jpg">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">link 2</span>
              <input type="text" class="form-control" placeholder="public/images/libolo.jpg" aria-describedby="basic-addon1" name="png">
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