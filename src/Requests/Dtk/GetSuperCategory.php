<?php

namespace Dtk\Requests\Dtk;

use Dtk\Requests\DtkRequest;

/**
 * 超级分类
 */
class GetSuperCategory extends DtkRequest
{
    public $version = 'v1.1.0';
    public $api = '/category/get-super-category';
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
|time|Number|1556418473705|时间戳|
|msg|String|成功|返回状态描述|
|cid|Number|1|一级分类ID，1 -女装，2 -母婴，3 -美妆，4 -居家日用，5 -鞋品，6 -美食，7 -文娱车品，8 -数码家电，9 -男装，10 -内衣，11 -箱包，12 -配饰，13 -户外运动，14 -家装家纺|
|cname|String|女装|一级分类名称|
|cpic|String|https://img.alicdn.com/imgextra/i1/2053469401/TB2oX82HL9TBuNjy0FcXXbeiFXa-2053469401.png|一级分类图标|
|subcid|Number|98713|二级分类Id，根据实际返回id为准|
|scname|String|T恤/短袖|二级分类名称|
|scpic|String|https://img.alicdn.com/imgextra/i1/2053469401/TB2oX82HL9TBuNjy0FcXXbeiFXa-2053469401.png|二级分类图标|
RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO
{
    "status":200,
    "data":{
        "time":1589010833075,
        "code":0,
        "msg":"成功",
        "data":[
            {
                "cid":6,
                "cname":"美食",
                "cpic":"https://img.alicdn.com/imgextra/i3/2053469401/O1CN01hKSnoI2JJhz2bCgzy_!!2053469401.png",
                "subcategories":[
                    {
                        "subcid":117944,
                        "subcname":"懒人速食",
                        "scpic":"https://img.alicdn.com/imgextra/i1/2053469401/TB2gO5rtr1YBuNjSszhXXcUsFXa-2053469401.png"
                    }
                ]
            }
        ]
    },
    "msg":"请求成功"
}
RESULTINFO;

}