<?php
namespace xavsio4\vuejs_assets;

use yii\web\AssetBundle;

/**
 * Class VuexAsset
 *
 * @package xavsio4\vuejs_assets;
 */
class VuexAsset extends AssetBundle
{
    public $sourcePath = '@bower/vuex/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'vuex.js' : 'vuex.min.js';
    }
}
