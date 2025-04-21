<?php

namespace Constants;

class UrlConstant
{
    const SANDBOX_BASE_URL = 'https://api-sandbox.ipaymax.com';
    const PRODUCTION_BASE_URL = 'https://api.ipaymax.com';

    const CREATE_VIRTUAL_ACCOUNT = '/transaction/create/va';
    const CREATE_QRIS = '/transaction/create/qris';
    const CREATE_RETAIL = '/transaction/create/retail';
    const CREATE_EWALLET = '/transaction/create/e-wallet';
}
