<?php

namespace Ebay\Sell\Account\V2\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This container includes all information pertaining to a shipping rate table. A
 * successful call returns the requested shipping rate information.
 */
class RateTableDetails extends AbstractModel
{
    /**
     * Identifies the eBay marketplace to which the shipping rate table applies. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The seller-defined name for the shipping rate table. Names must be unique for
     * each table assigned to the same seller, shippingOptionType, and eBay
     * marketplace.<br/><br/><b>Max length:</b> 50.
     *
     * @var string
     */
    public $name = null;

    /**
     * An array of rate objects associated with the specified shipping rate table. Each
     * rate object is identified by a unique system-generated ID and defines specific
     * shipping rate information.
     *
     * @var \Ebay\Sell\Account\V2\Model\Rate[]
     */
    public $rates = null;

    /**
     * The rate calculation type provides three methods of calculating the shipping
     * cost based on the seller's selection/input:<ul><li><b>ITEM</b>: Specifies the
     * flat rate shipping cost that buyers in the specified shipping region will pay.
     * When this option is selected, information specified in the rate table overrides
     * all shipping options/costs that are specified at the listing level. Buyers in
     * the specified regions will only see the services provided in the rate table.
     * Buyers in other regions that are not specified in the rate table will see the
     * shipping services associated with the listing.</li><li><b>WEIGHT</b>: Seller can
     * provide minimum shipping cost and an additional shipping cost per pound. The
     * additional cost will be calculated based on the weight the seller provide at the
     * time of listing. Buyers will see the total shipping cost and won’t see these
     * calculations.  Buyers in the specified regions will only see the services
     * provided in the rate table. Buyers in other regions that were not specified in
     * the rate table, will see the shipping services associated with the
     * listing.</li><li><b>SURCHARGE</b>: Lists surcharges for buyers within specified
     * regions, or indicates a flat amount added to the shipping cost specified within
     * an item's listing. Buyers will see only the total shipping cost as well as
     * shipping services associated with the item's listing. If a SURCHARGE is
     * specified in the rate table for certain regions, buyers in those regions will
     * see the (shipping cost + SURCHARGE) total.</li></ul> For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingRateCalculationEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $rateTableBasis = null;

    /**
     * A unique, system-generated ID assigned to the shipping rate table when it is
     * initially created.
     *
     * @var string
     */
    public $rateTableId = null;

    /**
     * The region serviced by the shipping rate table. Valid values
     * are:<ul><li><b>DOMESTIC</b>: Indicates that the shipping rate table applies to
     * shipping destinations within the country in which an item has been listed (i.e.,
     * the <i>source</i> country).</li><li><b>INTERNATIONAL</b>: Indicates that the
     * shipping rate table applies to shipping destinations outside of the country in
     * which an item has been listed.</li></ul> For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $shippingOptionType = null;
}
