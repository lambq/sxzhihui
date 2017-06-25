<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About sxzhihui/关于 实修智慧

 本项目使用 PHP 框架 [Laravel 5.4](https://doc.laravel-china.org/docs/5.4/) 进行开发。 

### 功能具有以下功能

- 分类管理
- 书籍管理
- 标签管理
- 评论管理
- 导航管理

## 项目概述

* 项目名称：sxzhihui
* 项目运行地址：https://sxzhihui.com/

[sxzhihui](https://github.com/lambq/sxzhihui) 基于Laravel 5.4 版本开发。

## 目前运行环境

- Nginx 1.2+
- PHP 7.1+
- MySQL 5.7+

## 部署/安装

需要在系统上安装了基本的PHP运行环境、PHP包管理工具composer

### 基础安装

#### 1. 克隆源代码

克隆源代码到本地：

    > git clone https://github.com/lambq/sxzhihui.git

#### 2. 安装扩展包依赖

    > composer install

#### 4. 生成配置文件

    > cp .env.example .env

#### 5. 更新laravel框架安全 key
    
    > php artisan key:generate
    
#### 6. 执行数据库迁移

```shell
php artisan migrate
```

#### 7. 填充初始数据

```shell
php artisan db:seed
```

## License

> 使用 sxzhihui 构建，或者基于 sxzhihui 源代码修改的站点 **必须** 在页脚加上 `Powered by sxzhihui` 字样，并且必须链接到 `http://www.sxzhihui.com` 上。**必须** 在页面的每一个标题上加上 `Powered by sxzhihui` 字样。

在遵守以上规则的情况下，你可以享受等同于 MIT 协议的授权。

或者你可以联系 `any@rushangkeji.com` 购买商业授权，商业授权允许移除页脚和标题的 `Powered by sxzhihui` 字样。
