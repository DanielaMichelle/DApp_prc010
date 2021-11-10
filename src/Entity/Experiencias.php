<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Experiencias
 *
 * @ORM\Table(name="experiencias")
 * @ORM\Entity
 */
class Experiencias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="frase", type="text", length=255, nullable=false)
     */
    private $frase;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=false)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="clima", type="string", length=50, nullable=false)
     */
    private $clima;

    /**
     * @var string
     *
     * @ORM\Column(name="indispensable", type="text", length=255, nullable=false)
     */
    private $indispensable;

    /**
     * @var string
     *
     * @ORM\Column(name="tiempo", type="string", length=50, nullable=false)
     */
    private $tiempo;

    /**
     * @ORM\OneToMany(targetEntity=Comentarios::class, mappedBy="experiencias", orphanRemoval=true)
     */
    private $comentarios;

    public function __construct()
    {
        $this->comentarios = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->nombre;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getFrase(): ?string
    {
        return $this->frase;
    }

    public function setFrase(string $frase): self
    {
        $this->frase = $frase;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getClima(): ?string
    {
        return $this->clima;
    }

    public function setClima(string $clima): self
    {
        $this->clima = $clima;

        return $this;
    }

    public function getIndispensable(): ?string
    {
        return $this->indispensable;
    }

    public function setIndispensable(string $indispensable): self
    {
        $this->indispensable = $indispensable;

        return $this;
    }

    public function getTiempo(): ?string
    {
        return $this->tiempo;
    }

    public function setTiempo(string $tiempo): self
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * @return Collection|Comentarios[]
     */
    public function getComentarios(): Collection
    {
        return $this->comentarios;
    }

    public function addComentario(Comentarios $comentario): self
    {
        if (!$this->comentarios->contains($comentario)) {
            $this->comentarios[] = $comentario;
            $comentario->setExperiencias($this);
        }

        return $this;
    }

    public function removeComentario(Comentarios $comentario): self
    {
        if ($this->comentarios->removeElement($comentario)) {
            // set the owning side to null (unless already changed)
            if ($comentario->getExperiencias() === $this) {
                $comentario->setExperiencias(null);
            }
        }

        return $this;
    }


}
