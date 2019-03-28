# 安装
暂时略

# composer.json
```
{
    "require": {
        "monolog/monolog": "1.3.*"
    }
}
```

## 关于 ```require``` Key
### 包名称
```
monolog/monolog
```

### 包版本
- 指定版本 ```1.0.2```
- 范围 ```>=1.0``` 可用运算符```>,<,>=,<=,!=```，多个范围可用```,```(逻辑与)或```|```（逻辑或）分开
- 通配符 ```1.0.*``` 与```>=1.0,<1.1```等价
- 赋值运算符 ```~1.2``` 与```>=1.2,<2.0```等价

### 下一个重要版本（波浪号运算符）
```~```适用遵循 语义化版本 的项目
```~1.2``` 相当于 ```>=1.2,<2.0```，而 ```~1.2.3``` 相当于 ```>=1.2.3,<1.3```

### 稳定性
默认情况下只有稳定的发行版才会被考虑在内。如果你也想获得 RC、beta、alpha 或 dev 版本，可能需要使用```require-dev```

# 安装依赖包
目录下有```composer.json```文件，执行
```
composer install
```
安装后会产生```composer.lock```锁文件
install 命令将会检查锁文件是否存在，如果存在，它将下载指定的版本（忽略 composer.json 文件中的定义）。
如果不存在 composer.lock 文件，Composer 将读取 composer.json 并创建锁文件。

# Packagist
https://packagist.org/ 是 Composer 的主要资源库

# 自动加载
```
require 'vendor/autoload.php';
```
