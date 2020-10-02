<?php

namespace App\Entity;

use App\Repository\BlogPostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogPostRepository::class)
 */
class BlogPost
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="datetime")
     */
    private $published;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;
    
     /**
     * @ORM\Column(type="datetime")
     */
    private $nascimento;

       /**
     * @ORM\Column(type="datetime")
     */
    private $datadehoje;

      /**
     * @ORM\Column(type="datetime")
     */
    private $datafalecimento;
    
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPublished(): ?\DateTimeInterface
    {
        return $this->published;
    }

    public function setPublished(\DateTimeInterface $published): self
    {
        $this->published = $published;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    

    /**
     * Get the value of slug 
     * aqui tu chama a propriedade, e retorna o valor
     */ 
    public function getSlug() 
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     * @return  self
     */ 
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of nascimento
     */ 
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * Set the value of nascimento
     *
     * @return  self
     */ 
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;

        return $this;
    }

    /**
     * Get the value of datadehoje
     */ 
    public function getDatadehoje()
    {
        return $this->datadehoje;
    }

    /**
     * Set the value of datadehoje
     *
     * @return  self
     */ 
    public function setDatadehoje($datadehoje)
    {
        $this->datadehoje = $datadehoje;

        return $this;
    }

    /**
     * Get the value of datafalecimento
     */ 
    public function getDatafalecimento()
    {
        return $this->datafalecimento;
    }

    /**
     * Set the value of datafalecimento
     *
     * @return  self
     */ 
    public function setDatafalecimento($datafalecimento)
    {
        $this->datafalecimento = $datafalecimento;

        return $this;
    }
}
