<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
	public $sourcePath="@bower";
	public $css       =[
		'fontawesome/css/all.css',
	];
}