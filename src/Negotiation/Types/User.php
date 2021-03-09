<?php
/**
 * Created by PhpStorm.
 * User: sergo
 * Date: 6/11/20
 * Time: 5:27 PM
 */

namespace DTS\eBaySDK\Negotiation\Types;

/**
 * Class User
 * @property string $maskedUsername
 * @package DTS\eBaySDK\Negotiation\Types
 */
class User extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'maskedUsername' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maskedUsername'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}