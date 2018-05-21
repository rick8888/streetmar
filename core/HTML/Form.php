<?php
	namespace Core\HTML;


	class Form {
        
       public $data=[];
       public $surround='p';
        
       private function surround($html){
          
           return "<{$this->surround}>{$html}</{$this->surround}>"; 
        }

       public function __construct($data)
       {
           $this->data=$data;
       }
        
       public function getData(){
           return $this->data;
       }
        
       public function input($name,$types,$class){
           if($types=='textarea'){
              return $this->surround('<textarea  name="'.$name.'" value="'.$this->getIndex($name).'" class="'.$class.'" placeholder="'.$name.'"></textarea>');
           }
           else{
               return $this->surround('<input type="'.$types.'" name="'.$name.'" value="'.$this->getIndex($name).'" class="'.$class.'" placeholder="'.$name.'">');
           }
           
       }
        
        public function select($name,$data)
        {
            $input='<select class="form-control" name="'.$name.'" value="'.$this->getIndex($name).'"placeholder="'.$name.'">';
               foreach($data as $k=>$v)
               {
                   $input.="<option value='$k'>$v</option>";
               }
            return $input.='</select>';
            
            return $input;
        }
        
        public function submit(){
            
            return $this->surround('<button type="submit" class="btn btn-primary" name="send" style="margin-top:10px">envoyer</button>');
        }
        public function getIndex($key){
            return isset($this->data[$key])?$this->data[$key]:'';
        }
	}
?>
