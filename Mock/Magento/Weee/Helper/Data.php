<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Weee\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**#@+
     * Constants defined for keys of array, makes typos less likely
     */
    const KEY_WEEE_AMOUNT_INVOICED = 'weee_amount_invoiced';

    const KEY_BASE_WEEE_AMOUNT_INVOICED = 'base_weee_amount_invoiced';

    const KEY_WEEE_TAX_AMOUNT_INVOICED = 'weee_tax_amount_invoiced';

    const KEY_BASE_WEEE_TAX_AMOUNT_INVOICED = 'base_weee_tax_amount_invoiced';

    const KEY_WEEE_AMOUNT_REFUNDED = 'weee_amount_refunded';

    const KEY_BASE_WEEE_AMOUNT_REFUNDED = 'base_weee_amount_refunded';

    const KEY_WEEE_TAX_AMOUNT_REFUNDED = 'weee_tax_amount_refunded';

    const KEY_BASE_WEEE_TAX_AMOUNT_REFUNDED = 'base_weee_tax_amount_refunded';

    /**#@-*/

    /**
     * Check if fixed taxes are used in system
     *
     * @param   null|string|bool|int|Store $store
     * @return  bool
     */
    public function isEnabled($store = null)
    {
        return false;
    }
}
