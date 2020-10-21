<?php

namespace App\Entity;

use DateTimeInterface;

class User
{
    private $id;

    private $name;

    private $sex;

    private $birthDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getBirthDate(): ?DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }
}
