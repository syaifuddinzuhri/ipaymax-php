<?php

namespace Ipaymax;

use Constants\UrlConstant;
use Exception;

/**
 * Provide charge and capture functions for Core API
 */
class CoreApi
{

    /**
     * Create Virtual Account.
     *
     * @param mixed[] $params
     * @return mixed
     * @throws Exception
     */
    public static function createVirtualAccount($payloads, $signature)
    {
        if (Config::$isSanitized) {
            Sanitizer::jsonRequest($payloads);
        }

        return ApiRequestor::post(
            Config::getBaseUrl() . UrlConstant::CREATE_VIRTUAL_ACCOUNT,
            Config::$serverKey,
            $payloads,
            $signature
        );
    }
}
