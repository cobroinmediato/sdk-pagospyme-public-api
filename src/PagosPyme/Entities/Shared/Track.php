<?php
namespace PagosPyme;

use PagosPyme\Annotation\Attribute;

/**
 * Tack class
 *
 * @package PagosPyme
 */
class Track extends Entity
{
    /**
     * @Attribute(type = "string")
     */
    protected $type;
    /**
     * @Attribute(type = "object")
     */
    protected $value;
}