<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Odm\Filter\BooleanFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\Repository\BurgersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Expr\Cast\Bool_;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BurgersRepository::class)]
#[ApiResource(
    description:'pour entitie burgur',
    operations: [
        new GetCollection(),
        new GetCollection(),
        new Post(),
        new Put(),
        new Patch()
    ],
    normalizationContext: [
        'groups' => ['burgers:read']
    
    ],
    denormalizationContext: [
        'groups' => ['burgers:write']
    
    ],
    paginationItemsPerPage:10,
)]
// #[ApiFilter(BooleanFilter::class, properties: ['fieldboolian'])]

class Burgers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['burgers:read','burgers:write'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['burgers:read','burgers:write'])]
    #[ApiFilter(SearchFilter::class,strategy:'partial')] // we can use exact instead of partial
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['burgers:read','burgers:write'])]
    private ?string $subtitle = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['burgers:read','burgers:write'])]
    private ?string $description = null;

    #[ORM\Column]
    #[Groups(['burgers:read','burgers:write'])]
    private ?float $price = null;

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

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
