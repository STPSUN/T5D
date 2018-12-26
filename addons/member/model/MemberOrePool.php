<?php
/**
 * Created by PhpStorm.
 * User: stp
 * Date: 2018/12/26
 * Time: 15:16
 */

namespace addons\member\model;


class MemberOrePool extends \web\common\model\BaseModel
{
    public function _initialize()
    {
        $this->tableName = 'member_ore_pool';
    }
}