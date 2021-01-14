<?php

namespace PagosPyme;

use PagosPyme\Annotation\RestMethod;
use PagosPyme\Annotation\RequestParam;
use PagosPyme\Annotation\Attribute;

/**
 * @RestMethod(resource="/payments", method="create")
 * @RestMethod(resource="/payments/:id", method="read")
 * @RestMethod(resource="/payments/search", method="search")
 * @RestMethod(resource="/payments/:id", method="update")
 * @RestMethod(resource="/payments/:trace/refund", method="refund")
 * @RequestParam(param="access_token")
 */
class Payment extends Entity {

    /**
     * @Attribute(primaryKey = true)
     * @var string
     */
    protected $id;

    /**
     * @Attribute(type = "date")
     * @var DateTime
     */
    protected $paymentDate;

    /**
     * @Attribute(type = "string")
     * @var string
     */
    protected $amount;

    /**
     * @Attribute(type = "string")
     * @var string
     */
    protected $paymentMethod;

    /**
     * @Attribute()
     * @var integer
     */
    protected $company;

    /**
     * @Attribute()
     * @var integer
     */
    protected $client;

    /**
     * @Attribute()
     * @var integer
     */
    protected $debt;  
    
    
    
}
