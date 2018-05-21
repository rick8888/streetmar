<?php
  
  $form= new \Core\HTML\Form($_POST);
  $App=App::getInstance();
  $app=$App->getTable('Client')->find($_GET['id']);
  $id=$_GET['id'];
  if(empty($app)){
      $App->notfound();
  }else{
      if(!empty($_POST)){     
?>     <?php
          $App->getTable('Client')->update($_GET['id'],['nom'=>$_POST['nom'],
                                                         'email'=>$_POST['email'],
                                                         'phone'=>$_POST['telephone']]);
       ?>
       <div class="col-sm-offset-4 col-sm-4">
          <div class="alert alert-success">Le client a bien ete modifie</div>
       </div>
<?php   
  }else{
    
     $form->data=['nom'=>$app->nom,'email'=>$app->email,'telephone'=>$app->phone];
      
  }
  }
  
?>

<div class="col-sm-offset-4 col-sm-4">
        <h1>Edition du client</h1>
        <form method="post">
           <div class="form-group">
            <?= $form->input('nom','text','form-control'); ?>
            <?= $form->input('email','text','form-control'); ?>
            <?= $form->input('telephone','text','form-control'); ?>
            <?= $form->submit(); ?>
           </div>
        </form>
</div>