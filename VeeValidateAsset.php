<?php
namespace xavsio4\vuejsAssets;;

use yii\web\AssetBundle;

/**
 * Class VeeValidateAsset
 *
 * @package xavsio4\vuejsAssets;
 */
class VeeValidateAsset extends AssetBundle
{
    public $sourcePath = '@bower/vee-validate/dist';

    public function init()
    {
        parent::init();

        $this->js[] = YII_ENV_DEV ? 'vee-validate.js' : 'vee-validate.min.js';
    }
}
