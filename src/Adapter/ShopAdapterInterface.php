<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\OxidEshopUpdateComponent\Adapter;

/**
 * @internal
 */
interface ShopAdapterInterface
{
    public function getPaymentKey(): string;
}