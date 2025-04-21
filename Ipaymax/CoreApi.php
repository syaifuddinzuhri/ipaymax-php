<?php

namespace Ipaymax;

use Exception;

/**
 * Provide charge and capture functions for Core API
 */
class CoreApi
{
    const CREATE_VIRTUAL_ACCOUNT = '/transaction/create/va';
    const CREATE_QRIS = '/transaction/create/qris';
    const CREATE_RETAIL = '/transaction/create/retail';
    const CREATE_EWALLET = '/transaction/create/e-wallet';

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
            Config::getBaseUrl() . self::CREATE_VIRTUAL_ACCOUNT,
            Config::$serverKey,
            $payloads,
            $signature
        );
    }
}
