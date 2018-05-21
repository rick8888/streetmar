<?php
// Classe qui se charge de gerer l'authentification des utilisateurs
namespace Core\Auth;
use Core\Database\Database;

class DBAuth{
    
    private $db;
    
    public function __construct(Database $db){
        
        $this->db=$db;
        
    }
    public function getUserID(){
        
        if($this->loggeg()===false){
            
            return false;
            
        }else return $this->loggeg();
    }
    // permet a un utilisateur avec un udername et un mot de passe de se connecter, elle retoure true si connexion et false sinon
    public function loggin($username,$password){
        
        $user=$this->db->prepare('select *
                                  from users
                                  where username=?',[$username], null, true);
        if($user){
            
            if($user->password===$password){
                
                $_SESSION['auth']=$user->id;
                return true;
            }
            
        }
        else
        return false;
    }
    
    // on verifie si l'utilisateur est connecte ou pas
    public function logged(){
        
        return isset($_SESSION['auth']);
        
    }
}