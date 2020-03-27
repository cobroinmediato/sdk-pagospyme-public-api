<?php
namespace PagosPyme;

use PagosPyme\Annotation\Attribute;
use PagosPyme\Annotation\DenyDynamicAttribute;

/**
 * Payer Class Doc Comment
 *
 * @package PagosPyme
 */
class Payer extends Entity
{
    /**
     * @Attribute()
     */
    protected $id;
    /**
     * @Attribute(type = "string")
     */
    protected $entity_type;
    /**
     * @Attribute(type = "string")
     */
    protected $type;
    /**
     * @Attribute(type = "string")
     */
    protected $name;
    /**
     * @Attribute(type = "string")
     */  
    protected $surname;
    /**
     * @Attribute(type = "string")
     */
    protected $first_name;
    /**
     * @Attribute(type = "string")
     */
    protected $last_name;
    /**
     * @Attribute(type = "string")
     */
    protected $email;
    /**
     * @Attribute(type = "date")
     */
    protected $date_created;
    /**
     * @Attribute()
     */
    protected $phone;
    /**
     * @Attribute()
     */
    protected $identification;
    /**
     * @Attribute()
     */
    protected $address;

}