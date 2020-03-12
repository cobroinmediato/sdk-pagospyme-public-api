<?php
namespace PagosPyme;

use http\Params;
use PagosPyme\Annotation\RestMethod;
use PagosPyme\Annotation\RequestParam;
use PagosPyme\Annotation\Attribute;

/**
 * @RestMethod(resource="/v1/discount_campaigns", method="read")
 * @RequestParam(param="access_token")
 */


class DiscountCampaign extends Entity
{
    /**
     * @Attribute(primaryKey = true)
     */
    protected $id;

    /**
     * @Attribute()
     */
    protected $name;

    /**
     * @Attribute()
     */
    protected $percent_off;

    /**
     * @Attribute()
     */
    protected $amount_off;

    /**
     * @Attribute()
     */
    protected $coupon_amount;

    /**
     * @Attribute()
     */
    protected $currency_id;

    /**
     * @return mixed
     */
    public static function read($options = [], $params = []){
        return parent::read([], $options);
    }
}
