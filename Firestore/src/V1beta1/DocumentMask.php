<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/common.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of field paths on a document.
 * Used to restrict a get or update operation on a document to a subset of its
 * fields.
 * This is different from standard field masks, as this is always scoped to a
 * [Document][google.firestore.v1beta1.Document], and takes in account the
 * dynamic nature of [Value][google.firestore.v1beta1.Value].
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.DocumentMask</code>
 */
class DocumentMask extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of field paths in the mask. See
     * [Document.fields][google.firestore.v1beta1.Document.fields] for a field
     * path syntax reference.
     *
     * Generated from protobuf field <code>repeated string field_paths = 1;</code>
     */
    private $field_paths;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $field_paths
     *           The list of field paths in the mask. See
     *           [Document.fields][google.firestore.v1beta1.Document.fields] for a field
     *           path syntax reference.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of field paths in the mask. See
     * [Document.fields][google.firestore.v1beta1.Document.fields] for a field
     * path syntax reference.
     *
     * Generated from protobuf field <code>repeated string field_paths = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldPaths()
    {
        return $this->field_paths;
    }

    /**
     * The list of field paths in the mask. See
     * [Document.fields][google.firestore.v1beta1.Document.fields] for a field
     * path syntax reference.
     *
     * Generated from protobuf field <code>repeated string field_paths = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->field_paths = $arr;

        return $this;
    }

}

