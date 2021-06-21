<?php
/**
 * @link https://github.com/engine-core/controller-backend-site
 * @copyright Copyright (c) 2021 engine-core
 * @license BSD 3-Clause License
 */

/* @var $this yii\web\View */

$this->title = '首页';
$css = <<<css
.site-wrapper {
    color: #fff;
    background-color: #333;
    text-align: center;
    display: table;
    width: 100%;
    height: 100%;
    min-height: 100%;
    -webkit-box-shadow: inset 0 0 100px rgba(0, 0, 0, .5);
    box-shadow: inset 0 0 100px rgba(0, 0, 0, .5);
    text-shadow: 0 1px 3px rgba(0, 0, 0, .5);
}

.site-wrapper .site-wrapper-inner {
    display: table-cell;
    vertical-align: middle;
}

.site-wrapper .cover-container {
    margin-right: auto;
    margin-left: auto;
}

.site-wrapper .cover {
    padding: 0 20px;
}

.site-wrapper .inner {
    padding: 30px;
}

@media (min-width: 768px) {
    .cover-heading, .jumbotron .cover-heading {
        font-size: 150px;
        margin-bottom: 50px;
    }

    .cover-container .cover h1 {
        font-size: 63px;
    }
}
css;
$this->registerCss($css, ['type' => 'text/css']);

?>

<div>
    <div class="site-wrapper text-center">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover">
                    <h1>从<span class="text-success cover-heading">“心”</span>开始!</h1>
                    <p class="lead">越被嘲笑的理想，就越有被实现的价值</p>
                    <p class="lead">
                        <a class="btn btn-lg btn-success" href="https://github.com/Wonail/wocenter"
                           target="_blank">WoCenter 最新动态</a>
                        <a class="btn btn-lg btn-primary"
                           href="http://www.wonail.com/doc/wocenter/guide/zh-CN/guide-index.html"
                           target="_blank">WoCenter 权威指南</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron ">
        <div class="container text-center">
            <h1 class="text-muted">有<span class="text-danger cover-heading">Wo</span>个性!</h1>

            <p class="lead">这是一条孤独有趣的路……一直走着……从未放弃</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2>简介</h2>

                <p class="text-muted">
                    Wocenter目前提供了一套集成人事管理、安全管理、扩展中心、系统管理、运营管理等多个模块的后台管理系统，
                    该系统默认使用AdminLTE主题， 模块功能很大程度上可以满足你的基本所需。 同时，Wocenter默认支持多语言，多主题，
                    整套系统众多地方使用PJAX技术，页面响应速度迅速。
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Dispatch调度层</h2>

                <p class="text-muted">
                    Wocenter在原有的MVC结构中加入了Dispatch调度层(简称D层)，用以进一步解藕细分C层，通过D层调度资源、显示页面、返回相关格式结果数据给客户端，
                    而C层则只负责路由、权限判断、提交方式合法性验证等与数据返回、页面显示无关等操作。
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Service服务层</h2>

                <p class="text-muted">
                    Wocenter加入了Service服务层，用于处理一些与Model层数据操作关联性不高的业务逻辑，
                    目的在于让Model层只专注于CRUD等操作，而其余的业务逻辑则交由Service层为系统或各模块提供对内开放的使用接口。
                </p>
            </div>
        </div>
    </div>
</div>