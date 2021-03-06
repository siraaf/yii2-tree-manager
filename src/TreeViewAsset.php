<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2019
 * @package   yii2-tree-manager
 * @version   1.1.3
 */

namespace kartik\tree;

use kartik\base\AssetBundle;

/**
 * Asset bundle for TreeView widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since  1.0
 */
class TreeViewAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->depends = array_merge($this->depends, [
            'yii\widgets\ActiveFormAsset',
            'yii\validators\ValidationAsset',
        ]);
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/kv-tree']);

        $primaryLang = \Locale::getPrimaryLanguage(\Yii::$app->language);
        if (in_array($primaryLang, ['fa', 'ar'])) {
            $this->setupAssets('css', ['css/kv-tree-rtl']);
        } else {
            $this->setupAssets('css', ['css/kv-tree']);
        }
        parent::init();
    }
}
