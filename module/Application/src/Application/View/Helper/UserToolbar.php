<?php
namespace Application\View\Helper;
use Zend\View\Helper\AbstractHelper;
use Zend\Session\Container;
 
class UserToolbar extends AbstractHelper
{

    public function __invoke()
    {
    	$userToolbarEMPTY = "<div id='user_toolbar' class='toolbar'>";
    	$userToolbarHTML = "<div id='user_toolbar' class='toolbar'>";
		$userToolbarHTML .= "<ul>";
		$userSession = new Container('user');
        if (!isset($userSession->loggedin))
        {
			$userToolbarHTML .= "<li onclick=\"";
			$userToolbarHTML .= "clickLogin();";
			$userToolbarHTML .= "\">";
			$userToolbarHTML .= "Login";
			$userToolbarHTML .= "</li>";
			// Old Action
            // return "<a href='http://www.newhollandpress.com/auth/login'>Login</a>";
		}
		else 
		{
	        $username = $userSession->username;
	        //$retval = "Welcome&nbsp;" . $username;
	        //$retval .= "&nbsp;<a href='http://www.newhollandpress.com/auth/login/logout'>Logout</a>";
	        //return $retval;
        }
		$userToolbarHTML .= "</ul>";
		$userToolbarHTML .= "</div>";
		$userToolbarEMPTY .= "</div>";
		return $userToolbarEMPTY;
    }
}
?>
