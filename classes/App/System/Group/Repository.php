<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

namespace App\System\Group;

class Repository extends \Fixin\Model\Repository\Repository {

    protected $autoIncrementColumn = 'groupID';
    protected $primaryKey = ['groupID'];
}