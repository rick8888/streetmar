<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $pages=$App->getTable('Page')->extrac('id','libelle');


  $bans=$App->getTable('Banniere');
  if(isset($_POST['send'])){

      //$page=$App->getTable('Page')->findbylibelle($subcats[$_POST['subcategorie']]);
        
      if(!empty($_FILES['pic1']))
      {
         $img = addslashes($_FILES['pic1']['tmp_name']);
         $image=file_get_contents ($img);
         //die('la maison');
    
          //die('la maison de');
          $Create=$bans->create(['image'=>base64_encode($image),
                                 'titre_accroche'=>$_POST['titre1'],
                                 'titre_detail'=>$_POST['titre2'],
                                 'page_id'=>$_POST['page']
                                ]);
                                      
       
          if($Create)
          {

    ?>
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong> Banniere Creee.
                    </div>
                </div>

<?php
           }else echo "<div class='alert alert-danger'>Echec</div>";
         
          
      }   
      
  }
  
  
?>
<div class="col-sm-offset-4 col-sm-4">
        <h1 class="text-center">Details Banniere</h1>
        
        <form enctype="multipart/form-data"method="post">
           <div class="form-group">
            <label class="control-label">Accroche</label>
            <?= $form->input('titre1','text','form-control'); ?>
            <label class="control-label">Detailez Accroche</label>
            <?= $form->input('titre2','text','form-control'); ?>
            <label class="control-label">Page</label>
            <?= $form->select('page',$pages); ?>
            <br>
            <label class="control-label">Picture</label>
            <input  type="file" class="file" name="pic1">
            <br>
            <?= $form->submit(); ?>
               
           </div>
        </form>
</div>