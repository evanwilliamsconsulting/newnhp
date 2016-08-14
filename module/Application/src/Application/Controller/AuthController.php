<?php
/**
 */

namespace Application\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\Panel\LoginForm;
use Application\Entity\Correspondent;
use Application\View\Helper\Welcome as Welcome;
use Zend\Session\Container;
use Zend\Db\Adapter;

class AuthController extends AbstractActionController
{
    protected $form;
    protected $storage;
    protected $authservice;
 
    public function getAuthService()
    {
        if (! $this->authservice) {
            $this->authservice = $this->getServiceLocator()
                                      ->get('AuthService');
        }
        return $this->authservice;
    }
    public function getSessionStorage()
    {
        if (! $this->storage) {
            $this->storage = $this->getServiceLocator()
                                  ->get('Application\Storage\Login');
        }
        return $this->storage;
    }
    public function getForm()
    {
        if (! $this->form)
        {
	    $this->form = new LoginForm();
        }
	return $this->form;
    }
    public function loginAction()
    {
	//$this->_helper->layout()->disableLayout();
	//$this->_helper->viewRenderer->setNoRender(true);
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
                foreach($result->getMessages() as $message)
                {
                    $this->flashmessenger()->addMessage($message);
                }
                if ($result->isValid()) {
		    $userSession = new Container('user');
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
            }
        }
        return $this->redirect()->toRoute($redirect);
    }
    public function logoutAction()
    {
        $this->getSessionStorage()->forgetMe();
        $this->getAuthService()->clearIdentity();
	$userSession = new Container('user');
	$userSession->offsetUnset('loggedin');
  
        $this->flashmessenger()->addMessage("You've been logged out!");
        return $this->redirect()->toRoute('login');
    }
}
