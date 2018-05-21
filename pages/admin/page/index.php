
<?php 
  
   $pages=App::getInstance()->getTable('Page')->all();
?>
<div class="col-md-offset-1 col-md-10">
    <h1>Administration des Images</h1>
    
    <p>
      <a href="?page=medias.add" class="btn btn-success">Ajouter</a>
    </p>
    
    <table class="table">
          <thead>
              <tr>
                   <td class="text-center">#</td>
                   <td class="text-center">Intitule Page</td>
                   <td class="text-center">Banniere Titre 1</td>
                   <td class="text-center">Banniere Titre 2</td>
                   <td class="text-center">Banniere Image 1</td>
                   <td class="text-center">Banniere Image 2</td>
                   <td class="text-center">Banniere Image 3</td>
                   <td class="text-center">video</td>
                   <td>Action</td>
              </tr>

          </thead>
          <tbody>
              <?php foreach($pages as $page): ?>

                 <tr>
                      <td class="text-center"><?= $page->id;?></td>
                      <td class="text-center"><?= $page->libelle;?></td>
                      <td class="text-center"><?= $page->BanTitleAcroche;?></td>
                      <td class="text-center"><?= $page->BanTitleSmall;?></td>
                      <td class="text-center"><?= $page->BanImage1;?>
                      <td class="text-center"><?= $page->BanImage2;?>
                      <td class="text-center"><?= $page->BanImage3;?>
                      <td class="text-center"><?= $page->video;?>
                      <td style="display:inline-block">
                         <a href="?page=page.edit&id=<?= $media->id; ?>" class="btn btn-primary">editer</a>
                         <a href="?page=page.delete&id=<?= $media->id; ?>" class="btn btn-danger">supprimer</a>
                      </td>
                 </tr>

              <?php endforeach;?>
          </tbody>
    </table>

</div>
