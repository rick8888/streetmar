<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $cont=$App->getTable('Contenus')->find($_GET['id']);
  $id=$_GET['id'];
  if(empty($cont)){
      $App->notfound();
  }else{
      if(!empty($_POST)){     
?>     <?php
          $App->getTable('Contenus')->update($_GET['id'],['titre'=>$_POST['titre'],
                                                          'contenu'=>$_POST['contenu']]);
       ?>
       <div class="col-sm-offset-4 col-sm-4">
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Modification Reussie
            </div>
       </div>
<?php   
  }else{
    
     $form->data=['titre'=>$cont->titre,
                  'contenu'=>$cont->contenu];
      
  }
  }
  
?>

<div class="col-sm-offset-4 col-sm-4">
        <h1>Edition du client</h1>
        <form method="post">
           <div class="form-group">
            <?= $form->input('titre','text','form-control'); ?>
            <?= $form->input('contenu','textarea','form-control'); ?>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>