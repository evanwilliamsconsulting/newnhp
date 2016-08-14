<?php
/**
  */

namespace Application;

use Application\State\ApplicationStateInterface;

/**
 * DayInterface
 *
 * @author Tom Oram <tom@scl.co.uk>
 */
interface ActiveInterface
{
    const LOGGED_IN = 1;
    const LOGGED_OUT = 2;

    /**
     * __construct
     *
     * @param boolean   $loggedin
     */
    public function __construct($loggedin);

    /**
     * Return a specific state by type.
     *
     * @param  string $type
     * @return DayStateInterface|null NULL if the date doesn't have a state with the request type.
     */
    public function getState($type);

    /**
     * Returns a list of states for this day.
     *
     * @return DayStateInterface[]
     */
    public function getStates();

    /**
     * Gets the value of action
     *
     * @return string
     */
    public function getAction();

    /**
     */
    public function getLoggedIn();

    /**
     * Convert the day number to a string.
     *
     * @return string
     */
    public function __toString();
}
