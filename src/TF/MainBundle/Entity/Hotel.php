<?php

namespace TF\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity(repositoryClass="TF\MainBundle\Repository\HotelRepository")
 */
class Hotel
{
    /**
     * @var Options
     * @ORM\OneToOne(targetEntity="TF\MainBundle\Entity\Options", cascade={"persist", "remove"})
     */
    private $option;

    /**
     * @var Country
     * @ORM\ManyToOne(targetEntity="TF\MainBundle\Entity\Country")
     */
    private $country;

    /**
     * @var Picture
     * @ORM\OneToOne(targetEntity="TF\MainBundle\Entity\Picture", cascade={"persist", "remove"})
     */
    private $MainPicture;

    /**
     * @var array
     * @ORM\OneToMany(targetEntity="TF\MainBundle\Entity\Picture", mappedBy="hotel", cascade={"persist", "remove"})
     */
    private $Pictures;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NomHotel", type="string", length=255)
     */
    private $nomHotel;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float")
     */
    private $prix;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomHotel
     *
     * @param string $nomHotel
     *
     * @return Hotel
     */
    public function setNomHotel($nomHotel)
    {
        $this->nomHotel = $nomHotel;

        return $this;
    }

    /**
     * Get nomHotel
     *
     * @return string
     */
    public function getNomHotel()
    {
        return $this->nomHotel;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Hotel
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Hotel
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @return Picture
     */
    public function getMainPicture()
    {
        return $this->MainPicture;
    }

    /**
     * @param Picture $MainPicture
     */
    public function setMainPicture($MainPicture)
    {
        $this->MainPicture = $MainPicture;
    }

    /**
     * @return array
     */
    public function getPictures()
    {
        return $this->Pictures;
    }

    /**
     * @param array $Pictures
     */
    public function addPicture(Picture $Picture)
    {
        $this->Pictures[] = $Picture;
    }

    public function removePicture(Picture $Picture)
    {
        // todo
    }

    public function __construct()
    {
        $this->Pictures = array();
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return Options
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param Options $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }
}

