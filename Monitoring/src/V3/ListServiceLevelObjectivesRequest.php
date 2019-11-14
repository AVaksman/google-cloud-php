<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListServiceLevelObjectives` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListServiceLevelObjectivesRequest</code>
 */
class ListServiceLevelObjectivesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the parent `Service`.
     * Of the form `projects/{project_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * A filter specifying what `ServiceLevelObjective`s to return.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * A non-negative number that is the maximum number of results to return.
     * When 0, use default page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * View of the `ServiceLevelObjective`s to return. If `DEFAULT`, return each
     * `ServiceLevelObjective` as originally defined. If `EXPLICIT` and the
     * `ServiceLevelObjective` is defined in terms of a `BasicSli`, replace the
     * `BasicSli` with a `RequestBasedSli` spelling out how the SLI is computed.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ServiceLevelObjective.View view = 5;</code>
     */
    private $view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Resource name of the parent `Service`.
     *           Of the form `projects/{project_id}/services/{service_id}`.
     *     @type string $filter
     *           A filter specifying what `ServiceLevelObjective`s to return.
     *     @type int $page_size
     *           A non-negative number that is the maximum number of results to return.
     *           When 0, use default page size.
     *     @type string $page_token
     *           If this field is not empty then it must contain the `nextPageToken` value
     *           returned by a previous call to this method.  Using this field causes the
     *           method to return additional results from the previous method call.
     *     @type int $view
     *           View of the `ServiceLevelObjective`s to return. If `DEFAULT`, return each
     *           `ServiceLevelObjective` as originally defined. If `EXPLICIT` and the
     *           `ServiceLevelObjective` is defined in terms of a `BasicSli`, replace the
     *           `BasicSli` with a `RequestBasedSli` spelling out how the SLI is computed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\ServiceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the parent `Service`.
     * Of the form `projects/{project_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Resource name of the parent `Service`.
     * Of the form `projects/{project_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * A filter specifying what `ServiceLevelObjective`s to return.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter specifying what `ServiceLevelObjective`s to return.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * A non-negative number that is the maximum number of results to return.
     * When 0, use default page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * A non-negative number that is the maximum number of results to return.
     * When 0, use default page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * View of the `ServiceLevelObjective`s to return. If `DEFAULT`, return each
     * `ServiceLevelObjective` as originally defined. If `EXPLICIT` and the
     * `ServiceLevelObjective` is defined in terms of a `BasicSli`, replace the
     * `BasicSli` with a `RequestBasedSli` spelling out how the SLI is computed.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ServiceLevelObjective.View view = 5;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * View of the `ServiceLevelObjective`s to return. If `DEFAULT`, return each
     * `ServiceLevelObjective` as originally defined. If `EXPLICIT` and the
     * `ServiceLevelObjective` is defined in terms of a `BasicSli`, replace the
     * `BasicSli` with a `RequestBasedSli` spelling out how the SLI is computed.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ServiceLevelObjective.View view = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Monitoring\V3\ServiceLevelObjective_View::class);
        $this->view = $var;

        return $this;
    }

}

