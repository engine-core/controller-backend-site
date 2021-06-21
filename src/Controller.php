<?php
/**
 * @link https://github.com/engine-core/controller-backend-site
 * @copyright Copyright (c) 2021 engine-core
 * @license BSD 3-Clause License
 */

namespace EngineCore\controllers\backend\site;

/**
 * 首页控制器
 *
 * @author E-Kevin <e-kevin@qq.com>
 */
class Controller extends \EngineCore\web\Controller
{
    
    /**
     * @inheritdoc
     */
    protected $defaultDispatchMap = [
        'index' => [
            'response' => [
                'viewFile' => '#index',
            ],
        ],
    ];

}