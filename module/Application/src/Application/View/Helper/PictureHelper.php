<?php
namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\Session\Container;
use Zend\ServiceManager\ServiceLocatorAwareInterface;  
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\View\Renderer\PhpRenderer;
use Zend\View\Model\ViewModel;
use Application\Service\PictureService as PictureService;  
 
class PictureHelper extends AbstractHelper implements ServiceLocatorAwareInterface
{
    protected static $state;
    protected $pictureObject;
    protected $picture;
    protected $username;
    protected $itemId;
    protected $viewmodel;
    protected $renderer;

    /** 
     * Set the service locator. 
     * 
     * @ param ServiceLocatorInterface $serviceLocator 
     * @ return CustomHelper 
     */ 
    public function __construct()
    {
    }
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)  
    {  
        $this->serviceLocator = $serviceLocator;  
        return $this;  
    } 
    /** 
     * Get the service locator. 
     * 
     * @ return \Zend\ServiceManager\ServiceLocatorInterface 
     */  
    public function getServiceLocator()  
    {  
        return $this->serviceLocator;  
    }  
    public function setViewModel(ViewModel $viewmodel)
    {
        $this->viewmodel = $viewmodel;
    }
    public function getViewModel()
    {
        return $this->viewmodel;
    }
    public function setPictureObject($pictureObject)
    {
        $this->pictureObject = $pictureObject;
        $this->picture = $pictureObject->getPicture();
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }
    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
    }
    public function getRenderer()
    {
        return $this->renderer;
    }
    public function __invoke()
    {
        $viewRender = $this->getServiceLocator()->get('ViewRenderer');
    	
    	$view = $this->getViewModel();
		
	$view->setTemplate('items/picture.phtml');
		
	return $viewRender->render($view);
    }
}
