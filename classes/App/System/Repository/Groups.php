<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

namespace App\System\Repository;

use Fixin\Model\Repository\Repository;

class Groups extends Repository
{
    protected $autoIncrementColumn = 'groupID';
    protected $primaryKey = ['groupID'];
}
