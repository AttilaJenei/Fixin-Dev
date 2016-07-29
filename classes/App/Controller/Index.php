<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

namespace App\Controller;

use Fixin\Controller\ActionController;
use Fixin\Delivery\Cargo\HttpCargoInterface;
use App\System\User\Repository as UserRepository;

class Index extends ActionController {

    public function indexAction(HttpCargoInterface $cargo): HttpCargoInterface {
        /** @var $repository UserRepository */
        $repository = $this->container->get('System\User\Repository');
        $repository->create()
        ->setName('Test')
        ->setEmail('test@example.com')
        ->save();
//         $repository->
//         $repository->create
//         $entity = $repository->createId(1)->getEntity();

        return $cargo;
    }
}