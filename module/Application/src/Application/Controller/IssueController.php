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
use Application\Entity\Issue;
use Hex\View\Helper\CustomHelper;
use Doctrine\ORM\EntityManager;
use Application\Form\Entity\IssueForm;

class IssueController extends AbstractActionController
{
    protected $em;
 
    public function getEntityManager()
    {
        if (null == $this->em)
        {
            $this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
	}
	return $this->em;
    }
    public function indexAction()
    {
	$view = new ViewModel();

	$articleView = new ViewModel(array('article' => $article));
        $articleView->setTemplate('content/article');

	$view->content = $this->content();

        return $view;
    }
    public function content()
    {
	return "content";
    }
    public function viewAction()
    {
        $em = $this->getEntityManager();
	$em->flush();

	$view = new ViewModel();
	$view->content = "Times Are Good Again!";

	return $view;
    }
    public function getForm()
    {
        $form = new IssueForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $issue = new Issue();
        }
	return $form;
    }
    public function newAction()
    {
	$view = new ViewModel();
	$form = $this->getForm();
	$view->form = $form;
	return $view;
    }
    public function contentsAction()
    {
	$view = new ViewModel();

	$articleView = new ViewModel(array('article' => $article));
        $articleView->setTemplate('content/article');

	$view->content = "contents";

        return $view;
    }
}
