<?php

class User
{
    protected $imieINazwisko;
    protected $email;
    protected $password;
    protected $Trening;
    
    public function set_trening($trening)
    {   
        if(is_array($trening))
        {
            $this->Trening=$trening;
        }
        
    }    
    public function get_trening()
    {
        return $this->Trening;
    }
    
    
}