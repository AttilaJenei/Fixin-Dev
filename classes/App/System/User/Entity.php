<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

namespace App\System\User;

class Entity extends \Fixin\Model\Entity\Entity {

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $userID;

    protected function collectSaveData(): array {
        return [
            'userID' => $this->userID,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getUserID(): int {
        return $this->userID;
    }

    public function setEmail(string $email): self {
        $this->email = $email;

        return $this;
    }

    public function setName(string $name): self {
        $this->name = $name;

        return $this;
    }

    public function setUserID(int $userID): self {
        $this->userID = $userID;

        return $this;
    }
}