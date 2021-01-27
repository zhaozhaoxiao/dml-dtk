<?php

namespace Dtk\Requests\Dtk;

use Dtk\Requests\DtkRequest;

/**
 * 热门活动
 */
class ActivityCatalogue extends DtkRequest
{
    public $version = 'v1.1.0';
    public $api = '/goods/activity/catalogue';
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
|activityId|Number|32549|活动ID|
|activityName|String|“双11定金预售”|活动名称|
|startTime|Date|2019-10-22 11:00:00|活动开始时间|
|endTime|Date|2019-10-25 11:00:00|活动结束时间|
|goodsType|Number|1|活动商品类型 1.非定金商品 2.定金商品 3.付付定返红包|
|goodsLabel|String|“img.alicdn.com/imgextra/i2/4014489195/O1CN01kYlVPs2HnMKYwLLRm_!!4014489195.jpg”|单品标签图片|
|detailLabel|String|“img.alicdn.com/imgextra/i2/4014489195/O1CN01kYlVPs2HnMKYwLLRm_!!4014489195.jpg”|商详页标签图片|
RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO
{
    "time": 1571379413617,
    "code": 0,
    "msg": "成功",
    "data": [
        {
            "activityId": 6,
            "activityName": "双11定金预售",
            "startTime": "2019-10-17 11:13:16",
            "endTime": "2019-11-10 21:59:59",
            "goodsLabel": "https://thumbnail.dataoke.com/img/dtk/market/201910/2019101613543885366198.png",
            "detailLabel": "https://thumbnail.dataoke.com/img/dtk/market/201910/2019101613544427371014.png",
            "goodsType": 2
        }
    ]
}
RESULTINFO;

}