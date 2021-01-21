<?php

namespace PagosPyme;

use PagosPyme\Annotation\RestMethod;
use PagosPyme\Annotation\RequestParam;
use PagosPyme\Annotation\Attribute;

/**
 * @RestMethod(resource="/debits/:id", method="read")
 * @RestMethod(resource="/debits", method="search")
 * @RestMethod(resource="/debits", method="create")
 * @RestMethod(resource="/debits/:id", method="update")
 * @RestMethod(resource="/debits/:id", method="delete")
 * @RequestParam(param="access_token")
 */
class Debit extends Entity {

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
    protected $internal_reference;

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
     * @Attribute(type = "", required = false)
     * @var string
     */
    protected $amount2;

    /**
     * @Attribute(type = "date", required = false)
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

    //New Fields

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $client_cbu;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $company_name;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $cuit;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $address;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $province;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $postal_code;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $location;

    /**
     * @Attribute(type = "date", required = true)
     * @var string
     */
    protected $tentative_debit_date;

}
