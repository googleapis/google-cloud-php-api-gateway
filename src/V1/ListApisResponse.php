<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigateway/v1/apigateway.proto

namespace Google\Cloud\ApiGateway\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ApiGatewayService.ListApis
 *
 * Generated from protobuf message <code>google.cloud.apigateway.v1.ListApisResponse</code>
 */
class ListApisResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * APIs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigateway.v1.Api apis = 1;</code>
     */
    private $apis;
    /**
     * Next page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable_locations = 3;</code>
     */
    private $unreachable_locations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ApiGateway\V1\Api>|\Google\Protobuf\Internal\RepeatedField $apis
     *           APIs.
     *     @type string $next_page_token
     *           Next page token.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable_locations
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigateway\V1\Apigateway::initOnce();
        parent::__construct($data);
    }

    /**
     * APIs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigateway.v1.Api apis = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApis()
    {
        return $this->apis;
    }

    /**
     * APIs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apigateway.v1.Api apis = 1;</code>
     * @param array<\Google\Cloud\ApiGateway\V1\Api>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApis($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ApiGateway\V1\Api::class);
        $this->apis = $arr;

        return $this;
    }

    /**
     * Next page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Next page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable_locations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachableLocations()
    {
        return $this->unreachable_locations;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable_locations = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachableLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable_locations = $arr;

        return $this;
    }

}

