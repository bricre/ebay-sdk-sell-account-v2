<?php

namespace Ebay\Sell\Account\V2\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This container details shipping rate information identified by a unique rate ID.
 * A successful call returns the requested shipping rate information.
 */
class Rate extends AbstractModel
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
     * The unique identifier for rate information.<br/><br/><span
     * class="tablenote"><strong>Note:</strong> This is a string that is automatically
     * assigned by the system when a rate object is created.</span>.
     *
     * @var string
     */
    public $rateId = null;

    /**
     * Indicates the level of shipping service to which the shipping rate information
     * applies.<br/><br/>Available shipping categories are:<ul><li><b>ONE_DAY</b>:
     * <i>This option is not supported when <b>shippingOptionType</b> is
     * INTERNATIONAL.</i>
     * </li><li><b>EXPEDITED</b></li><li><b>STANDARD</b></li><li><b>ECONOMY</b></li><li><b>EXPRESS</b>:
     * <i>This option is supported only when <b>MarketplaceId</b> is
     * <code>EBAY_DE</code> (Germany)</i></li></ul> For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingCategoryEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $shippingCategory = null;

    /**
     * Specifies the base shipping rate for an item.<br/><br/>This amount applies only
     * to the following <b>rateTableBasis</b> options:<ul><li><b>ITEM</b>: This is a
     * flat rate shipping cost per item being shipped.</li><li><b>WEIGHT</b>: This is a
     * cost per unit weight and is calculated using the weight of the item(s) being
     * shipped.</li></ul>.
     *
     * @var \Ebay\Sell\Account\V2\Model\Amount
     */
    public $shippingCost = null;

    /**
     * An array of Region names to which the shipping rate information
     * applies.<br/><br/>Returned values may be:<ul><li>Geographical Regions (e.g.,
     * <code>Worldwide</code>, <code>Europe</code>, and <code>Middle
     * East</code>)</li><li>Individual countries identified by a two-digit code such as
     * <code>US</code> (United States), <code>CA</code> (Canada), and <code>GB</code>
     * (United Kingdom)</li><li>US states and/or Canadian provinces identified by a
     * two-digit code such as <code>NY</code> (New York) or <code>SK</code>
     * (Saskatchewan)</li><li>Domestic Regions such as <code>AK/HI</code>
     * (Alaska/Hawaii)</li></ul>.
     *
     * @var string[]
     */
    public $shippingRegionNames = null;

    /**
     * An enum value that indicates the shipping service used for the specified
     * shipping rate. These enum values align with <b>ShippingService</b> metadata
     * returned by a <b>GeteBayDetails</b> call with <b>DetailName</b> set to
     * <code>shippingServiceDetails</code>.
     *
     * @var string
     */
    public $shippingServiceCode = null;
}
