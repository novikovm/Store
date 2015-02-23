<?php

namespace Project\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 */
class Movie
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var text
     */
    private $description;

    /**
     * @var text
     */
    private $actors;

    /**
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="movies")
     * @ORM\JoinColumn(name="genre_id", referencedColumnName="id")
     */
    protected $genre;

    /**
     * @var string
     */
    private $cover;

    /**
     * @var integer
     */
    private $price;

	/**
     *
     * @ORM\OneToMany(targetEntity="Recenzja", mappedBy="movie")
     */
    protected $recenzje;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Movie
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Movie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set actors
     *
     * @param array $actors
     * @return Movie
     */
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return array 
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Set cover
     *
     * @param string $cover
     * @return Movie
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Get price
     *
     * @return decimal 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Movie
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Set genre
     *
     * @param \Project\StoreBundle\Entity\Genre $genre
     * @return Movie
     */
    public function setGenre(\Project\StoreBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \Project\StoreBundle\Entity\Genre 
     */
    public function getGenre()
    {
        return $this->genre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recenzje = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add recenzje
     *
     * @param \Project\StoreBundle\Entity\Recenzja $recenzje
     * @return Movie
     */
    public function addRecenzje(\Project\StoreBundle\Entity\Recenzja $recenzje)
    {
        $this->recenzje[] = $recenzje;

        return $this;
    }

    /**
     * Remove recenzje
     *
     * @param \Project\StoreBundle\Entity\Recenzja $recenzje
     */
    public function removeRecenzje(\Project\StoreBundle\Entity\Recenzja $recenzje)
    {
        $this->recenzje->removeElement($recenzje);
    }

    /**
     * Get recenzje
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecenzje()
    {
        return $this->recenzje;
    }
}
