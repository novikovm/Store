<?php

namespace Project\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recenzja
 */
class Recenzja
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tytul;

    /**
     * @var string
     */
    private $tresc;

    /**
     * @var string
     */
    private $autor;

    /**
     * @var \DateTime
     */
    private $dataUtworzenia;

    /**
     * @ORM\ManyToOne(targetEntity="Movie", inversedBy="recenzje")
     * @ORM\JoinColumn(name="movie_id", referencedColumnName="id")
     */
    private $movie;


    public function __construct()
    {
        $this->setDataUtworzenia(new \DateTime());
    }

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
     * Set tytul
     *
     * @param string $tytul
     * @return Recenzja
     */
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;

        return $this;
    }

    /**
     * Get tytul
     *
     * @return string 
     */
    public function getTytul()
    {
        return $this->tytul;
    }

    /**
     * Set tresc
     *
     * @param string $tresc
     * @return Recenzja
     */
    public function setTresc($tresc)
    {
        $this->tresc = $tresc;

        return $this;
    }

    /**
     * Get tresc
     *
     * @return string 
     */
    public function getTresc()
    {
        return $this->tresc;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return Recenzja
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set dataUtworzenia
     *
     * @param \DateTime $dataUtworzenia
     * @return Recenzja
     */
    public function setDataUtworzenia($dataUtworzenia)
    {
        $this->dataUtworzenia = $dataUtworzenia;

        return $this;
    }

    /**
     * Get dataUtworzenia
     *
     * @return \DateTime 
     */
    public function getDataUtworzenia()
    {
        return $this->dataUtworzenia;
    }

    

    /**
     * Set movie
     *
     * @param \Project\StoreBundle\Entity\Movie $movie
     * @return Recenzja
     */
    public function setMovie(\Project\StoreBundle\Entity\Movie $movie = null)
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * Get movie
     *
     * @return \Project\StoreBundle\Entity\Movie 
     */
    public function getMovie()
    {
        return $this->movie;
    }
}
