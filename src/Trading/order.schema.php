<?php

/*
 * This file is part of gpupo/common-schema
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'merchant' => [
        'name' => 'string',
    ],
    'orderNumber'   => 'string',
    'priceCurrency' => 'string',
    'price'         => 'string',
    'acceptedOffer' => [
        [
            'itemOffered' => [
                'name'  => 'string',
                'sku'   => 'string',
                'url'   => 'string',
                'image' => 'string',
            ],
            'price'            => 'string',
            'priceCurrency'    => 'string',
            'eligibleQuantity' => [
                'value' => 'string',
            ],
            'seller' => [
                'name' => 'string',
            ],
        ],
    ],
    'url'              => 'string',
    'orderStatus'      => 'string',
    'paymentMethod'    => 'string',
    'paymentMethodId'  => 'string',
    'orderDate'        => 'string',
    'isGift'           => 'string',
    'discount'         => 'string',
    'discountCurrency' => 'string',
    'customer'         => [
        'name'      => 'string',
        'document'  => 'string',
        'birthDate' => 'string',
        'email'     => 'string',
        'gender'    => 'string',
        'telephone' => 'string',
        'cellphone' => 'string',
    ],
    'billingAddress' => [
        'name'                => 'string',
        'streetAddress'       => 'string',
        'addressLocality'     => 'string',
        'addressRegion'       => 'string',
        'addressCountry'      => 'string',
        'postalCode'          => 'string',
        'postOfficeBoxNumber' => 'string',
        'addressComplement'   => 'string',
        'addressNumber'       => 'string',
        'addressNeighborhood' => 'string',
        'addressReference'    => 'string',
    ],
];
