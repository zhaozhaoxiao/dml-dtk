<?php

namespace Dtk\Requests\Dtk;

use Dtk\Requests\DtkRequest;

/**
 * 品牌库
 */
class GetBrandList extends DtkRequest
{
    public $version = 'v1.1.1';
    public $api = '/tb-service/get-brand-list';
    /**
     * 额外参数文档
     * @var string
     */
    public $extraParasDocs = <<<EXTRAPARASDOCS
|名称|类型|必须|说明|
| ------------ | ------------ | ------------ | ------------ |
|pageId|String|是|页码|
|pageSize|Number|否|每页条数，默认为20，最大值100|
EXTRAPARASDOCS;
    /**
     * 返回数据
     * @var string
     */
    public $resultDateDocs = <<<RESULTDATE
|名称|类型|示例值|说明|
| ------------ | ------------ | ------------ | ------------ |
|brandId|String|3224818|品牌ID|
|brandName|String|背靠背|品牌名称|
|brandLogo|String|https://img.alicdn.com/bao/uploaded///img.taobaocdn.com/tps/TB1xENRpf2H8KJjy1zkXXXr7pXa|品牌logo|
|brandEnglish|String|Kappa|品牌英文名称|
|name|String|Kappa官方旗舰店|旗舰店铺名称|
|sellerId|Number|285492195|店铺ID|
|brandScore|Number|3|店铺评分|
|location|String|北京|发源地|
|establishTime|String|1987|创立时间|
|belong|String|北京动向体育发展有限公司|所属公司|
|position|String|1|品牌定位：1. 奢侈 2.轻奢 3.大众|
|consumer|String|18-35岁年轻男女|消费群体|
|label|String|运动|特色标签|
|simpleLabel|String|国际运动及休闲服装品牌|一句话评价|
|cids|String|运动服装|主营类目（可能有多个主营类目，用逗号隔开）|
RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO
{
    "status": 200,
    "data": {
        "time": 1589007085553,
        "code": 0,
        "msg": "成功",
        "data": [
            {
                "brandId": 30844,
                "brandName": "苏泊尔",
                "brandLogo": "https://img.alicdn.com/bao/uploaded///img.taobaocdn.com/tps/TB14WGENSzqK1RjSZFjXXblCFXa",
                "brandEnglish": "SUPOR",
                "shop": [
                    {
                        "name": "苏泊尔官方旗舰店",
                        "sellerId": "160586276"
                    },
                    {
                        "name": "苏泊尔餐具旗舰店",
                        "sellerId": "2157661959"
                    },
                    {
                        "name": "苏泊尔炊具旗舰店",
                        "sellerId": "699994102"
                    },
                    {
                        "name": "苏泊尔厨卫旗舰店",
                        "sellerId": "2206536710635"
                    },
                    {
                        "name": "苏泊尔厨房电器旗舰店",
                        "sellerId": "2206573316203"
                    },
                    {
                        "name": "苏泊尔生活电器旗舰",
                        "sellerId": "2206604687182"
                    },
                    {
                        "name": "苏宁易购官方旗舰店",
                        "sellerId": "2616970884"
                    }
                ],
                "brandScore": 5,
                "location": "浙江省台州市",
                "establishTime": "1994年",
                "belongTo": "浙江苏泊尔股份有限公司；旗下：苏泊尔、Tefal、WMF、拉歌蒂尼",
                "position": "3",
                "consumer": "普通家庭",
                "label": "['2018年销售额超过68亿欧元','5大研发制造基地','6320 项专利技术']",
                "simpleLabel": "中国炊具行业首家上市公司",
                "cids": "8"
            }
        ]
    },
    "msg": "请求成功"
}
RESULTINFO;

}