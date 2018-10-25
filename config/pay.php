<?php

/**
 * @Author: wuchenge
 * @Date: 2018-10-18 13:47:50
 */

return [
    'alipay' => [
        'app_id'         => env('ALIPAY_APP_ID'),
        'ali_public_key' => env('ALIPAY_ALI_PUBLIC_KEY'),
        'private_key'    => env('ALIPAY_PRIVAYE_KEY'),
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
