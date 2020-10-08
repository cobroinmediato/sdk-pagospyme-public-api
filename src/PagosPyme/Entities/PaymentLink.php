<?php

namespace PagosPyme;

use PagosPyme\Annotation\RestMethod;
use PagosPyme\Annotation\RequestParam;
use PagosPyme\Annotation\Attribute;

/**
 * @RestMethod(resource="/payment_links/:id", method="read")
 * @RestMethod(resource="/payment_links", method="search")
 * @RestMethod(resource="/payment_links", method="create")
 * @RestMethod(resource="/payment_links/:id", method="update")
 * @RestMethod(resource="/payment_links/:id", method="delete")
 * @RequestParam(param="access_token")
 */
class PaymentLink extends Entity {

    /**
     * @Attribute(primaryKey = true)
     * @var string
     */
    protected $id;

    /**
     * @Attribute(type = "string" , required = true)
     * @var string
     */
    protected $reference;

    /**
     * @Attribute(type = "boolean", required = true)
     * @var string
     */
    protected $valid;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $amount;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $debt_reference;

    /**
     * @Attribute(type = "date", required = true)
     * @var string
     */
    protected $due_date;

    /**
     * @Attribute(type = "date", required = true)
     * @var string
     */
    protected $debt_due_date;

    /**
     * @Attribute(type = "float", required = true)
     * @var DateTime
     */
    protected $debt_amount;

    /**
     * @Attribute(type = "array", required = true)
     * @var string
     */
    protected $enabled_payment_methods;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $client_reference;

    /**
     * @Attribute(type = "string", required = true)
     * @var integer
     */
    protected $client_name;

    /**
     * @Attribute(type = "string", required = true)
     * @var integer
     */
    protected $client_identification;

    /**
     * @Attribute(type = "string", required = true)
     * @var integer
     */
    protected $email;

}
