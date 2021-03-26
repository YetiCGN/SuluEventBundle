<?php

namespace Manuxi\SuluEventBundle\Entity;

use Manuxi\SuluEventBundle\Repository\LocationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="app_location")
 * @ORM\Entity(repositoryClass=LocationRepository::class)
 */
class Location
{
    public const RESOURCE_KEY = 'locations';

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $street = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $number = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postalCode = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $city = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $countryCode = null;

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

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}