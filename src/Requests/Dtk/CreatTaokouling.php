<?php

namespace Dtk\Requests\Dtk;

use Dtk\Requests\DtkRequest;

/**
 * 淘口令生成
 */
class CreatTaokouling extends DtkRequest
{
    public $version = 'v1.0.0';
    public $api = '/tb-service/creat-taokouling';
    /**
     * 额外参数文档
     * @var string
     */
    public $extraParasDocs = <<<EXTRAPARASDOCS
|名称|类型|必须|说明|
| ------------ | ------------ | ------------ | ------------ |
|text|String|是|口令弹框内容，长度大于5个字符|
|url|String|是|口令跳转目标页，如：https://uland.taobao.com/，必须以https开头，可以是二合一链接、长链接、短链接等各种淘宝高佣链接；支持渠道备案链接。* 该参数需要进行Urlencode编码后传入*|
|logo|String|否|口令弹框logoURL|
|userId|String|否|生成口令的淘宝用户ID，非必传参数|
EXTRAPARASDOCS;
    /**
     * 返回数据
     * @var string
     */
    public $resultDateDocs = <<<RESULTDATE
|名称|类型|示例值|说明|
| ------------ | ------------ | ------------ | ------------ |
|model|String|￥AADPOKFz￥|淘口令|
RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO
{
    "time":1595571876289,
    "code":0,
    "msg":"成功",
    "data":{
        "model":"￥dGvu1ArDrQc￥"
    }
}
RESULTINFO;

}