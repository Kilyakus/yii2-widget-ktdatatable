<?php
namespace kilyakus\ktdatatable;

class KtDataTableAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/ktdatatable'],'widget-ktdatatable');
        parent::init();
    }
}
