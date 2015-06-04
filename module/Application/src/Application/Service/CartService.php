<?php

namespace Application\Service;

class CartService extends ModelService {
    
    public function __construct(){
        //echo 'constructed!';
    }
    
    /**************************************************************************/
    //All business methods for category will be stored in here.
    
    /**************************************************************************/
    
    public function getRepository()
    {
        return $this->getEntityManager()->getRepository('Application\Entity\Cart');
    }
}