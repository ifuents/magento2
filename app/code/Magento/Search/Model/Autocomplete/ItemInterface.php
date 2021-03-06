<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Search\Model\Autocomplete;

/**
 * @api
 */
interface ItemInterface
{
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return array
     */
    public function toArray();
}
