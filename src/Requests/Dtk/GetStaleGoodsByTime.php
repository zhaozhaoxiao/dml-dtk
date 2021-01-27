<?php

namespace Dtk\Requests\Dtk;

use Dtk\Requests\DtkRequest;

/**
 * 失效商品
 */
class GetStaleGoodsByTime extends DtkRequest
{
    public $version = 'v1.0.1';
    public $api = '/goods/get-stale-goods-by-time';
    /**
     * 额外参数文档
     * @var string
     */
    public $extraParasDocs = <<<EXTRAPARASDOCS
|名称|类型|必须|说明|
| ------------ | ------------ | ------------ | ------------ |
|pageSize|Number|否|每页条数，默认为100，最大值200，若小于10，则按10条处理，每页条数仅支持输入10,50,100,200|
|pageId|String|是|分页id，默认为1，支持传统的页码分页方式和scroll_id分页方式，根据用户自身需求传入值。示例1：商品入库，则首次传入1，后续传入接口返回的pageid，接口将持续返回符合条件的完整商品列表，该方式可以避免入口商品重复；示例2：根据pagesize和totalNum计算出总页数，按照需求返回指定页的商品（该方式可能在临近页取到重复商品）|
|startTime|String|否|开始时间，默认为yyyy-mm-dd hh:mm:ss，商品下架的时间大于等于开始时间，开始时间需要在当日|
|endTime|String|否|结束时间，默认为请求的时间，商品下架的时间小于等于结束时间，结束时间需要在当日|
EXTRAPARASDOCS;
    /**
     * 返回数据
     * @var string
     */
    public $resultDateDocs = <<<RESULTDATE
|名称|类型|示例值|说明|
| ------------ | ------------ | ------------ | ------------ |
|id|Number|18926311|商品id|
|goodsId|String|589284195570|淘宝商品id|
RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO
{
    "time":1554711897417,
    "code":0,
    "msg":"成功",
    "data":{
        "list":[
            {
                "id":18926311,
                "goodsId":"589284195570"
            }
        ],
        "totalNum":16499,
        "pageId":"76679471048598b0"
    }
}
RESULTINFO;

}