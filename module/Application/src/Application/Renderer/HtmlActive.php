<?php
/**
  */

namespace Application\Renderer;

use Application\Active;
use Application\Exception\OutOfRangeException;

/**
 * Class to output the HTML for login actions 
 *
 */
class HtmlActive implements ActiveRendererInterface
{
    /**
     * The Active State.
     *
     * @var Active $active
     */
    protected $active;

    /**
     * Logged in
     *
     * @var boolean $loggedin 
     */
    protected $loggedin;

    /**
     */
    public function setActive(Active $active)
    {
        $this->active = $active;

        return $this;
    }
    public function setLoggedIn($loggedin)
    {
	$this->loggedin = $loggedin;
    }

    /**
     * Returns the markup for the login state.
     *
     */
    public function loginState()
    {
	if ($this->loggedin)
	{
		$output = "Logged In";
	}
	else
	{
		$output = "Logged Out";
	}

        return $output;
    }

}
