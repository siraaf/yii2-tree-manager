/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2019
 * @package yii2-tree-manager
 * @version 1.1.3
 */

DROP TABLE IF EXISTS tbl_tree;

CREATE TABLE tbl_tree (
    id            INT(11)      NOT NULL AUTO_INCREMENT PRIMARY KEY
    COMMENT 'Unique tree node identifier',
    root          INT(11)               DEFAULT NULL
    COMMENT 'Tree root identifier',
    lft           INT(11)      NOT NULL
    COMMENT 'Nested set left property',
    rgt           INT(11)      NOT NULL
    COMMENT 'Nested set right property',
    lvl           SMALLINT(5)  NOT NULL
    COMMENT 'Nested set level / depth',
    active        TINYINT(1)   NOT NULL DEFAULT TRUE
    COMMENT 'Whether the node is active (will be set to false on deletion)',
    name          VARCHAR(255)  NOT NULL
    COMMENT 'The tree node name / label',
    KEY tbl_tree_NK1 (root),
    KEY tbl_tree_NK2 (lft),
    KEY tbl_tree_NK3 (rgt),
    KEY tbl_tree_NK4 (lvl),
    KEY tbl_tree_NK5 (active)
)
    ENGINE = InnoDB
    AUTO_INCREMENT = 1;
