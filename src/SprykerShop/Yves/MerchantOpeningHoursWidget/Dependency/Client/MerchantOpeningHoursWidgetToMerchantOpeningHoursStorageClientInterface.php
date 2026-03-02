<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\MerchantOpeningHoursWidget\Dependency\Client;

use Generated\Shared\Transfer\MerchantOpeningHoursStorageTransfer;

interface MerchantOpeningHoursWidgetToMerchantOpeningHoursStorageClientInterface
{
    public function findMerchantOpeningHoursByIdMerchant(int $idMerchant): ?MerchantOpeningHoursStorageTransfer;
}
