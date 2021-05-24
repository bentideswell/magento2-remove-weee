<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Weee\Model;

/**
 * WEEE config model
 */
class Config
{
    /**
     * Enabled config path
     */
    const XML_PATH_FPT_ENABLED = 'tax/weee/enable';

    // display settings
    const XML_PATH_FPT_DISPLAY_PRODUCT_VIEW = 'tax/weee/display';

    const XML_PATH_FPT_DISPLAY_PRODUCT_LIST = 'tax/weee/display_list';

    const XML_PATH_FPT_DISPLAY_SALES = 'tax/weee/display_sales';

    const XML_PATH_FPT_DISPLAY_EMAIL = 'tax/weee/display_email';

    // misc
    const XML_PATH_FPT_INCLUDE_IN_SUBTOTAL = 'tax/weee/include_in_subtotal';

    const XML_PATH_FPT_TAXABLE = 'tax/weee/apply_vat';

    /**
     * @return  bool
     */
    public function isEnabled($store = null)
    {
        return false;
    }
}
