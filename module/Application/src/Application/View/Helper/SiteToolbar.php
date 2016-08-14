<?php
namespace Application\View\Helper;
use Zend\View\Helper\AbstractHelper;
use Zend\Session\Container;
 
class SiteToolbar extends AbstractHelper
{
    protected static $state;

    public function __invoke()
    {
    	// This top id is rendered separately
    	// we can rename it and keep it going!
    	//$siteToolbarHTML = "<div id='site_toolbar' class='toolbar'>";
		$siteToolbarHTML = "<ul class='sitelist'>";
		$siteToolbarHTML .= "<li class='sitetab'>Home</li>";
		$siteToolbarHTML .= "<li class='sitetab'>&nbsp;&nbsp;</li>";
		$siteToolbarHTML .= "<li class='sitetab' onclick='clickLogin()'>Login</li>";
		$siteToolbarHTML .= "<li class='sitetab'>&nbsp;&nbsp;</li>";
		$siteToolbarHTML .= "<li class='sitetab'>Issues</li>";
		$siteToolbarHTML .= "<li class='sitetab'>&nbsp;&nbsp;</li>";
		$siteToolbarHTML .= "<li class='sitetab'>Write!</li>";
		$siteToolbarHTML .= "<li class='sitetab'>&nbsp;&nbsp;</li>";
		$siteToolbarHTML .= "<li class='sitetab'>Advertise!</li>";
		$siteToolbarHTML .= "<li class='sitetab'>&nbsp;&nbsp;</li>";
		$siteToolbarHTML .= "<li class='sitetab'>Contact</li>";
		/*
		$userSession = new Container('user');
        if (!isset($userSession->loggedin));
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
		 * 
		 */
		$siteToolbarHTML .= "</ul>";
		//		$siteToolbarHTML .= "</div>";
		return $siteToolbarHTML;
    }
    public function setState()
    {
        $this->state = true;
    }
    public function clearState()
    {
        $this->state = false;
    } 
}
?>
