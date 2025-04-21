<?php

namespace Ipaymax;

use Exception;

/**
 * Send request to Ipaymax API
 * Better don't use this class directly, please use CoreApi, Snap, and Transaction instead
 */

class ApiRequestor
{

    /**
     * Send GET request
     *
     * @param string $url
     * @param string $serverKey
     * @param mixed[] $data
     * @return mixed
     * @throws Exception
     */
    public static function get($url, $serverKey, $data, $signature)
    {
        return self::remoteCall($url, $serverKey, $data, 'GET', $signature);
    }

    /**
     * Send POST request
     *
     * @param string $url
     * @param string $serverKey
     * @param mixed[] $data
     * @return mixed
     * @throws Exception
     */
    public static function post($url, $serverKey, $data, $signature)
    {
        return self::remoteCall($url, $serverKey, $data, 'POST', $signature);
    }

    /**
     * Send PATCH request
     *
     * @param string $url
     * @param string $serverKey
     * @param mixed[] $data
     * @return mixed
     * @throws Exception
     */
    public static function patch($url, $serverKey, $data, $signature)
    {
        return self::remoteCall($url, $serverKey, $data, 'PATCH', $signature);
    }

    /**
     * Actually send request to API server
     *
     * @param string $url
     * @param string $serverKey
     * @param mixed[] $data
     * @param bool $post
     * @return mixed
     * @throws Exception
     */
    public static function remoteCall($url, $serverKey, $data, $method, $signature)
    {
        return 'SUCCESS';

        // $ch = curl_init();

        // if (!$serverKey) {
        //     throw new Exception(
        //         'The ServerKey/ClientSecret is null, You need to set the server-key from Config. Please double-check Config and ServerKey key. ' .
        //             'You can check from the IpayMax Dashboard. ' .
        //             'See https://docs.ipaymax.com/api-documentation ' .
        //             'for the details or contact support at support@ipaymax.com if you have any questions.'
        //     );
        // } else {
        //     if ($serverKey == "") {
        //         throw new Exception(
        //             'The ServerKey/ClientSecret is invalid, as it is an empty string. Please double-check your ServerKey key. ' .
        //                 'You can check from the IpayMax Dashboard. ' .
        //                 'See https://docs.ipaymax.com/api-documentation ' .
        //                 'for the details or contact support at support@ipaymax.com if you have any questions.'
        //         );
        //     } elseif (preg_match('/\s/', $serverKey)) {
        //         throw new Exception(
        //             'The ServerKey/ClientSecret is contains white-space. Please double-check your API key. Please double-check your ServerKey key. ' .
        //                 'You can check from the IpayMax Dashboard. ' .
        //                 'See https://docs.ipaymax.com/api-documentation ' .
        //                 'for the details or contact support at support@ipaymax.com if you have any questions.'
        //         );
        //     }
        // }


        // $curl_options = array(
        //     CURLOPT_URL => $url,
        //     CURLOPT_HTTPHEADER => array(
        //         'Content-Type: application/json',
        //         'Accept: application/json',
        //         'User-Agent: ipaymax-php-v1.0.0',
        //         'X-CLIENT-ID: ' . Config::$clientId,
        //         'X-CLIENT-SECRET: ' . Config::$clientSecret,
        //         'X-SIGNATURE: ' . $signature
        //     ),
        //     CURLOPT_RETURNTRANSFER => 1
        // );

        // // merging with Config::$curlOptions
        // if (count(Config::$curlOptions)) {
        //     // We need to combine headers manually, because it's array and it will no be merged
        //     if (Config::$curlOptions[CURLOPT_HTTPHEADER]) {
        //         $mergedHeaders = array_merge($curl_options[CURLOPT_HTTPHEADER], Config::$curlOptions[CURLOPT_HTTPHEADER]);
        //         $headerOptions = array(CURLOPT_HTTPHEADER => $mergedHeaders);
        //     } else {
        //         $mergedHeaders = array();
        //         $headerOptions = array(CURLOPT_HTTPHEADER => $mergedHeaders);
        //     }

        //     $curl_options = array_replace_recursive($curl_options, Config::$curlOptions, $headerOptions);
        // }

        // if ($method != 'GET') {
        //     if ($data) {
        //         $body = json_encode($data);
        //         $curl_options[CURLOPT_POSTFIELDS] = $body;
        //     } else {
        //         $curl_options[CURLOPT_POSTFIELDS] = '';
        //     }

        //     if ($method == 'POST') {
        //         $curl_options[CURLOPT_POST] = 1;
        //     } elseif ($method == 'PATCH') {
        //         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        //     }
        // }

        // curl_setopt_array($ch, $curl_options);

        // $result = curl_exec($ch);
        // if ($result === false) {
        //     throw new Exception('CURL Error: ' . curl_error($ch), curl_errno($ch));
        // } else {
        //     try {
        //         $result_array = json_decode($result);
        //     } catch (Exception $e) {
        //         throw new Exception("API Request Error unable to json_decode API response: " . $result . ' | Request url: ' . $url);
        //     }
        //     $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //     if (isset($result_array->status_code) && $result_array->status_code >= 401 && $result_array->status_code != 407) {
        //         throw new Exception('IpayMax API is returning API error. HTTP status code: ' . $result_array->status_code . ' API response: ' . $result, $result_array->status_code);
        //     } elseif ($httpCode >= 400) {
        //         throw new Exception('IpayMax API is returning API error. HTTP status code: ' . $httpCode . ' API response: ' . $result, $httpCode);
        //     } else {
        //         return $result_array;
        //     }
        // }
    }
}
