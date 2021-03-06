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
     * @var int
     */
    protected $groupID;

    /**
     * @var string
     */
    protected $name;

    protected function collectSaveData(): array {
        return [
            'groupID' => $this->groupID,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getGroupID(): int {
        return $this->groupID;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setEmail(string $email): self {
        $this->email = $email;

        return $this;
    }

    public function setGroupID(int $groupID): self {
        $this->groupID = $groupID;

        return $this;
    }

    public function setName(string $name): self {
        $this->name = $name;

        return $this;
    }
}