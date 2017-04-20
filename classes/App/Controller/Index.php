<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

namespace App\Controller;

use App\System\Group\Repository as GroupRepository;
use App\System\User\Repository as UserRepository;
use Fixin\Controller\HttpActionController;
use Fixin\Delivery\Cargo\HttpCargoInterface;

class Index extends HttpActionController {

    public function indexAction(HttpCargoInterface $cargo): HttpCargoInterface {
        /** @var $userRepository UserRepository */
        $userRepository = $this->resourceManager->get('System\User\Repository', UserRepository::class);

        /** @var $groupRepository GroupRepository */
        $groupRepository = $this->resourceManager->get('System\Group\Repository', GroupRepository::class);
/*
        $groupRepository->insert([
            'name' => 'akarmi',
            'date' => $groupRepository->createExpression('NOW()')
        ]);

        $existsRequest = $groupRepository->createRequest();
        $existsRequest->getWhere()
        ->notNull('userID')
        ->in('class', ['4class']);
*/
        $request = $userRepository->createRequest()
        ->setAlias('proba')
//         ->setColumns(['booled'])
        ;
//         $request->getWhere()->null('userID');

        /*
        foreach ($request->fetchRawData() as $item) {
            print_r($item);
        }*/

//         $request->setIdFetchEnabled(false);

//         echo $userRepository->createId(300001)->getEntity();

//         die;
/*
        foreach ($request->fetch() as $item) {
            echo $item, ', ';
        }
*/
        /*
        $entity = $userRepository->create()
        ->setName('Test')
        ->setEmail('test@example.com')
        ->setGroup(1);

        echo $entity;

        $entity->save();

        echo $entity;*/

//         $repository->
//         $repository->create
//         $entity = $repository->createId(1)->getEntity();
        return $cargo;
    }
}