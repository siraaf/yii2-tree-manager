<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2019
 * @package   yii2-tree-manager
 * @version   1.1.3
 */

namespace kartik\tree\models;

use yii\db\ActiveRecord;

/**
 * This is the base model class for the nested set tree structure
 *
 * @property string $id
 * @property string $root
 * @property string $lft
 * @property string $rgt
 * @property integer $lvl
 * @property string $name
 * @property boolean $active
 *
 * @method initDefaults()
 * @method makeRoot()
 * @method appendTo() appendTo(Tree $node)
 * @method insertBefore() insertBefore(Tree $node)
 * @method insertAfter() insertAfter(Tree $node)
 * @method TreeQuery parents() parents(int $depth = null)
 * @method TreeQuery children()
 * @method boolean isRoot()
 * @method boolean isLeaf()
 * @method boolean delete()
 * @method boolean deleteWithChildren()
 */
class Tree extends ActiveRecord
{
    use TreeTrait;

    /**
     * @var string the classname for the TreeQuery that implements the NestedSetQueryBehavior.
     * If not set this will default to `kartik\tree\models\TreeQuery`.
     */
    public static $treeQueryClass;

    /**
     * @var boolean whether to HTML encode the tree node names.
     */
    public $encodeNodeNames = true;

    /**
     * @var array activation errors for the node.
     */
    public $nodeActivationErrors = [];

    /**
     * @var array node removal errors.
     */
    public $nodeRemovalErrors = [];

    /**
     * @var boolean attribute to cache the `active` state before a model update.
     */
    public $activeOrig = true;
}
