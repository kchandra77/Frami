<?php
 
namespace App\Controller;
 
use Frami\AbstractController;
 
class Home extends AbstractController
{
    public function print() 
    {
        return $this->render('home');
    }
}
