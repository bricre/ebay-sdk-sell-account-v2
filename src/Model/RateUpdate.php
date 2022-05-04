<?php

namespace Ebay\Sell\Account\V2\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This container defines the updated shipping cost information for a rate object
 * identified by <b>rateId</b>.<br/><br/>To view a list of all rate objects and
 * corresponding <b>rateID</b> values, issue <b>getRateTable</b> for the rate table
 * identified by <b>rateTableId</b>.
 */
class RateUpdate extends AbstractModel
{
    /**
     * An additional shipping cost added to the base shipping rate (i.e.,
     * <b>shippingCost</b>).<br/><br/>This amount applies only to the following
     * <b>rateTableBasis</b> options:<ul><li><b>WEIGHT</b>: This is a cost per unit
     * weight and is calculated using the weight of the item(s) being
     * shipped.</li><li><b>SURCHARGE</b>: This is a flat amount that is added to the
     * base shipping rate.</li></ul>This field is returned only when it is applicable
     * to the specified rate ID.
     *
     * @var \Ebay\Sell\Account\V2\Model\Amount
     */
    public $additionalCost = null;

    /**
     * The identifier for the rate object.<br/><br/><span
     * class="tablenote"><strong>Note:</strong> This is a string automatically assigned
     * by the system when the rate object is created. It cannot be changed or
     * updated.</span>.
     *
     * @var string
     */
    public $rateId = null;

    /**
     * This is the base shipping rate for an item.<br/><br/>This amount applies only to
     * the following <b>rateTableBasis</b> options:<ul><li><b>ITEM</b>: This is a flat
     * rate shipping cost per item being shipped.</li><li><b>WEIGHT</b>: This is a cost
     * per unit weight and is calculated using the weight of the item(s) being
     * shipped.</li></ul>.
     *
     * @var \Ebay\Sell\Account\V2\Model\Amount
     */
    public $shippingCost = null;
}
