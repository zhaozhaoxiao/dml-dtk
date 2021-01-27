<?php

namespace Dtk\Requests\Dtk;

use Dtk\Requests\DtkRequest;

/**
 * 热搜记录
 */
class GetTop100 extends DtkRequest
{
    public $version = 'v1.0.1';
    public $api = '/category/get-top100';
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
|hotWords|Array|“螺蛳粉”, “耳机”|热搜词集合|
RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO
{
    "status":200,
    "data":{
        "time":1589009505575,
        "code":0,
        "msg":"成功",
        "data":{
            "hotWords":[
                "螺蛳粉",
                "口罩",
                "面膜",
                "耳机",
                "柳江人家",
                "洗脸巾",
                "电子秤"
            ]
        }
    },
    "msg":"请求成功"
}
RESULTINFO;

}