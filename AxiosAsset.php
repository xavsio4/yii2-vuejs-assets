<?php
namespace xavsio4\vuejsAssets;;

use yii\web\AssetBundle;

/**
 * Class AxiosAsset
 *
 * @package xavsio4\vuejsAssets;
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
