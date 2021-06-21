<?php
/**
 * @link https://github.com/engine-core/controller-backend-site
 * @copyright Copyright (c) 2021 engine-core
 * @license BSD 3-Clause License
 */

declare(strict_types=1);

namespace EngineCore\controllers\backend\site;

use EngineCore\extension\repository\info\ControllerInfo;

class Info extends ControllerInfo
{
    
    protected
        $id = 'site', // 控制器ID
        $category = parent::CATEGORY_BACKEND_HOME;
    
    /**
     * @inheritdoc
     */
    public function getConfig(): array
    {
        return [
            'components' => [
                'urlManager'   => [
                    'rules' => [
                        '' => "{$this->id}/index",
                    ],
                ],
            ],
        ];
    }
    
}