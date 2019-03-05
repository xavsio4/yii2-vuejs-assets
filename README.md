VueJs, Axios, vue-router, vuex assets for Yii2
======================================
This assets allow to use vueJs in your Yii2 application. It contains 
* vue.js, 
* axios.js, 
* vue-router.js,
* vuex.js and
* vee-validate.js (for form validation)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require xavsio4/yii2-vuejs-assets "*"
```

or add

```
"xavsio4/yii2-vuejs-assets": "*"
```

to the require section of your `composer.json` file.


Usage
-----

You may utilize a bundle of assets (axios, router,veeValidate) by adding of this code in your view :

```php
<?php \xavsio4\vuejsAssets;\VueBundleAsset::register($this); ?>
```

If you want to utilize only pure Vue, add this code in your view :

```php
<?php \xavsio4\vuejsAssets;\VueAsset::register($this); ?>
```