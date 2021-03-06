<?php
namespace xavsio4\vuejs_assets;

use yii\web\AssetBundle;

/**
 * Class VueRouterAsset
 *
 * @package xavsio4\vuejs_assets;
 */
class VueRouterAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue-router/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'vue-router.js' : 'vue-router.min.js';
    }
}
