<?php
namespace PagosPyme;

use PagosPyme\Annotation\Attribute;
use PagosPyme\Annotation\DenyDynamicAttribute;

/**
 * Payer Class Doc Comment
 *
 * @package PagosPyme
 */
class Item extends Entity
{
    /**
     * @Attribute(type = "string")
     */
    protected $id;
    /**
     * @Attribute(type = "string")
     */
    protected $title;
    /**
     * @Attribute(type = "string")
     */
    protected $description;
    /**
     * @Attribute(type = "string")
     */
    protected $category_id;
    /**
     * @Attribute(type = "string")
     */
    protected $picture_url;
    /**
     * @Attribute(type = "string")
     */
    protected $currency_id;
    /**
     * @Attribute(type = "int")
     */
    protected $quantity;
    /**
     * @Attribute(type = "float")
     */
    protected $unit_price;

}