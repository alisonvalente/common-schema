<?php

/*
 * This file is part of gpupo/common-schema
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\CommonSchema\Trading;

interface TradingInterface
{
    public function fetch($key);

    public function toArray();
}