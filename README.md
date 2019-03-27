# laravel 练习项目

## 项目初始化
### 基本配置
1. 时区 config/app.php timezone Aisa/changhai Aisa/chongqing PRC

## laravel 环境 
1. `clone`项目后执行`composer i`;
2. [packagist](https://packagist.org/),可以到该网站查找三方包
3. 语言包 `composer require caouecs/laravel-lang:dev-laravel58` 拷贝zn-CN 到lang;
4. `packgist` 搜索 `Captcha` 找到验证码相关库 `composer require mews/captcha` 
5. 配置 `In Windows, you'll need to include the GD2 DLL php_gd2.dll in php.ini. And you also need include php_fileinfo.dll and php_mbstring.dll to fit the requirements of mews/captcha's dependencies.`

## 数据表的迁移与填充
### 迁移文件操作
1. 编写迁移文件 `php artisan make:migration '迁移文件名字'`
2. 执行迁移文件 (第一次： `php artisan migrate:install` 生成迁移记录表) 
<br>`php artisan migrate` 执行迁移文件中`up`方法
<br>`php artisan migrate:rollback` 执行迁移文件中`down`方法(同批次)

### 填充器（种子文件）创建与编写，`seeds`目录下
1. `php artisan make:seeder PaperTableSeeder` 然后去该文件编写`run`方法添加模拟数据
2. `php artisan db:seed --class=PaperTableSeeder` 


### 联表查询
0. 准备
<br>`php artisan make:migration create_article_table`
<br>`php artisan make:migration create_author_table`
<br> 编写迁移文件
<br>`php artisan migrate`
<br>`php artisan make:seeder ArticleAndAuthorTableSeeder`
<br>`php artisan db:seed --class=ArticleAndAuthorTableSeeder`

1. 写原始`sql` 语句
<br>`select t1.id, t1.article_name, t2.author_name from article as t1 left join author as t2 on t1.author_id = t2.id`


