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

use Doctrine\ORM\EntityManager;
use Application\Form\Entity\CorrespondantForm;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\InputFilterAwareInterface;

use Zend\Stdlib\ArrayObject as ArrayObject;

use Application\Model\Items as Items;
use Application\Model\Blocks as Blocks;
use Application\Entity\Wordage as Wordage;

use Application\View\Helper\WordageHelper as WordageHelper;
use Application\Service\WordageService as WordageService;

use Application\View\Helper\PictureHelper as PictureHelper;
use Zend\Session\Container;

use Application\View\Helper\UserToolbar as UserToolbar;

class ContainerController extends AbstractActionController
{
    protected $em;
    protected $authservice;
    protected $username;
    protected $log;
    protected $obj;

    public function __construct()
    {
    }
    public function getEntityManager()
    {
        if (null == $this->em)
        {
	    try {
            	$this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
                //$this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
            } catch (Exception $e) {
		print_r($e);
		print_r($e-getPrevious());
	       }
    	}
	   return $this->em;
    }
    public function indexAction()
    {
        $userSession = new Container('user');
        if (!isset($userSession->test))
    	{
    	   $attempt = "notloggedin"; 
    	   $username = "notloggedin";
    	}
    	else
    	{
    	   $attempt = $userSession->test;
    	   $username = $userSession->username;
    	}
    	$userToolbar = new UserToolbar();
    	$userToolbar->setUserName($username);
    	$this->layout()->layouttest = $userToolbar->showOutput($attempt);

    	$this->log = $this->getServiceLocator()->get('log');
        $log = $this->log;
        $log->info("Presentation Controller");

        $em = $this->getEntityManager();

        $layout = $this->layout();
    	$layout->setTemplate('layout/presentation');

        $blocks = new Blocks();
        $blocks->setEntityManager($em);
        $blocks->loadDataSource();

	$view  = new ViewModel();

	$output = "";
	foreach ($blocks->toArray() as $key => $block)
        {
	    	$output .= print_r($block,true);
		$output .= "</br>";
		$output .= "</br>";
	}

        $view->blocks = $output;

        return $view;
    }
}
    
