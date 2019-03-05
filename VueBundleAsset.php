<?php
namespace xavsio4\vuejs_assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class VueBundleAsset
 *
 * @package xavsio4\vuejs_assets;
 */
class VueBundleAsset extends AssetBundle
{
    public $depends = [
        'xavsio4\vuejs_assets;\VueAsset',
        'xavsio4\vuejs_assets;\AxiosAsset',
        'xavsio4\vuejs_assets;\VueRouterAsset',
        'xavsio4\vuejs_assets;\VuexAsset',
    ];
}
