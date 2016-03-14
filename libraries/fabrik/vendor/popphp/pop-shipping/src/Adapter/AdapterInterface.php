<?php
/**
 * Pop PHP Framework (http://www.popphp.org/)
 *
 * @link       https://github.com/popphp/popphp-framework
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2016 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 */

/**
 * @namespace
 */
namespace Pop\Shipping\Adapter;

/**
 * Shipping adapter interface
 *
 * @category   Pop
 * @package    Pop_Shipping
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2016 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 * @version    2.0.0
 */
interface AdapterInterface
{

    /**
     * Set ship to
     *
     * @param  array  $shipTo
     * @return mixed
     */
    public function shipTo(array $shipTo);

    /**
     * Set ship from
     *
     * @param  array  $shipFrom
     * @return mixed
     */
    public function shipFrom(array $shipFrom);

    /**
     * Set dimensions
     *
     * @param  array  $dimensions
     * @param  string $unit
     * @return mixed
     */
    public function setDimensions(array $dimensions, $unit = null);

    /**
     * Set dimensions
     *
     * @param  string $weight
     * @param  string $unit
     * @return mixed
     */
    public function setWeight($weight, $unit = null);

    /**
     * Send transaction
     *
     * @return void
     */
    public function send();

    /**
     * Return whether the transaction is a success
     *
     * @return boolean
     */
    public function isSuccess();

    /**
     * Return whether the transaction is an error
     *
     * @return boolean
     */
    public function isError();

    /**
     * Get response object
     *
     * @return object
     */
    public function getResponse();

    /**
     * Get response code
     *
     * @return int
     */
    public function getResponseCode();

    /**
     * Get response message
     *
     * @return string
     */
    public function getResponseMessage();

    /**
     * Get service rates
     *
     * @return array
     */
    public function getRates();

    /**
     * Get service extended rates
     *
     * @return array
     */
    public function getExtendedRates();

    /**
     * Set whether the package contains alcohol
     *
     * @param   string $alcohol
     * @param   string $recipientType LICENSEE|CONSUMER
     */
    public function setAlcohol($alcohol, $recipientType = 'LICENSEE');

    /**
     * Set the shipping info such as the transportation type
     * @param $info
     *
     * @return mixed
     */
    public function shipmentInfo($info);
}
