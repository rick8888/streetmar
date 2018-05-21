<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $pages=$App->getTable('Page')->extrac('id','libelle');
  $cont=$App->getTable('Contenus');
  if(isset($_POST)){
      
      if(!empty($_POST['titre']) and !empty($_POST['contenu']) and !empty($_POST['page']))
      {
         if(!$cont->existId(['titre'=>$_POST['titre']]))
         {
          $contenu=$cont->create(['titre'=>$_POST['titre'],
                                 'contenu'=>$_POST['contenu'],
                                 'page_id'=>$_POST['page']]);
      
          if($contenu)
          {

    ?>
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong> contenu de la page d'identifiant <?= $_POST['page'] ?> Cree.
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
                      <strong>Attention!</strong> Ce contenu existe deja.
                    </div>
                </div>
             <?php
         }
          
      }   
      
  }
  
  
?>
<div class="col-sm-offset-4 col-sm-4">
        <h1>Ajouter Contenu Page</h1>
        <form method="post">
           <div class="form-group">
            <label class="control-label">Titre:</label>
            <?= $form->input('titre','text','form-control'); ?>
            <label class="control-label">Contenu:</label>
            <?= $form->input('contenu','textarea','form-control'); ?> 
            <label class="control-label">Page:</label>
            <?= $form->select('page',$pages); ?> 
            <?= $form->submit(); ?>
           </div>
        </form>
</div>