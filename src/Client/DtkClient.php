<?php

namespace Dtk\Client;

use Dtk\Requests\BindSteategyClass;
use Dtk\Http\Http;
use Dtk\Requests\DtkRequest;
use Dtk\Util\ArrayObject;

/**
 * v1.0.0
 */
class DtkClient
{
    /**
     * 大淘客平台的AppKey和AppSecret
     */
    private $appKey = '';
    private $appSecret = '';
    /**
     * 策略对象
     * @var DtkRequest
     */
    private $strategyObj;
    //得到的数据类型 array,object,json
    private $dataType;

    /**
     * @param null $appKey
     * @param null $appSecret
     * @param string $dataType
     */
    public function __construct($appKey = null, $appSecret = null, $dataType = 'array')
    {
        if ($appKey) $this->appKey = $appKey;
        if ($appSecret) $this->appSecret = $appSecret;
        if ($dataType) $this->dataType = $dataType;
        // 执行初始化事件
        $this->onInitialize();
    }

    private function onInitialize()
    {
        if (!$this->appKey || !$this->appSecret) {
            throw new \InvalidArgumentException('AppKey和AppSecret不能为空');
        }
    }

    public function setSteategyObj(string $strategyObj, array $ExtraParas = []): self
    {
        $this->strategyObj = BindSteategyClass::$strategyObj();
        $ApiParas['appKey'] = $this->appKey;
        $ApiParas['version'] = $this->strategyObj->version;
        $this->strategyObj->setApiParas((array)$ApiParas);
        $this->strategyObj->setExtraParas($ExtraParas);
        return $this;
    }

    /**
     * 参数加密
     * @param $data
     * @return string
     */
    private function setSign($data): string
    {
        ksort($data);
        $str = '';
        foreach ($data as $k => $v) {
            $str .= '&' . $k . '=' . $v;
        }
        $str = trim($str, '&');
        $sign = strtoupper(md5($str . '&key=' . $this->appSecret));
        return $sign;
    }

    /**
     * 请求执行
     * @param array $requests
     * @return array|string|object
     */
    public function performRequests()
    {
        $request = $this->strategyObj->getRequestParas();
        $request['sign'] = $this->setSign($request);
        $data = Http::init()
            ->setUrl($this->strategyObj->gateway . $this->strategyObj->api)
            ->setData($request)
            ->setQuery($request)
            ->setMethod($this->strategyObj->requestMethod)
            ->execute();
        $this->strategyObj->DataProcessing($data);

        switch ($this->dataType) {
            case 'object':
                return ArrayObject::ArrayToObject($this->strategyObj->apiData);
            case 'json':
                return json_encode($this->strategyObj->apiData);
            case 'array':
            default:
        }

        return $this->strategyObj->apiData;
    }
    
}