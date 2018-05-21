<?php

  if(!empty($_POST)){
      
      $auth= new \Core\Auth\DBAuth(App::getInstance()->getDB());
      if($auth->loggin($_POST['username'],$_POST['password'])){
          
          header('Location: admin.php');
          
      }else{
          ?>
        <div class="col-sm-offset-4 col-sm-4">
          <div class="alert alert-danger">
                 Indentifiant incorrect
          </div>
        </div>
      <?php    
      }
  }

  $form= new \Core\HTML\Form($_POST);
?>

<div class="col-sm-offset-4 col-sm-4">
        <form method="post">
           <div class="form-group">
            <?= $form->input('username','text','form-control'); ?>
            <?= $form->input('password','password','form-control'); ?>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>