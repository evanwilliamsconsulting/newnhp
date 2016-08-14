<?php
/**
 */

namespace Application\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\Panel\LoginForm;
use Application\Form\Panel\LogoutForm;
use Application\Entity\Correspondent;
use Application\View\Helper\Welcome as Welcome;
use Zend\Session\Container;
use Zend\Session;
use Zend\Db\Adapter;

class AuthController extends AbstractActionController
{
    protected $form;
    protected $logoutForm;
    protected $storage;
    protected $authservice;
    protected $sessionManager;
 
    public function getAuthService()
    {
        if (! $this->authservice) {
            $this->authservice = $this->getServiceLocator()
                                      ->get('AuthService');
        }
        return $this->authservice;
    }
    public function getSessionManager()
    {
        if (! $this->sessionManager) {
            $this->sessionManager = $this->getServiceLocator()
                                      ->get('Zend\Session\SessionManager');
        }
        return $this->sessionManager;
    }
    public function getSessionStorage()
    {
        if (! $this->storage) {
            $this->storage = $this->getServiceLocator()
                                  ->get('Application\Storage\Login');
        }
        return $this->storage;
    }
    public function getLogoutForm()
    {
	if (! $this->logoutForm)
	{
		$this->logoutForm = new LogoutForm();
	}
	return $this->logoutForm;
    }
    public function getForm()
    {
        if (! $this->form)
        {
	    $this->form = new LoginForm();
        }
	return $this->form;
    }
    public function logoutAction()
    {
    	//$this->_helper->layout()->disableLayout();
	   //$this->_helper->viewRenderer->setNoRender(true);
    	$view = new ViewModel();

        $form = $this->getLogoutForm();
	    $form->setAttribute('action','/auth/home');

        $userSession = new Container('user');
        $userSession->status = "notloggedin";
        $userSession->loggedin = 'false';
        if (isset($userSession->username))
        {
            unset($userSession->username);
        }

	   $view->setTerminal(true);
	   $view->form = $form;

	   return $view;
    }
    public function homeAction()
    {
        $userSession = new Container('user');
        $userSession->test = "notloggedin";
        $userSession->loggedin = 'false';
        if (isset($userSession->username))
        {
            unset($userSession->username);
        }
      	if ($this->getAuthService()->hasIdentity())
       	{
            $this->getAuthService()->clearIdentity();
	    }
        return $this->redirect()->toRoute('home');
    }
    public function loginAction()
    {
	   $userSession = new Container('user');
	   //$this->_helper->layout()->disableLayout();
	   //$this->_helper->viewRenderer->setNoRender(true);
    	$log = $this->getServiceLocator()->get('log');
    	$log->info('Authenticate: Login Action');

    	$view = new ViewModel();

        if ($this->getAuthService()->hasIdentity())
        {
            return $this->redirect()->toRoute('correspondant');
        }

        $form = $this->getForm();
	    $form->setAttribute('action','/auth/authenticate');

	    $view->setTerminal(true);
	    $view->form = $form;
	    $view->messages = $this->flashmessenger()->getMessages();
		

	   return $view;
    }
    public function authenticateAction()
    {
    	$log = $this->getServiceLocator()->get('log');
    	$log->info('Authenticate: Authenticate Action');
	//$this->_helper->layout()->disableLayout();
	//$this->_helper->viewRenderer->setNoRender(true);
        $form = $this->getForm();
        $redirect = 'login';
   
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                //check authentication
                $this->getAuthService()->getAdapter()
                                       ->setIdentity($request->getPost('username'))
                                       ->setCredential($request->getPost('password'));
                $result = $this->getAuthService()->authenticate();
                if ($result->isValid()) {
		    $userSession = new Container('user');
                    $userSession->test = "loggedin";
                    $userSession->loggedin = 'true';
                    $username = $request->getPost('username');
                    $userSession->username = $username;
		    $welcome = new Welcome();
                    $redirect = 'correspondant';
                    // Check if it has rememberMe
                    $this->getSessionStorage()
                         ->setRememberMe(1);
                    // set storage again
                    $this->getAuthService()->getStorage()->write($request->getPost('username'));
                }
		else
		{
		    $userSession = new Container('user');
                    $userSession->loggedin = 'false';
		    $messages = $this->flashmessenger()->getMessages();
		    $messageString = implode("-",$messages);
                    $userSession->attempt = $messageString;
    		    $log->info($messageString);
		    $redirect='home';
		}
            }
        }
        return $this->redirect()->toRoute($redirect);
    }
/*
    public function logoutAction()
    {
        $this->getSessionStorage()->forgetMe();
        $this->getAuthService()->clearIdentity();
	$userSession = new Container('user');
	$userSession->offsetUnset('loggedin');
  
        $this->flashmessenger()->addMessage("You've been logged out!");
        return $this->redirect()->toRoute('login');
    }
*/
}
