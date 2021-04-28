<?php

namespace DTS\eBaySDK\Fulfillment\Types;

use DTS\eBaySDK\HttpHeadersTrait;
use DTS\eBaySDK\StatusCodeTrait;

/**
 * Created by PhpStorm.
 * User: sergo
 * Date: 4/27/21
 * Time: 12:54 PM
 * @property string $refundId
 * @property \DTS\eBaySDK\Fulfillment\Enums\RefundStatusEnum $refundStatus
 */
class IssueRefundRestResponse extends \DTS\eBaySDK\Types\BaseType
{
    use StatusCodeTrait;
    use HttpHeadersTrait;

    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'errors' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'errors'
        ],
        'warnings' => [
            'type' => 'DTS\eBaySDK\Fulfillment\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
        ],
        'refundId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundId'
        ],
        'refundStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundStatus'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     * @param int $statusCode Status code
     * @param array $headers HTTP Response headers.
     */
    public function __construct(array $values = [], $statusCode = 200, array $headers = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);

        $this->statusCode = (int)$statusCode;

        $this->setHeaders($headers);
    }
}
