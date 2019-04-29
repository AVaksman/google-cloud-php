<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class ProfileService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Histogram::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Profile::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adb160a31676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f70726f66696c655f736572766963652e70726f746f121b676f6f67" .
            "6c652e636c6f75642e74616c656e742e763462657461311a28676f6f676c" .
            "652f636c6f75642f74616c656e742f763462657461312f636f6d6d6f6e2e" .
            "70726f746f1a29676f6f676c652f636c6f75642f74616c656e742f763462" .
            "657461312f66696c746572732e70726f746f1a2b676f6f676c652f636c6f" .
            "75642f74616c656e742f763462657461312f686973746f6772616d2e7072" .
            "6f746f1a29676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f70726f66696c652e70726f746f1a1b676f6f676c652f70726f746f" .
            "6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f62" .
            "75662f6669656c645f6d61736b2e70726f746f227b0a134c69737450726f" .
            "66696c657352657175657374120e0a06706172656e741801200128091212" .
            "0a0a706167655f746f6b656e18022001280912110a09706167655f73697a" .
            "65180320012805122d0a09726561645f6d61736b18042001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e4669656c644d61736b22670a144c69" .
            "737450726f66696c6573526573706f6e736512360a0870726f66696c6573" .
            "18012003280b32242e676f6f676c652e636c6f75642e74616c656e742e76" .
            "3462657461312e50726f66696c6512170a0f6e6578745f706167655f746f" .
            "6b656e180220012809225d0a1443726561746550726f66696c6552657175" .
            "657374120e0a06706172656e7418012001280912350a0770726f66696c65" .
            "18022001280b32242e676f6f676c652e636c6f75642e74616c656e742e76" .
            "3462657461312e50726f66696c6522210a1147657450726f66696c655265" .
            "7175657374120c0a046e616d65180120012809227e0a1455706461746550" .
            "726f66696c655265717565737412350a0770726f66696c6518012001280b" .
            "32242e676f6f676c652e636c6f75642e74616c656e742e76346265746131" .
            "2e50726f66696c65122f0a0b7570646174655f6d61736b18022001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22240a" .
            "1444656c65746550726f66696c6552657175657374120c0a046e616d6518" .
            "012001280922fc020a1553656172636850726f66696c6573526571756573" .
            "74120e0a06706172656e7418012001280912460a10726571756573745f6d" .
            "6574616461746118022001280b322c2e676f6f676c652e636c6f75642e74" .
            "616c656e742e763462657461312e526571756573744d6574616461746112" .
            "400a0d70726f66696c655f717565727918032001280b32292e676f6f676c" .
            "652e636c6f75642e74616c656e742e763462657461312e50726f66696c65" .
            "517565727912110a09706167655f73697a6518042001280512120a0a7061" .
            "67655f746f6b656e180520012809120e0a066f6666736574180620012805" .
            "121b0a1364697361626c655f7370656c6c5f636865636b18072001280812" .
            "100a086f726465725f6279180820012809121b0a13636173655f73656e73" .
            "69746976655f736f727418092001280812460a11686973746f6772616d5f" .
            "71756572696573180a2003280b322b2e676f6f676c652e636c6f75642e74" .
            "616c656e742e763462657461312e486973746f6772616d517565727922fc" .
            "020a1653656172636850726f66696c6573526573706f6e7365121c0a1465" .
            "7374696d617465645f746f74616c5f73697a6518012001280312490a1073" .
            "70656c6c5f636f7272656374696f6e18022001280b322f2e676f6f676c65" .
            "2e636c6f75642e74616c656e742e763462657461312e5370656c6c696e67" .
            "436f7272656374696f6e123f0a086d6574616461746118032001280b322d" .
            "2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e52" .
            "6573706f6e73654d6574616461746112170a0f6e6578745f706167655f74" .
            "6f6b656e18042001280912520a17686973746f6772616d5f71756572795f" .
            "726573756c747318052003280b32312e676f6f676c652e636c6f75642e74" .
            "616c656e742e763462657461312e486973746f6772616d51756572795265" .
            "73756c74124b0a1373756d6d6172697a65645f70726f66696c6573180620" .
            "03280b322e2e676f6f676c652e636c6f75642e74616c656e742e76346265" .
            "7461312e53756d6d6172697a656450726f66696c652282010a1153756d6d" .
            "6172697a656450726f66696c6512360a0870726f66696c65731801200328" .
            "0b32242e676f6f676c652e636c6f75642e74616c656e742e763462657461" .
            "312e50726f66696c6512350a0773756d6d61727918022001280b32242e67" .
            "6f6f676c652e636c6f75642e74616c656e742e763462657461312e50726f" .
            "66696c6532ff070a0e50726f66696c655365727669636512ac010a0c4c69" .
            "737450726f66696c657312302e676f6f676c652e636c6f75642e74616c65" .
            "6e742e763462657461312e4c69737450726f66696c657352657175657374" .
            "1a312e676f6f676c652e636c6f75642e74616c656e742e76346265746131" .
            "2e4c69737450726f66696c6573526573706f6e7365223782d3e493023112" .
            "2f2f763462657461312f7b706172656e743d70726f6a656374732f2a2f74" .
            "656e616e74732f2a7d2f70726f66696c657312a4010a0d43726561746550" .
            "726f66696c6512312e676f6f676c652e636c6f75642e74616c656e742e76" .
            "3462657461312e43726561746550726f66696c65526571756573741a242e" .
            "676f6f676c652e636c6f75642e74616c656e742e763462657461312e5072" .
            "6f66696c65223a82d3e4930234222f2f763462657461312f7b706172656e" .
            "743d70726f6a656374732f2a2f74656e616e74732f2a7d2f70726f66696c" .
            "65733a012a129b010a0a47657450726f66696c65122e2e676f6f676c652e" .
            "636c6f75642e74616c656e742e763462657461312e47657450726f66696c" .
            "65526571756573741a242e676f6f676c652e636c6f75642e74616c656e74" .
            "2e763462657461312e50726f66696c65223782d3e4930231122f2f763462" .
            "657461312f7b6e616d653d70726f6a656374732f2a2f74656e616e74732f" .
            "2a2f70726f66696c65732f2a7d12ac010a0d55706461746550726f66696c" .
            "6512312e676f6f676c652e636c6f75642e74616c656e742e763462657461" .
            "312e55706461746550726f66696c65526571756573741a242e676f6f676c" .
            "652e636c6f75642e74616c656e742e763462657461312e50726f66696c65" .
            "224282d3e493023c32372f763462657461312f7b70726f66696c652e6e61" .
            "6d653d70726f6a656374732f2a2f74656e616e74732f2a2f70726f66696c" .
            "65732f2a7d3a012a1293010a0d44656c65746550726f66696c6512312e67" .
            "6f6f676c652e636c6f75642e74616c656e742e763462657461312e44656c" .
            "65746550726f66696c65526571756573741a162e676f6f676c652e70726f" .
            "746f6275662e456d707479223782d3e49302312a2f2f763462657461312f" .
            "7b6e616d653d70726f6a656374732f2a2f74656e616e74732f2a2f70726f" .
            "66696c65732f2a7d12b3010a0e53656172636850726f66696c657312322e" .
            "676f6f676c652e636c6f75642e74616c656e742e763462657461312e5365" .
            "6172636850726f66696c6573526571756573741a332e676f6f676c652e63" .
            "6c6f75642e74616c656e742e763462657461312e53656172636850726f66" .
            "696c6573526573706f6e7365223882d3e4930232222d2f76346265746131" .
            "2f7b706172656e743d70726f6a656374732f2a2f74656e616e74732f2a7d" .
            "3a7365617263683a012a4281010a1f636f6d2e676f6f676c652e636c6f75" .
            "642e74616c656e742e76346265746131421350726f66696c655365727669" .
            "636550726f746f50015a41676f6f676c652e676f6c616e672e6f72672f67" .
            "656e70726f746f2f676f6f676c65617069732f636c6f75642f74616c656e" .
            "742f763462657461313b74616c656e74a20203435453620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
