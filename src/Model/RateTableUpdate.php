<?php

namespace Ebay\Sell\Account\V2\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the request payload of the <b>updateShippingCost</b> method
 * to pass updated shipping cost information for a rate table identified by
 * <b>rateTableId</b>.
 */
class RateTableUpdate extends AbstractModel
{
    /**
     * An array of rate objects for which <b>shippingCost</b> and/or
     * <b>additionalCost</b> are to be updated.
     *
     * @var \Ebay\Sell\Account\V2\Model\RateUpdate[]
     */
    public $rates = null;
}
