<?php

namespace DTS\eBaySDK\Fulfillment\Types;

/**
 * Created by PhpStorm.
 * User: sergo
 * Date: 4/27/21
 * Time: 12:54 PM
 * @property string $reasonForRefund
 * @property string $comment
 * @property string $orderId
 * @property \DTS\eBaySDK\Fulfillment\Types\SimpleAmount $orderLevelRefundAmount
 * @property \DTS\eBaySDK\Fulfillment\Types\RefundItem[] $refundItems
 */
class IssueRefundRestRequest extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'orderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderId'
        ],
        'reasonForRefund' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reasonForRefund'
        ],
        'comment' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'comment'
        ],
        'orderLevelRefundAmount' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\SimpleAmount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderLevelRefundAmount'
        ],
        'refundItems' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\RefundItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'refundItems'
        ],
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
