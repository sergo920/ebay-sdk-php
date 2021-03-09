<?php

namespace DTS\eBaySDK\Negotiation\Enums;

/**
 * Created by PhpStorm.
 * User: sergo
 * Date: 6/10/20
 * Time: 11:18 PM
 */
class OfferStatusEnum
{
    const PENDING = 'PENDING';
    const RETRACTED = 'RETRACTED';
    const EXPIRED = 'EXPIRED';
    const CANCELLED = 'CANCELLED';
    const COUNTERED = 'COUNTERED';
    const DECLINED = 'DECLINED';
    const AUTO_DECLINED = 'AUTO_DECLINED';
    const AUTO_ACCEPTED = 'AUTO_ACCEPTED';
    const ACCEPTED = 'ACCEPTED';
}