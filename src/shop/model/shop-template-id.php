<?php
namespace Affilicious\Shop\Model;

use Affilicious\Common\Exception\Invalid_Type_Exception;
use Affilicious\Common\Model\Simple_Value_Trait;
use Webmozart\Assert\Assert;

if (!defined('ABSPATH')) {
	exit('Not allowed to access pages directly.');
}

class Shop_Template_Id
{
    use Simple_Value_Trait {
        Simple_Value_Trait::__construct as private set_value;
    }

	/**
	 * @inheritdoc
	 * @since 0.6
	 * @throws Invalid_Type_Exception
	 */
	public function __construct($value)
	{
        if (is_numeric($value) || is_string($value)) {
            $value = intval($value);
        }

        Assert::integer($value, 'Expected shop template ID to be an integer. Got: %s');

		$this->set_value($value);
	}
}
