<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $client=$App->getTable('Client');

  if(isset($_POST)){
      
      if(!empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['telephone']))
      {
          
         if(!$client->existId(['nom'=>$_POST['nom']]))
         {
          $CreateClient=$client->create(['nom'=>$_POST['nom'],
                                     'email'=>$_POST['email'],
                                     'phone'=>$_POST['telephone']]);
      
          if($CreateClient)
          {

    ?>
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong> Nouveau Client creer.
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
                      <strong>Attention!</strong> Ce Client existe Deja.
                    </div>
                </div>
             <?php
         }
          
      }   
      
  }
  
  
?>

<div class="col-sm-offset-4 col-sm-4">
        <h1>Ajouter d'un client</h1>
        <form method="post">
           <div class="form-group">
            <?= $form->input('nom','text','form-control'); ?>
            <?= $form->input('email','text','form-control'); ?>
            <?= $form->input('telephone','text','form-control'); ?>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>