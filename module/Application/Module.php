<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
/* from
*
* https://samsonasik.wordpress.com/2012/10/23/zend-framework-2-create-login-authentication-using-authenticationservice-with-rememberme/
*
*/
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Authentication\Storage;
use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Adapter\DbTable as DbTableAuthAdapter;
use Application\View\Helper\Welcome as Welcome;
use Application\View\Helper\UserToolbar as UserToolbar;
use Application\View\Helper\SiteToolbar as SiteToolbar;
use Zend\Session\SessionManager;
use Zend\Session\Container;
use Zend\Log\Logger;
use Zend\Log\Writer\FirePhp as FirePhpWriter;
use Zend\Log\Writer\FirePhp\FirePhpBridge;
use Application\View\Helper\TopicToolbar as TopicToolbar;
use Application\View\Helper\WordageHelper as WordageHelper;
use Application\Service\WordageService as WordageService;
use Application\View\Helper\ItemHelper as ItemHelper;
use Application\Service\ItemService as ItemService;
use Zend\Db\Adapter;
use Application\Entity\Correspondant;

//require_once 'vendor/firephp/firephp-core/lib/FirePHPCore/FirePHP.class.php';

class Module implements AutoloaderProviderInterface, ViewHelperProviderInterface, ConfigProviderInterface
{
    public function getServiceConfig()
    {
        return array(
            'factories'=>array(
                'log' => function($sm) {
                    $log = new Logger();
                    $writer = new FirePhpWriter(new FirePhpBridge(new \FirePHP()));
                    $log->addWriter($writer);
                    return $log;
                },
                'Application\Storage\Login' => function($sm) {
                    return new \Application\Storage\Login('nhpress');
                },
                'Zend\Session\SessionManager' => function ($sm) {
                    $config = $sm->get('config');
                    if (isset($config['session'])) {
                        $session = $config['session'];
  
                        $sessionConfig = null;
                        if (isset($session['config'])) {
                            $class = isset($session['config']['class']) ? $session['config']['class'] : 'Zend\Session\Config\SessionConfig';
                            $options = isset($session['config']['options']) ? $session['config']['options'] : array();
                            $sessionConfig = new $class();
                            $sessionConfig->setOptions($options);
                        }
                        $sessionStorage = null;
                        if (isset($session['storage'])) {
                            $class = $session['storage'];
                            $sessionStorage = new $class();
                        }
                        $sessionSaveHandler = null;
                        if (isset($session['save_handler'])) {
                            $sessionSaveHandler = $sm->get($session['save_handler']);
                        }
                        $sessionManager = new SessionManager($sessionConfig, $sessionStorage,$sessionSaveHandler);
                   } else {
                        $sessionManager = new SessionManager();
                   }
                   Container::setDefaultManager($sessionManager);
                   return $sessionManager;
            },
            'AuthService' => function($sm) {
                $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
		$dbTableAuthAdapter = new DbTableAuthAdapter($dbAdapter);
		$dbTableAuthAdapter->setTableName('correspondent');
		$dbTableAuthAdapter->setIdentityColumn('username');
		$dbTableAuthAdapter->setCredentialColumn('password');
                $authService = new AuthenticationService();
                $authService->setAdapter($dbTableAuthAdapter);
                $authService->setStorage($sm->get('Application\Storage\Login'));
    
                return $authService;
            },
            )
        );
    }
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        $serviceManager = $e->getApplication()->getServiceManager();
	    $viewModel = $e->getApplication()->getMvcEvent()->getViewModel();

	    $userToolbar = new UserToolbar();
		$siteToolbar = new SiteToolbar();

	    $viewModel->user_toolbar = $userToolbar;
		$viewModel->site_toolbar = $siteToolbar;
    }
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'test_helper' => function($sm) {
                    $helper = new View\Helper\CustomHelper;
                    return $helper;
                },
		        'toolbar' => function($sm) {
		            $helper = new View\Helper\Toolbar;
		            return $helper;
		        },
		        'pixhelper' => function($sm) {
		            $helper = new View\Helper\PixHelper;
		            return $helper;
		        },
		        'wordagehelper' => function($sm) {
		        	$wordageService = new WordageService($sm);
		            $helper = new WordageHelper($wordageService);
		            return $helper;
		        },
		        'itemhelper' => function($sm) {
		        	$itemService = new ItemService($sm);
				$helper = new ItemHelper($itemService);
				return $helper;
		        },
		        'topictoolbar' => function($sm) {
		            $helper = new TopicToolbar($sm);
		            return $helper;
		        }	
            ),
        );   
    }
}
