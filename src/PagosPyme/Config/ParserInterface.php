<?php
namespace PagosPyme\Config;

/**
 * Interface ParserInterface
 *
 * @package PagosPyme\Config
 */
interface ParserInterface
{
    /**
     * @param $path
     *
     * @return mixed
     */
    public function parse($path);

    /**
     * @return mixed
     */
    public function getSupportedExtensions();
}