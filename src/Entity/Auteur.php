<?php

namespace App\Entity;

use App\Repository\AuteurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuteurRepository::class)]
class Auteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $id_auteur;

    #[ORM\Column(type: 'string', length: 32)]
    private $nom_auteur;

    #[ORM\Column(type: 'string', length: 32)]
    private $prenom_auteur;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $biographie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAuteur(): ?int
    {
        return $this->id_auteur;
    }

    public function setIdAuteur(int $id_auteur): self
    {
        $this->id_auteur = $id_auteur;

        return $this;
    }

    public function getNomAuteur(): ?string
    {
        return $this->nom_auteur;
    }

    public function setNomAuteur(string $nom_auteur): self
    {
        $this->nom_auteur = $nom_auteur;

        return $this;
    }

    public function getPrenomAuteur(): ?string
    {
        return $this->prenom_auteur;
    }

    public function setPrenomAuteur(string $prenom_auteur): self
    {
        $this->prenom_auteur = $prenom_auteur;

        return $this;
    }

    public function getBiographie(): ?string
    {
        return $this->biographie;
    }

    public function setBiographie(?string $biographie): self
    {
        $this->biographie = $biographie;

        return $this;
    }
}
