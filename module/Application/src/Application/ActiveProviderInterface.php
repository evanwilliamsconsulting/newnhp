<?php
/**
  */

namespace Application; 

/**
 * This interface is used to build classes which setup the attributes of a given day.
 *
 * @author Tom Oram <tom@scl.co.uk>
 */
interface ApplicationProviderInterface
{
    /**
     * Use this to create and set the state of the provided Day.
     *
     */
    public function createLoggedin($loggedin);
}
