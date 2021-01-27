<?php

namespace Dtk\Requests\Dtk;

use Dtk\Requests\DtkRequest;

/**
 * 联想词
 */
class SearchSuggestion extends DtkRequest
{
    public $version = 'v1.0.2';
    public $api = '/goods/search-suggestion';
    /**
     * 额外参数文档
     * @var string
     */
    public $extraParasDocs = <<<EXTRAPARASDOCS
|名称|类型|必须|说明|
| ------------ | ------------ | ------------ | ------------ |
|keyWords|String|是|关键词|
|type|Number|是|当前搜索API类型：1.大淘客搜索 2.联盟搜索 3.超级搜索|
EXTRAPARASDOCS;
    /**
     * 返回数据
     * @var string
     */
    public $resultDateDocs = <<<RESULTDATE
|名称|类型|示例值|说明|
| ------------ | ------------ | ------------ | ------------ |
|kw|String|裙子夏2019新款|联想词|
|total|Number|165|对应联想词的商品数量（仅大淘客搜索返回该参数，当使用接口参数为2和3时，不会返回该字段）|
RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO
{
    "status":200,
    "data":{
        "time":1589007492807,
        "code":0,
        "msg":"成功",
        "data":[
            {
                "kw":"裙子套装",
                "total":128
            }
        ]
    },
    "msg":"请求成功"
}
RESULTINFO;

}