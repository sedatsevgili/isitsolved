<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $unResolvedIssueCount;

    /**
     * @ORM\Column(type="integer")
     */
    private $resolvedIssueCount;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $repositoryUrl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $repositoryType;

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

    public function getUnResolvedIssueCount(): ?int
    {
        return $this->unResolvedIssueCount;
    }

    public function setUnResolvedIssueCount(int $unResolvedIssueCount): self
    {
        $this->unResolvedIssueCount = $unResolvedIssueCount;

        return $this;
    }

    public function getResolvedIssueCount(): ?int
    {
        return $this->resolvedIssueCount;
    }

    public function setResolvedIssueCount(int $resolvedIssueCount): self
    {
        $this->resolvedIssueCount = $resolvedIssueCount;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getRepositoryUrl(): ?string
    {
        return $this->repositoryUrl;
    }

    public function setRepositoryUrl(string $repositoryUrl): self
    {
        $this->repositoryUrl = $repositoryUrl;

        return $this;
    }

    public function getRepositoryType(): ?string
    {
        return $this->repositoryType;
    }

    public function setRepositoryType(string $repositoryType): self
    {
        $this->repositoryType = $repositoryType;

        return $this;
    }
}
