<?php
namespace PagosPyme;

use PagosPyme\Annotation\Attribute;

/**
 * Payer Class Doc Comment
 *
 * @package PagosPyme
 */
class Tax extends Entity
{
    /**
     * @Attribute(type = "string")
     */
    protected $type;
    /**
     * @Attribute(type = "float")
     */
    protected $value;
}
