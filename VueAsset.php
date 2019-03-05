<?php
namespace xavsio4\vuejs_assets;

use yii\web\AssetBundle;

/**
 * Class VueAsset
 *
 * @package xavsio4\vuejs_assets;
 */
class VueAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'vue.js' : 'vue.min.js';
    }
}
