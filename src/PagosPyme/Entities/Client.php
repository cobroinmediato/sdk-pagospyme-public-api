<?php

namespace PagosPyme;

use PagosPyme\Annotation\RestMethod;
use PagosPyme\Annotation\RequestParam;
use PagosPyme\Annotation\Attribute;

/**
 * @RestMethod(resource="/clients/:id", method="read")
 * @RestMethod(resource="/clients", method="search")
 * @RestMethod(resource="/clients", method="create")
 * @RestMethod(resource="/clients/:id", method="update")
 * @RestMethod(resource="/clients/:id", method="delete")
 * @RequestParam(param="access_token")
 */
class Client extends Entity {

    /**
     * @Attribute(primaryKey = true, type = "integer")
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
    protected $name;

    /**
     * @Attribute(type = "string", required = true)
     * @var string
     */
    protected $identification_number;

    /**
     * @Attribute(type = "string")
     * @var string
     */
    protected $email;

    /**
     * @Attribute()
     * @var integer
     */
    protected $company;

}
