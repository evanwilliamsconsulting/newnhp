<?php
namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Application\Renderer\ActiveRendererInterface as Renderer;
use Zend\Session\Container;
use Application\Active;
 
class UserToolbar extends AbstractHelper
{
    /**
     */
    protected $active;

    /**
     * The name of the template used to render the calendar.
     *
     * @var null|string
     */
    protected $partial;

    protected $username;

    /**
     * Class to generate HTML version of the calendar.
     *
     * @var Renderer
     */
    protected $renderer;

    /**
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets the value of partial
     *
     * @param  string $partial
     * @return self
     */
    public function setPartial($partial)
    {
        $this->partial = (string) $partial;
        return $this;
    }

    /**
     * Gets the value of partial
     *
     * @return string
     */
    public function getPartial()
    {
        return $this->partial;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function showOutput($attempt)
    {
        $renderer = $this->getRenderer();
    	$retval = "<div id='user-toolbar'>";
	    $retval .= "<ul class='itemlist'>";
        if (0==strcmp($attempt,"notloggedin"))
        {
	       $retval .= "<li class='itemtab'><a href='#' onClick='clickLogin();'>Login!</a></li>";
	       $retval .= "<li class='itemtab'>&nbsp;&nbsp;&nbsp;</li>";
	       $retval .= "<li class='itemtab'>&nbsp;&nbsp;&nbsp;</li>";
	    }
        else
        {
            $retval .= "<li class='itemtab'><a>";
            $retval .= $this->username;
            $retval .= "</a></li>";
            $retval .= "<li class='itemtab'>&nbsp;&nbsp;&nbsp;</li>";
            $retval .= "<li class='itemtab'>&nbsp;&nbsp;&nbsp;</li>";
            $retval .= "<li class='itemtab'><a href='#' onClick='clickLogout();'>Logout!</a></li>";
            $retval .= "<li class='itemtab'>&nbsp;&nbsp;&nbsp;</li>";
            $retval .= "<li class='itemtab'>&nbsp;&nbsp;&nbsp;</li>";
	    }
        // If logged in, here is where the different use options are displayed.
        if (0 != strcmp($attempt,"notloggedin"))
        {
            $retval .= "<li class='itemtab'>";
            $retval .= "<a href='#'>Correspondant</a>";
            $retval .= "</li>";
            $retval .= "<li class='itemtab'>&nbsp;&nbsp;&nbsp;</li>";
            $retval .= "<li class='itemtab'>";
            $retval .= "<a href='#'>Editor</a>";
            $retval .= "</li>";
        }
	    $retval .= "</div>";

        return $retval;
    }

    /**
     * Set the renderer to be used.
     *
     * @param Renderer $renderer
     *
     * @return self
     * @todo Accept closure to generate renderer.
     */
    public function setRenderer(Renderer $renderer)
    {
        $this->renderer = $renderer;
        return $this;
    }

    /**
     * Gets the value of renderer
     *
     * @return Renderer
     */
    public function getRenderer()
    {
        return $this->renderer;
    }
}
?>
