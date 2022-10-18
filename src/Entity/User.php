<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $NomUtilisateur = null;

    #[ORM\Column]
    private ?int $numeroRPPS = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column]
    private ?int $numeroADELI = null;

    #[ORM\Column(length: 255)]
    private ?string $profession = null;

    #[ORM\Column]
    private ?int $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $consultation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresseConsultation = null;

    #[ORM\Column]
    private ?int $cpConsultation = null;

    #[ORM\Column(length: 255)]
    private ?string $villeConsultation = null;

    #[ORM\Column]
    private ?int $numeroCPS = null;

    #[ORM\Column]
    private ?int $dateEmissionCPS = null;

    #[ORM\Column]
    private ?int $dateExpirationCPS = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->NomUtilisateur;
    }

    public function setNomUtilisateur(string $NomUtilisateur): self
    {
        $this->NomUtilisateur = $NomUtilisateur;

        return $this;
    }

    public function getNumeroRPPS(): ?int
    {
        return $this->numeroRPPS;
    }

    public function setNumeroRPPS(int $numeroRPPS): self
    {
        $this->numeroRPPS = $numeroRPPS;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumeroADELI(): ?int
    {
        return $this->numeroADELI;
    }

    public function setNumeroADELI(int $numeroADELI): self
    {
        $this->numeroADELI = $numeroADELI;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getConsultation(): ?string
    {
        return $this->consultation;
    }

    public function setConsultation(string $consultation): self
    {
        $this->consultation = $consultation;

        return $this;
    }

    public function getAdresseConsultation(): ?string
    {
        return $this->adresseConsultation;
    }

    public function setAdresseConsultation(?string $adresseConsultation): self
    {
        $this->adresseConsultation = $adresseConsultation;

        return $this;
    }

    public function getCpConsultation(): ?int
    {
        return $this->cpConsultation;
    }

    public function setCpConsultation(int $cpConsultation): self
    {
        $this->cpConsultation = $cpConsultation;

        return $this;
    }

    public function getVilleConsultation(): ?string
    {
        return $this->villeConsultation;
    }

    public function setVilleConsultation(string $villeConsultation): self
    {
        $this->villeConsultation = $villeConsultation;

        return $this;
    }

    public function getNumeroCPS(): ?int
    {
        return $this->numeroCPS;
    }

    public function setNumeroCPS(int $numeroCPS): self
    {
        $this->numeroCPS = $numeroCPS;

        return $this;
    }

    public function getDateEmissionCPS(): ?int
    {
        return $this->dateEmissionCPS;
    }

    public function setDateEmissionCPS(int $dateEmissionCPS): self
    {
        $this->dateEmissionCPS = $dateEmissionCPS;

        return $this;
    }

    public function getDateExpirationCPS(): ?int
    {
        return $this->dateExpirationCPS;
    }

    public function setDateExpirationCPS(int $dateExpirationCPS): self
    {
        $this->dateExpirationCPS = $dateExpirationCPS;

        return $this;
    }
}
