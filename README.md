～～～公司要做一个淘宝客的项目，需要接入大淘客，官方SDK用的不是很顺手，就在网上找了一个，但是不支持psr-4，只好用老哥的代码重新改改上线～～～

但是也非常感谢之前的老哥，代码源出处：https://github.com/Lyb-coder/dataoke

## 下载方式
composer
```composer
composer require dml/dtk
```
git
```git
git clone https://github.com/1185288810/dml-dtk.git
```

## 使用方式
```php

use Dtk\Client\DtkClient;
use Base\Config\Dtk;
$client = new DtkClient(Dtk::APP_KEY, Dtk::APP_SECRET, 'array');
$client->setSteategyObj('GetSuperCategory', array());
$result = $client->performRequests();

```
