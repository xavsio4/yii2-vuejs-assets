<?php
namespace xavsio4\vuejs_assets;

use yii\web\AssetBundle;

/**
 * Class AxiosAsset
 *
 * @package xavsio4\vuejs_assets;
 */
class AxiosAsset extends AssetBundle
{
    public $sourcePath = '@bower/axios/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'axios.js' : 'axios.min.js';
    }
}
