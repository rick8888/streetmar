<?php 
  
   $medias=App::getInstance()->getTable('Medias')->medias();
   foreach($medias as $media)
   {
       echo '<img height="80" weidht=80 src="data:image;base64,'.$media->image_small.'">';
       
       echo '<img height="80" weidht=80 src="data:image;base64,'.$media->image.'">';
   }
   
?>