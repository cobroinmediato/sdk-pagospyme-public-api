<?php
namespace PagosPyme;

use PagosPyme\Annotation\Attribute;

/**
 * TrackValues class
 *
 * @package PagosPyme
 */
class TrackValues extends Entity
{
    /**
     * @Attribute(type = "string")
     */
    protected $conversion_id;
    /**
     * @Attribute(type = "string")
     */
    protected $conversion_label;
    /**
     * @Attribute(type = "string")
     */
    protected $pixel_id;
}