<?php
namespace PagosPyme;

use PagosPyme\Annotation\Attribute;
use PagosPyme\Annotation\DenyDynamicAttribute;

/**
 * Payer Class Doc Comment
 *
 * @package PagosPyme
 */
class Documentation extends Entity
{
    /**
    * @Attribute()
    */
    protected $type;
    /**
    * @Attribute(type = "string", readOnly = true)
    */
    protected $url;
    /**
    * @Attribute(type = "string", readOnly = true)
    */
    protected $description;
    /**
    * @Attribute(type = "string", readOnly = true)
    */

}

?>
