<?php
/**
  */

namespace Application\State;

/**
 */
abstract class AbstractActiveState implements ActiveStateInterface
{
    /**
     * Return the name of the class as the type of the DayState class.
     *
     * @return string
     */
    public static function type()
    {
        return get_called_class();
    }
}
