<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Entity\Category;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        //$categoryService = $this->getServiceLocator()->get('CategoryService');
        
        //$categoryService->test();
        
        //exit();
        
        //$cache = $this->getServiceLocator()->get('Cache');
        //$cache->getCache()->setItem('mykey' , 'myvalue');
        $em = $this->getServiceLocator()->get('entitymanager');
       
        $food = new Category();
        $food->setTitle('Food');
        
        $em->persist($food);
        $em->flush();
        exit('aaa');
        return new ViewModel();
    }
    
    public function redirectAction(){
        
        exit('redirecting...');
    }
}
