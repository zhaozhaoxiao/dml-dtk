<?php
declare (strict_types=1);

namespace Dtk\Requests;

use Dtk\Util\ArrayObject;

abstract class DtkRequest
{
    use ArrayObject;

    /**
     * 接口版本号
     * @var string
     */
    public $version = '';
    /**
     * 接口版本号
     * @var string
     */
    public $requestMethod = 'GET';
    /**
     * 接口地址
     * @var string
     */
    public $gateway = 'https://openapi.dataoke.com/api';
    /**
     * 接口链接
     * @var string
     */
    public $api = '';

    /**
     * 额外参数
     * @var array|object
     */
    public $extraParas = [];

    /**
     * 接口返回数据
     * @var array|object|string
     */
    public $apiData = [];
    /**
     * 公共参数
     * @var array|object
     */
    public $apiParas = [];
    /**
     * 公共参数文档
     * @var string
     */
    public $apiParasDocs = <<<APIPARAS
|名称|类型|必须|说明|
| ------------ | ------------ | ------------ | ------------ |
|appKey|String|**是**|应用的唯一验证|
|version|String|**是**|API接口版本号|
APIPARAS;
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

RESULTDATE;
    /**
     * 返回示例
     * @var string
     */
    public $resultInfoDocs = <<<RESULTINFO

RESULTINFO;

    /**
     * 常见错误码
     * @var string
     */
    public $commonErrorsCodeDocs = <<<COMMONERRORSCODE
{
    msg: "服务器错误",
    code: -1,
    time: 1554365022200
}
COMMONERRORSCODE;

    /**
     * 错误码列表
     * @var string
     */
    public $ErrorsCodeListDocs = <<<ERRORSCODELIST
|错误码编码|错误码信息|解决问题办法|
| ------------ | ------------ | ------------ |
|-1|服务器错误|稍后尝试访问|
|1|参数错误|请根据msg提示信息进行修改|
ERRORSCODELIST;

    /**
     * 设置公共参数
     * @param array $apiParas
     *
     * @return self
     */
    public function setApiParas(array $apiParas): self
    {
        $this->apiParas = $apiParas;
        return $this;
    }

    /**
     * 设置额外参数
     * @param array $extraParas
     */
    public function setExtraParas(array $extraParas)
    {
        foreach ($extraParas as $keys => $vals) {
            $this->extraParas[$keys] = $vals;
        }
        return $this;
    }

    /**
     * 获取接口请求参数
     *
     * @return array
     */
    public function getRequestParas(): array
    {
        return array_merge((array)$this->apiParas, (array)$this->extraParas);
    }

    /**
     * 请求到的数据处理
     */
    public function DataProcessing($data)
    {
        $data = json_decode($data, true);

        if (empty($data['data'])) {
            $this->error = $data['msg'];

            $this->apiData = array();
        } else {
            $this->apiData = $data['data'];
        }
    }

    /**
     * 错误码检查
     */
    protected function ErrorCode(int $code)
    {
        if ($code == 0) {
            return true;
        } else {
            return false;
        }
    }
}