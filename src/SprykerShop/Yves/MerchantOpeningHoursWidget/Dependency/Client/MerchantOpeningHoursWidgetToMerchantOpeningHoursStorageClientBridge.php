<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\MerchantOpeningHoursWidget\Dependency\Client;

use Generated\Shared\Transfer\MerchantOpeningHoursStorageTransfer;

class MerchantOpeningHoursWidgetToMerchantOpeningHoursStorageClientBridge implements MerchantOpeningHoursWidgetToMerchantOpeningHoursStorageClientInterface
{
    /**
     * @var \Spryker\Client\MerchantOpeningHoursStorage\MerchantOpeningHoursStorageClientInterface
     */
    protected $merchantOpeningHoursStorageClient;

    /**
     * @param \Spryker\Client\MerchantOpeningHoursStorage\MerchantOpeningHoursStorageClientInterface $merchantOpeningHoursStorageClient
     */
    public function __construct($merchantOpeningHoursStorageClient)
    {
        $this->merchantOpeningHoursStorageClient = $merchantOpeningHoursStorageClient;
    }

    public function findMerchantOpeningHoursByIdMerchant(int $idMerchant): ?MerchantOpeningHoursStorageTransfer
    {
        return $this->merchantOpeningHoursStorageClient->findMerchantOpeningHoursByIdMerchant($idMerchant);
    }
}
