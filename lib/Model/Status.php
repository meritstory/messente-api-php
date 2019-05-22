<?php
/**
 * Status
 *
 * PHP version 5
 *
 * @category Class
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Messente API
 *
 * [Messente](https://messente.com) is a global provider of messaging and user verification services. Use Messente API library to send and receive SMS, Viber and WhatsApp messages, blacklist phone numbers to make sure you're not sending any unwanted messages, manage contacts and groups.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.
 *
 * The version of the OpenAPI document: 1.0.1
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Api\Model;
use \Messente\Api\ObjectSerializer;

/**
 * Status Class Doc Comment
 *
 * @category Class
 * @description The human-readable equivalent for this field is contained in \&quot;error\&quot;.   This value is *null* if the message is still being processed.
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Status
{
    /**
     * Possible values of this enum
     */
    const ACK = 'ACK';
    const DELIVRD = 'DELIVRD';
    const UNDELIV = 'UNDELIV';
    const FAILED = 'FAILED';
    const UNKNOWN = 'UNKNOWN';
    const ACCEPTD = 'ACCEPTD';
    const REJECTD = 'REJECTD';
    const DELETED = 'DELETED';
    const EXPIRED = 'EXPIRED';
    const NACK = 'NACK';
    const SEEN = 'SEEN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACK,
            self::DELIVRD,
            self::UNDELIV,
            self::FAILED,
            self::UNKNOWN,
            self::ACCEPTD,
            self::REJECTD,
            self::DELETED,
            self::EXPIRED,
            self::NACK,
            self::SEEN,
        ];
    }
}

