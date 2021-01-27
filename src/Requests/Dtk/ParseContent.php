<?php

namespace Dtk\Requests\Dtk;

use Dtk\Requests\DtkRequest;

/**
 * 淘系万能解析
 */
class ParseContent extends DtkRequest
{
    public $version = 'v1.0.0';
    public $api = 'tb-service/parse-content';
    /**
     * 额外参数文档
     * @var string
     */
    public $extraParasDocs = <<<EXTRAPARASDOCS
|名称|类型|必须|说明|
| ------------ | ------------ | ------------ | ------------ |
|content|String|是|包含淘口令、链接的文本。优先解析淘口令，再按序解析每个链接，直至解出有效信息。如果淘口令失效或者不支持的类型的情况，会按顺序解析链接。如果存在解析失败，请再试一次|
EXTRAPARASDOCS;
    /**
     * 返回数据
     * @var string
     */
    public $resultDateDocs = <<<RESULTDATE
|名称|类型|示例值|说明|
| ------------ | ------------ | ------------ | ------------ |
|goodsId|String|625171500599|淘宝商品ID|
|originUrl|String|https://s.click.taobao.com/lHlLAxu|链接|
|originType|String|二合一券|链接中的信息类型|
|originInfo|String||链接中的信息|
|originInfo.title|String|鲜品屋广式月饼散装多口味流心送礼1020g双黄白莲蓉中秋月饼礼盒|商品标题|
|originInfo.shopName|String|臻味食品旗舰店|店铺名|
|originInfo.shopLogo|String|https://gw.alicdn.com//7c/bb/TB11e7nOFXXXXXDXpXXwu0bFXXX.png|店铺LOGO图|
|originInfo.image|String|https://img.alicdn.com/bao/uploaded/i3/1699225083/O1CN012kwBYi1nQ3owHYvGb_!!0-item_pic.jpg|商品主图|
|originInfo.startTime|String|2020-08-27 00:00:00|券开始时间|
|originInfo.endTime|String|2020-08-27 23:59:59|券结束时间|
|originInfo.amount|Number|10|券金额|
|originInfo.startFee|Number|29|券门槛金额|
|originInfo.price|Number|29.9|商品价格|
|originInfo.activityId|String|160429358dbc4d9f89a2d582f674bafb|券ID|
|originInfo.pid|String|mm_30330467_520850264_108918300378|PID|
|originInfo.status|Number|0|券状态。0:可用; 非0:不可用|
RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO
{
    "code":0,
    "msg":"成功",
    "data":{
        "commissionRate":40,
        "commissionType":"MKT",
        "goodsId":"625171500599",
        "originInfo":{
            "activityId":"160429358dbc4d9f89a2d582f674bafb",
            "amount":10,
            "endTime":"2020-08-27 23:59:59",
            "image":"https://img.alicdn.com/bao/uploaded/i3/1699225083/O1CN012kwBYi1nQ3owHYvGb_!!0-item_pic.jpg",
            "pid":"mm_30330467_520850264_108918300378",
            "price":29.9,
            "shopLogo":"https://gw.alicdn.com//7c/bb/TB11e7nOFXXXXXDXpXXwu0bFXXX.png",
            "shopName":"臻味食品旗舰店",
            "startFee":29,
            "startTime":"2020-08-27 00:00:00",
            "status":0,
            "title":"鲜品屋广式月饼散装多口味流心送礼1020g双黄白莲蓉中秋月饼礼盒"
        },
        "originType":"二合一券",
        "originUrl":"https://s.click.taobao.com/lHlLAxu"
    },
    "time":1598499586287
}
RESULTINFO;

}