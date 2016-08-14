<?php
/**
  */

namespace Application\State;

/**
 * @author Tom Oram <tom@scl.co.uk>
 */
interface ActiveStateInterface
{
    /**
     * A unique identifier for grouping related states together.
     *
     * @return string
     */
    public static function type();
}
