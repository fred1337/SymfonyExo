<?php

namespace TF\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table(name="booking")
 * @ORM\Entity(repositoryClass="TF\MainBundle\Repository\BookingRepository")
 */
class Booking
{

    /**
     * @var User
     * @ORM\OneToOne(targetEntity="TF\MainBundle\Entity\User")
     */
    private $user;

    /**
     * @var Hotel
     *
     * @ORM\OneToOne(targetEntity="TF\MainBundle\Entity\Hotel")
     */
    private $hotel;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateBegin", type="datetime")
     */
    private $dateBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnd", type="datetime")
     */
    private $dateEnd;


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
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     *
     * @return Booking
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;

        return $this;
    }

    /**
     * Get dateBegin
     *
     * @return \DateTime
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return Booking
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @return Hotel
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * @param Hotel $hotel
     */
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}

