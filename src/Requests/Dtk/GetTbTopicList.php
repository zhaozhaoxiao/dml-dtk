<?php

namespace Dtk\Requests\Dtk;

use Dtk\Requests\DtkRequest;

/**
 * 官方活动推广
 */
class GetTbTopicList extends DtkRequest
{
    public $version = 'v1.2.0';
    public $api = '/category/get-tb-topic-list';
    /**
     * 额外参数文档
     * @var string
     */
    public $extraParasDocs = <<<EXTRAPARASDOCS
|名称|类型|必须|说明|
| ------------ | ------------ | ------------ | ------------ |
|pageId|String|是|分页id，支持传统的页码分页方式|
|pageSize|Number|否|每页条数，默认为20|
|type|Number|否|输出的端口类型：0.全部（默认），1.PC，2.无线|
|channelID|Number|否|阿里妈妈上申请的渠道id|
EXTRAPARASDOCS;
    /**
     * 返回数据
     * @var string
     */
    public $resultDateDocs = <<<RESULTDATE
|名称|类型|示例值|说明|
| ------------ | ------------ | ------------ | ------------ |
|id|Number|1|活动id|
|promotionSceneId|String|20150318019999275|联盟官方活动ID（新增）|
|activityName|String|“聚划算-日常-品牌清仓”|活动名称|
|activityStartTime|String|“2020-03-02 00:00:00”|活动开始时间|
|activityEndTime|String|“2020-03-31 23:59:59”|活动结束时间|
|activityInfo|String|清仓info|活动信息|
|type|Number|1|端口类型|
|activityLink|String|https://pages.tmall.com/wow/a/act/ju/dailygroup/1241/wupr?spm=a219t.7664554.1998457203.137.1d2f35d9ylRex1&wh_pid=daily-183363&v=a223fb01fdc37f1dbced73f647eae5fd&wh_random_str=1?pid=mm_133066686_552000056_109002100173|活动链接|
|materialLink|String|“https://gw.alicdn.com/tfs/TB1iUMatQP2gK0jSZPxXXacQpXa-440-180.jpg“|素材链接|
RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO
{
    "status":200,
    "data":{
        "time":1588989308318,
        "code":0,
        "msg":"成功",
        "data":[
            {
                "id":69,
                "activityStartTime":"2020-03-29 00:00:00",
                "activityEndTime":"2020-12-31 23:59:59",
                "activityInfo":"拼手速，抢饿了么大额红包！",
                "type":2,
                "activityLink":"https://s.click.ele.me/t?&e=-s021HbGgPIsOrXt9yzcPJGkJZAx7sPpaPZWijE7cGKyqKcZWu9yNtIli2QLTJB6oHx7fXuiIibO70IXOPB9hcUSlrotSkn9LRYOXhGhsA8vIfU2kdLURQongs7qIHjS7yT961gMkBDx5T8DFJvPAwcU21Z2zkSVkBsvndnyxlgU1U0t3NGzn9MuUx4wUdbuV9Ono5HJOGO83NY3zhDRfANxkzAujPonGsjXUfPabVQokj5d7zEmJ32x4VQHRB0he8tPUlfNg0sPBKkM387SPUUKVeJOYkZ9vaBmTfVRR31Wtp72auu9d6c16wCdtheo6F7cmppPaZLTOhaExV7Ga7yHeOD5fNMwyDgpbl0weh5wECgrGvpENinGMInZJbe6K7JeF1W5Osb3Hkrb39YdWcJmaouuJ&&union_lens=lensId:0b0130fe_0d9d_171f479974a_b205",
                "materialLink":"https://gw.alicdn.com/tfs/TB1W0PEx4v1gK0jSZFFXXb0sXXa-800-451.png_640x480q60_.webp",
                "activityName":"饿了么福利红包每日领"
            }
        ]
    },
    "msg":"请求成功"
}
RESULTINFO;

}