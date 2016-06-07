<?php

namespace Classes\Base;
require_once __DIR__. '/ComponentInterface.php';
interface ComponentArrayInterface extends ComponentInterface, \ArrayAccess, \Iterator, \Countable
{
    /**
     * Method returning alone attribute name when class is *array* type
     * This method has been overridden in real-array component class
     * @return string
     */
    function getAttributeName();
}
