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
use Application\Entity\Picture as Pix;
use Application\Form\Entity\PixForm;
use Doctrine\ORM\EntityManager;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\InputFilterAwareInterface;

use Zend\Validator\File\Size;
use Zend\Validator\File\Extension;
use Zend\Session\Container;

use Application\View\Helper\UserToolbar as UserToolbar;
use Imagine\Image\Box as Box;

class PixController extends AbstractActionController
{
	protected $em;
	protected $authservice;
	protected $username;
	protected $log;
	
    public function indexAction()
    {
	$view = new ViewModel();

	$view->content = $this->content();

        return $view;
    }
    public function content()
    {
	return "content";
    }
	    public function getEntityManager()
    {
        if (null == $this->em)
        {
            $this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
	}
	return $this->em;
    }
    public function getAuthService()
    {
        if (! $this->authservice) {
            $this->authservice = $this->getServiceLocator()
                                      ->get('AuthService');
        }
        return $this->authservice;
    }
    public function getForm()
    {
        $form = new PixForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if ($request->isPost()) {
        }
	return $form;
    }
	public function viewAction()
    {
    	// Load the logger
    	$this->log = $this->getServiceLocator()->get('log');
    	$log = $this->log;
    	$log->info("PixController view action");
		
		// Initialize the View
    	$view = new ViewModel();

		// Retreive the parameters
		$id = $this->params()->fromRoute('item');
	    $log->info($id);
		
		// 2Do: Check to see that user is logged in
    	if (!$this->getAuthService()->hasIdentity())
        {
	       return $this->redirect()->toUrl('http://www.newhollandpress.com/');
        }
    	// 2Do: Populate username with user's username
    	$userSession = new Container('user');
		$this->username = $userSession->username;
		$log->info($this->username);
		
		$em = $this->getEntityManager();
		
		$pix = $em->getRepository('Application\Entity\Pix')->find($id);
		
		$topic = new \Application\View\Helper\TopicToolbar('pix');
		$view->topic = $topic;
		$view->content = print_r($pix,true);

        return $view;
    }
   public function newAction()
    {
	    $this->log = $this->getServiceLocator()->get('log');
    	$log = $this->log;
    	$log->info("new form");
	    $view = new ViewModel();
        $form = new PixForm();
    	// 2015-09-10
    	// 2Do: Check to see that user is logged in
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
			$this->username = $username;
		}
		$userToolbar = new UserToolbar();
		$userToolbar->setUserName($username);
		$this->layout()->layouttest = $userToolbar->showOutput($attempt);



    	// 2Do: Populate username with user's username
    	// 2Do: Implement Calendar Widget in Javascript for date and fix validation
        $form->get('submit')->setValue('Add');
        $pix = new Pix();

        $form->bind($pix);
        $form->get('username')->setValue($this->username);
        $request = $this->getRequest();
		//$log->info($request);
        if ($request->isPost()) {
            $em = $this->getEntityManager();

            $inputFilter = $pix->getInputFilter();
    
	    	$form->setInputFilter($inputFilter);
	    	$form->setData($request->getPost());
	    	$log->info(print_r($request->getPost(),true));
		
	    	if ($form->isValid())
	    	{
	    		$post=$request->getPost();
				$log->info($request);
				$log->info(print_r($post,true));
				$pix->exchangeArray($post);
				$log->info("data exchanged");
				$files =  $request->getFiles();
				//$log->info($files);
				//die();
				//$log->info(print_r($form->getData(),true));
		    	/* Untested code to upload pix 
				 * https://samsonasik.wordpress.com/2012/08/31/zend-framework-2-creating-upload-form-file-validation/
				 */
				//$filename = $post['picture'];
		    	$size = new Size(array('min'=>1000));
				$extension = new Extension(array('extension' => array('jpg')));
				$adapter = new \Zend\File\Transfer\Adapter\Http();
			
		       $log->info("is valid!");
			   $log->info(print_r($files,true));
		   
			   $fileDestinationRoot = "/var/www/html/uploads/";
			   $fileDestination = $fileDestinationRoot . $this->username;
		   
			   $pixSubPath = "pix";
			   $fileDestination .= "/";
			   $fileDestination .= $pixSubPath;
			   $fileDestination .= "/";

			   $fullFileName = $fileDestination;
			   $thumbFileName = $fileDestination;
			   $thumbFileName .= "thumb_";
		   
		       $log->info($fileDestination);
		   	   $adapter->setDestination($fileDestination);
			   if ($adapter->receive($files['files']['name'])) {
	     		   	  $newfile = $adapter->getFileName();
				      $log->info($newfile);
					  $expandFile = explode('/',$newfile);
					  $expandFileCount = count($expandFile)-1;
					  $log->info(print_r($expandFile[$expandFileCount],true));
					  $pixFileName = $expandFile[$expandFileCount];
			   }

			   $fullFileName .= $pixFileName;
			   $thumbFileName .= $pixFileName;

			   $dataArray = $form->getData();
//			   $log->info(print_r($dataArray,true));
			   $dataArray->setPicture($pixFileName);
		       //$em->persist($form->getData());
		       $em->persist($dataArray);
			   $log->info("persisted");
		       $em->flush();
			   $log->info("flushed");
			   // Now Save as Thumbnail
			   $sm = $this->getServiceLocator();
			   $imagine = $sm->get('image_service');
			   $image = $imagine->open($fullFileName);

			   $size = $image->getSize();
			   $divider = $size->getHeight() / 100;
    		   $calcWidth = $size->getWidth() / $divider;
    		   $calcHeight = 100;

 			   $image->resize(new Box($calcWidth, $calcHeight));

 			   $image->save($thumbFileName);

		       return $this->redirect()->toUrl('/pix/index');
		    }
		    else // Form is not valid
		    {
		    	$log->info("Form is not valid.");
		    }
	    }
	$view->form = $form;
	return $view;
    }
}
