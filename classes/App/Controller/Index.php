<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

namespace App\Controller;

use App\System\User\Repository as UserRepository;
use Fixin\Controller\ActionController;
use Fixin\Delivery\Cargo\HttpCargoInterface;

class Index extends ActionController {

    public function indexAction(HttpCargoInterface $cargo): HttpCargoInterface {
        /** @var $repository UserRepository */
        $userRepository = $this->container->get('System\User\Repository');
        $groupRepository = $this->container->get('System\Group\Repository');

        $request = $userRepository->createRequest()
        ->setAlias('proba');

        $request->getWhere()
        ->notNull('proba.email')
        ->compare('text', '<=', 'abcd');

        $request
        ->join($groupRepository, 'group.groupID', '=', 'proba.groupID-1', 'group')
        ->setColumns([
            'date',
            'string' => 'ezaz',
            'max' => $request->createExpression('MAX(userID)'),
            'min' => $request->createExpression('MIN(userID / ?)', [2])
        ])
        ->setGroupBy(['test', $request->createExpression('test2')])
        ->setOrderBy(['test' => 'asc', 'kettes'])
        ->setLimit(20)
        ;
//         $request->fetchRawData();
        $request->insertInto($groupRepository);
        /*
        $repository->create()
        ->setName('Test')
        ->setEmail('test@example.com')
        ->save();
//         $repository->
//         $repository->create
//         $entity = $repository->createId(1)->getEntity();
*/
        return $cargo;
    }
}