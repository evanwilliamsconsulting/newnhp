<?php
/**
  * BmCalendar Module (https://github.com/SCLInternet/BmCalendar)
  *
  * @link https://github.com/SCLInternet/BmCalendar for the canonical source repository
  * @license http://opensource.org/licenses/MIT The MIT License (MIT)
  */

namespace Application;

use Application\Exception\OutOfRangeException;
use Application\State\ActiveStateInterface;

/**
 * Day
 *
 * @author Tom Oram <tom@scl.co.uk>
 */
class Active implements ActiveInterface
{
    /**
     * loggedin
     *
     * @var loggedin 
     */
    protected $loggedin;

    /**
     * The states this active user is in.
     *
     * @var ActiveStateInterface[]
     */
    protected $states = array();

    /**
     * The URL to go to if this day is clicked
     *
     * @var string
     */
    protected $action;

    /**
     * {@inheritDoc}
     *
     * @param  int   $day
     * @param  Month $month
     */
    public function __construct($loggedin)
    {
        $this->loggedin = $loggedin;
    }

    /**
     * Add a state to this day.
     *
     * @param  DayStateInterface $state
     * @return self
     */
    public function addState(ActiveStateInterface $state)
    {
        $this->states[$state::type()] = $state;

        return $this;
    }

    /**
     * {@inheritDoc}
     *
     * @param  string $type
     * @return ActiveStateInterface|null NULL if the date doesn't have a state with the request type.
     */
    public function getState($type)
    {
        if (!isset($this->states[$type])) {
            return null;
        }

        return $this->states[$type];
    }

    /**
     * {@inheritDoc}
     *
     * @return ActiveStateInterface[]
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * Sets the value of action
     *
     * @param  string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = (string) $action;
        return $this;
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * {@inheritDoc}
     *
     * @return logged in 
     */
    public function getLoggedin()
    {
        return $this->loggedin;
    }

    /**
     * {@inheritDoc}
     *
     * @return int
     */
    public function value()
    {
        return $this->loggedin;
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->day;
    }
}
