<?php

namespace Ebay\Sell\Account\V2\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex type that describes the value of a monetary amount as represented by a
 * global currency.
 */
class Amount extends AbstractModel
{
    /**
     * The base currency applied to the <b>value</b> field to establish a monetary
     * amount.<br/><br/>The currency is represented as a 3-letter ISO 4217 currency
     * code. For example, the code for the Canadian Dollar is <code>CAD</code>. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The monetary amount in the specified <b>currency</b>.
     *
     * @var string
     */
    public $value = null;
}
