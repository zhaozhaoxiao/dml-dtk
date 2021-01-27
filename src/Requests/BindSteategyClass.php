<?php

namespace Dtk\Requests;

use Dtk\Util\DocParserFactory;
use Dtk\Util\Colors;
use Dtk\Util\JsonFormat;

trait BindSteategyClass
{
    use DocParserFactory;
    use JsonFormat;
    function __call($name, $arguments)
    {
        return self::BindClass($name);
    }

    static function __callStatic($name, $arguments)
    {
        return self::BindClass($name);
    }
    /**
     * @return DtkRequest
     */
    static function BindClass($name)
    {
        try {
            $namespace = "Dtk\\Requests\\Dtk\\" . $name;
            $class = new $namespace;
        } catch (\Error $e) {
            throw new \Error("当前策略不存在");
        }
        return $class;
    }

    static function GetAllSteategy($apiname = null)
    {
        $str = opendir(__DIR__ . '/dtk');//指定获取此目录下的文件及文件夹列表

        while (($filename = readdir($str)) !== false) {
            if ($filename != "." && $filename != "..") {
                //判断是否是文件，文件放在文件列表数组中，子文件夹放在子文件夹列表数组中
                if (is_file(__DIR__ . '/dtk/' . $filename)) {
                    $file_array[] = substr($filename, 0, strlen($filename) - 4);
                }
            }
        }
        closedir($str);

        $func = function ($classname) use ($apiname) {
            $steategy = self::BindClass($classname);
            $reflection = new \ReflectionClass ($steategy);
            //通过反射获取类的注释
            $class_doc = $reflection->getDocComment();
            //解析类的注释头
            $parase_result = self::getInstance()->parse($class_doc);

            if ($apiname && $apiname != '' && $apiname != []) {
                if (is_string($apiname) && $parase_result['long_description'] != $apiname) {
                    return true;
                } elseif (is_array($apiname) && !in_array($parase_result['long_description'], $apiname)) {
                    return true;
                }
            }

            $colors = new Colors();
            echo "[\n";
            echo $colors->getColoredString("    策略名称:   ", "blue") . "$classname\n";
            echo $colors->getColoredString("    接口名称:   ", "blue") . "{$parase_result['long_description']}\n";
            echo $colors->getColoredString("    接口版本:   ", "blue") . "$steategy->version\n";
            echo $colors->getColoredString("    接口地址:   ", "blue") . "$steategy->api\n";
            
            //md文档生成
            $filename = __DIR__."/../../docs/{$parase_result['long_description']}.md";
            if (!file_exists($filename)){
                shell_exec("touch $filename");
            }else{
                unlink($filename);
            }
            $data = <<<DTK
### 接口信息
- 策略名称：{$classname}
- 接口名称：{$parase_result['long_description']}
- 接口版本：{$steategy->version}
- 接口地址：{$steategy->api}

### 公共参数
{$steategy->apiParasDocs}

### 请求参数
{$steategy->extraParasDocs}

### 返回数据
{$steategy->resultDateDocs}

### 返回示例
```
{$steategy->resultInfoDocs}
```

### 常见错误码
```
{$steategy->commonErrorsCodeDocs}
```

### 错误码列表
{$steategy->ErrorsCodeListDocs}
DTK;
            ;
            file_put_contents($filename, $data, FILE_APPEND);
            
            echo "]\n";
        };
        foreach ($file_array as $key => $val) {
            $func($val);
        }

        return true;
    }
}