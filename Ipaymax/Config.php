<?php

namespace Ipaymax;

use Constants\UrlConstant;

/**
 * Ipaymax Configuration
 */
class Config
{

    /**
     * Your merchant's server key
     * 
     * @static
     */
    public static $serverKey;

    /**
     * Your merchant's client key
     * 
     * @static
     */
    public static $clientId;

    /**
     * Your merchant's client secret
     * 
     * @static
     */
    public static $clientSecret;

    /**
     * True for production
     * false for sandbox mode
     * 
     * @static
     */
    public static $isProduction = false;

    /**
     * Set it true to enable 3D Secure by default
     * 
     * @static
     */
    public static $is3ds = false;

    /**
     * Enable request params sanitizer (validate and modify charge request params).
     * See Ipaymax_Sanitizer for more details
     * 
     * @static
     */

    public static $isSanitized = false;
    /**
     * Default options for every request
     * 
     * @static
     */
    public static $curlOptions = array();

    /**
     * Get baseUrl
     * 
     * @return string Ipaymax API URL, depends on $isProduction
     */
    public static function getBaseUrl()
    {
        return Config::$isProduction ?
        UrlConstant::PRODUCTION_BASE_URL : UrlConstant::SANDBOX_BASE_URL;
    }
}
