<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/io.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input configuration for BatchPredict Action.
 * The format of input depends on the ML problem of the model used for
 * prediction. As input source the
 * [gcs_source][google.cloud.automl.v1.InputConfig.gcs_source]
 * is expected, unless specified otherwise.
 * The formats are represented in EBNF with commas being literal and with
 * non-terminal symbols defined near the end of this comment. The formats
 * are:
 * <h4>AutoML Natural Language</h4>
 * <div class="ds-selector-tabs"><section><h5>Classification</h5>
 * One or more CSV files where each line is a single column:
 *     GCS_FILE_PATH
 * `GCS_FILE_PATH` is the Google Cloud Storage location of a text file.
 * Supported file extensions: .TXT, .PDF
 * Text files can be no larger than 10MB in size.
 * Sample rows:
 *     gs://folder/text1.txt
 *     gs://folder/text2.pdf
 * </section><section><h5>Sentiment Analysis</h5>
 * One or more CSV files where each line is a single column:
 *     GCS_FILE_PATH
 * `GCS_FILE_PATH` is the Google Cloud Storage location of a text file.
 * Supported file extensions: .TXT, .PDF
 * Text files can be no larger than 128kB in size.
 * Sample rows:
 *     gs://folder/text1.txt
 *     gs://folder/text2.pdf
 * </section><section><h5>Entity Extraction</h5>
 * One or more JSONL (JSON Lines) files that either provide inline text or
 * documents. You can only use one format, either inline text or documents,
 * for a single call to [AutoMl.BatchPredict].
 * Each JSONL file contains a per line a proto that
 * wraps a temporary user-assigned TextSnippet ID (string up to 2000
 * characters long) called "id", a TextSnippet proto (in
 * JSON representation) and zero or more TextFeature protos. Any given
 * text snippet content must have 30,000 characters or less, and also
 * be UTF-8 NFC encoded (ASCII already is). The IDs provided should be
 * unique.
 * Each document JSONL file contains, per line, a proto that wraps a
 * Document proto with `input_config` set. Only PDF documents are
 * currently supported, and each PDF document cannot exceed 2MB in size.
 * Each JSONL file must not exceed 100MB in size, and no more than 20
 * JSONL files may be passed.
 * Sample inline JSONL file (Shown with artificial line
 * breaks. Actual line breaks are denoted by "\n".):
 *     {
 *        "id": "my_first_id",
 *        "text_snippet": { "content": "dog car cat"},
 *        "text_features": [
 *          {
 *            "text_segment": {"start_offset": 4, "end_offset": 6},
 *            "structural_type": PARAGRAPH,
 *            "bounding_poly": {
 *              "normalized_vertices": [
 *                {"x": 0.1, "y": 0.1},
 *                {"x": 0.1, "y": 0.3},
 *                {"x": 0.3, "y": 0.3},
 *                {"x": 0.3, "y": 0.1},
 *              ]
 *            },
 *          }
 *        ],
 *      }\n
 *      {
 *        "id": "2",
 *        "text_snippet": {
 *          "content": "Extended sample content",
 *          "mime_type": "text/plain"
 *        }
 *      }
 * Sample document JSONL file (Shown with artificial line
 * breaks. Actual line breaks are denoted by "\n".):
 *      {
 *        "document": {
 *          "input_config": {
 *            "gcs_source": { "input_uris": [ "gs://folder/document1.pdf" ]
 *            }
 *          }
 *        }
 *      }\n
 *      {
 *        "document": {
 *          "input_config": {
 *            "gcs_source": { "input_uris": [ "gs://folder/document2.pdf" ]
 *            }
 *          }
 *        }
 *      }
 *   </section>
 * </div>
 * **Input field definitions:**
 * `GCS_FILE_PATH`
 * : The path to a file on Google Cloud Storage. For example,
 *   "gs://folder/video.avi".
 *  **Errors:**
 *  If any of the provided CSV files can't be parsed or if more than certain
 *  percent of CSV rows cannot be processed then the operation fails and
 *  prediction does not happen. Regardless of overall success or failure the
 *  per-row failures, up to a certain count cap, will be listed in
 *  Operation.metadata.partial_failures.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.BatchPredictInputConfig</code>
 */
class BatchPredictInputConfig extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1\GcsSource $gcs_source
     *           Required. The Google Cloud Storage location for the input content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.GcsSource gcs_source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1\GcsSource
     */
    public function getGcsSource()
    {
        return $this->readOneof(1);
    }

    /**
     * Required. The Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.GcsSource gcs_source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\GcsSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}
