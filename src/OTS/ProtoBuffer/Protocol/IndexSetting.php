<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store_search.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.IndexSetting</code>
 */
class IndexSetting extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>optional int32 number_of_shards = 1;</code>
     */
    private $number_of_shards = 0;
    private $has_number_of_shards = false;
    /**
     * Generated from protobuf field <code>repeated string routing_fields = 2;</code>
     */
    private $routing_fields;
    private $has_routing_fields = false;
    /**
     * Generated from protobuf field <code>optional int32 routing_partition_size = 3;</code>
     */
    private $routing_partition_size = 0;
    private $has_routing_partition_size = false;

    public function __construct() {
        \GPBMetadata\TableStoreSearch::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>optional int32 number_of_shards = 1;</code>
     * @return int
     */
    public function getNumberOfShards()
    {
        return $this->number_of_shards;
    }

    /**
     * Generated from protobuf field <code>optional int32 number_of_shards = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNumberOfShards($var)
    {
        GPBUtil::checkInt32($var);
        $this->number_of_shards = $var;
        $this->has_number_of_shards = true;

        return $this;
    }

    public function hasNumberOfShards()
    {
        return $this->has_number_of_shards;
    }

    /**
     * Generated from protobuf field <code>repeated string routing_fields = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoutingFields()
    {
        return $this->routing_fields;
    }

    /**
     * Generated from protobuf field <code>repeated string routing_fields = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoutingFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->routing_fields = $arr;
        $this->has_routing_fields = true;

        return $this;
    }

    public function hasRoutingFields()
    {
        return $this->has_routing_fields;
    }

    /**
     * Generated from protobuf field <code>optional int32 routing_partition_size = 3;</code>
     * @return int
     */
    public function getRoutingPartitionSize()
    {
        return $this->routing_partition_size;
    }

    /**
     * Generated from protobuf field <code>optional int32 routing_partition_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRoutingPartitionSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->routing_partition_size = $var;
        $this->has_routing_partition_size = true;

        return $this;
    }

    public function hasRoutingPartitionSize()
    {
        return $this->has_routing_partition_size;
    }

}
