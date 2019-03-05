<?php
namespace xavsio4\vuejsAssets;;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class VueBundleAsset
 *
 * @package xavsio4\vuejsAssets;
 */
class VueBundleAsset extends AssetBundle
{
    public $depends = [
        'xavsio4\vuejsAssets;\VueAsset',
        'xavsio4\vuejsAssets;\AxiosAsset',
        'xavsio4\vuejsAssets;\VueRouterAsset',
        'xavsio4\vuejsAssets;\VuexAsset',
    ];
}
