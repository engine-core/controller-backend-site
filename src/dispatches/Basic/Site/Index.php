<?php
/**
 * @link https://github.com/engine-core/controller-backend-site
 * @copyright Copyright (c) 2021 engine-core
 * @license BSD 3-Clause License
 */

namespace EngineCore\controllers\backend\site\dispatches\Basic\Site;

use EngineCore\dispatch\Dispatch;

/**
 * 后台首页
 */
class Index extends Dispatch
{
    
    /**
     * @inheritdoc
     */
    public function run()
    {
        return $this->response->render();
    }
    
}