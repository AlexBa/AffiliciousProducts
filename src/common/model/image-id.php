<?php
namespace Affilicious\Common\Model;

use Affilicious\Common\Exception\Invalid_Type_Exception;
use Webmozart\Assert\Assert;

if (!defined('ABSPATH')) {
    exit('Not allowed to access pages directly.');
}

class Image_Id
{
    use Simple_Value_Trait {
        Simple_Value_Trait::__construct as private set_value;
    }

    /**
     * @inheritdoc
     * @since 0.8
     * @throws Invalid_Type_Exception
     */
    public function __construct($value)
    {
        if (is_numeric($value)) {
            $value = intval($value);
        }

        Assert::integer($value, 'Expected the image ID to be an integer. Got: %s');

        $this->set_value($value);
    }
}
