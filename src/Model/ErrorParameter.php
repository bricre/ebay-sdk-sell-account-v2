<?php

namespace Ebay\Sell\Account\V2\Model;

use OpenAPI\Runtime\AbstractModel;

class ErrorParameter extends AbstractModel
{
    /**
     * The object of the error.
     *
     * @var string
     */
    public $name = null;

    /**
     * The value of the object.
     *
     * @var string
     */
    public $value = null;
}
