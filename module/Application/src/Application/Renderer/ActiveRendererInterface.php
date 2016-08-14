<?php
/**
  */

namespace Application\Renderer;

use Application\Active;

/**
 * Interface for rendering the Active User Widgets.
 *
 */
interface ActiveRendererInterface
{
    /**
     * Set the Active state.
     *
     * @param  Active $active
     * @return self
     */
    public function setActive(Active $active);

    /**
     * Set whether the user is logged in!
     *
     * @param  boolean $loggedin
     * @return self
     */
    public function setLoggedIn($loggedin);
}
