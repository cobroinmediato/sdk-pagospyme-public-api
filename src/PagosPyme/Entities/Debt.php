<?php

namespace PagosPyme;

use PagosPyme\Annotation\RestMethod;
use PagosPyme\Annotation\RequestParam;
use PagosPyme\Annotation\Attribute;

/**
 * @RestMethod(resource="/debts/:id", method="read")
 * @RestMethod(resource="/debts/search", method="search")
 * @RestMethod(resource="/debts", method="create")
 * @RestMethod(resource="/debts/:id", method="update")
 * @RestMethod(resource="/debts/:id", method="delete")
 * @RequestParam(param="access_token")
 */
class Debt extends Entity {

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
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $client_reference;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $client_identification_number;

    /**
     * @Attribute(type = "float", required = true)
     * @var string
     */
    protected $amount;

    /**
     * @Attribute(type = "date", required = true)
     * @var DateTime
     */
    protected $due_date;

    /**
     * @Attribute(type = "float", required = true)
     * @var string
     */
    protected $amount2;

    /**
     * @Attribute(type = "date", required = true)
     * @var string
     */
    protected $due_date2;

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

}
