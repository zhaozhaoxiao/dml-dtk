<?php

namespace Dtk\Requests\Dtk;

use Dtk\Requests\DtkRequest;

/**
 * 精选专题
 */
class TopicCatalogue extends DtkRequest
{
    public $version = 'v1.1.0';
    public $api = '/goods/topic/catalogue';
    /**
     * 额外参数文档
     * @var string
     */
    public $extraParasDocs = <<<EXTRAPARASDOCS

EXTRAPARASDOCS;
    /**
     * 返回数据
     * @var string
     */
    public $resultDateDocs = <<<RESULTDATE
|名称|类型|示例值|说明|
| ------------ | ------------ | ------------ | ------------ |
|topicId|Number|32549|活动ID|
|topicName|String|双11定金预售|活动名称|
|startTime|Date|2019-10-22 11:00:00|活动开始时间|
|endTime|Date|2019-10-25 11:00:00|活动结束时间|
|banner|list|“banner”: [“https://img.alicdn.com/imgextra/i3/2053469401/O1CN017nk61o2JJhynllMEo_!!2053469401.jpg|专题宣传图，用于首页banner或者其他资源位的展示。如果有两张，分别用于pc端和移动端。请参照尺寸适配|
|topBanner|list|“banner”: [“https://img.alicdn.com/imgextra/i3/2053469401/O1CN017nk61o2JJhynllMEo_!!2053469401.jpg|专题活动详情内顶部图片，如果有两张，分别用于pc端和移动端。请参照尺寸适配 *新增字段*|
RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO
{
    "time":1597917638561,
    "code":0,
    "msg":"成功",
    "data":[
        {
            "topicId":1611,
            "topicName":"30而已",
            "startTime":"2020-08-14T03:36:00.000+0000",
            "endTime":"2020-08-22T16:00:00.000+0000",
            "banner":[
                "https://img.alicdn.com/imgextra/i1/2053469401/O1CN01E9sYqr2JJi1yi5WIP_!!2053469401.jpg",
                "https://img.alicdn.com/imgextra/i4/2053469401/O1CN01MR31f82JJi1oE8PMv_!!2053469401.jpg"
            ],
            "topBanner":[
                "http://yy.ffquan.cn/dtk_yunying/20200814/4c550c06cc1ed59ed86b921bfa62774c0.jpg",
                "http://yy.ffquan.cn/dtk_yunying/20200814/2ba474e5247b304dfd00fca79e52ed350.jpg"
            ]
        }
    ]
}
RESULTINFO;

}