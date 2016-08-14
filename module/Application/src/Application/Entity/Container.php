<?php

namespace Application\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Container
 */
/**
 * @ORM\Entity
 * @ORM\Table(name="container")
 */
class Container
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     *
     **/
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="original", type="string", length=255, nullable=false)
     */
    private $original_date;


    /**
     * @var string
     *
     * @ORM\Column(name="background", type="string", length=255, nullable=false)
     */
    private $background;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="frame", type="boolean")
     */
    private $frame;

    /**
     * @var integer
     *
     * @ORM\Column(name="backgroundwidth", type="integer")
     */
    private $backgroundwidth;

    /**
     * @var integer
     *
     * @ORM\Column(name="backgroundheight", type="integer")
     */
    private $backgroundheight;


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
     * Get name
     *
     * @return string
     *
     */
     public function getName()
     {
	return $this->name;
     }

    /**
     * Set username
     *
     * @param string $username
     * @return Container
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set original_date
     *
     * @param \DateTime $originalDate
     * @return Container
     */
    public function setOriginalDate($originalDate)
    {
        $this->original_date = $originalDate;

        return $this;
    }

    /**
     * Get original_date
     *
     * @return \DateTime 
     */
    public function getOriginalDate()
    {
        return $this->original_date;
    }


    /**
     * Set background
     *
     * @param string $background
     * @return Container
     */
    public function setBackground($background)
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get background
     *
     * @return string 
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Set frame
     *
     * @param boolean $frame
     * @return Container
     */
    public function setFrame($frame)
    {
        $this->frame = $frame;

        return $this;
    }

    /**
     * Get frame
     *
     * @return boolean 
     */
    public function getFrame()
    {
        return $this->frame;
    }

    /**
     * Set backgroundwidth
     *
     * @param integer $backgroundwidth
     * @return Container
     */
    public function setBackgroundwidth($backgroundwidth)
    {
        $this->backgroundwidth = $backgroundwidth;

        return $this;
    }

    /**
     * Get backgroundwidth
     *
     * @return integer 
     */
    public function getBackgroundwidth()
    {
        return $this->backgroundwidth;
    }

    /**
     * Set backgroundheight
     *
     * @param integer $backgroundheight
     * @return Container
     */
    public function setBackgroundheight($backgroundheight)
    {
        $this->backgroundheight = $backgroundheight;

        return $this;
    }

    /**
     * Get backgroundheight
     *
     * @return integer 
     */
    public function getBackgroundheight()
    {
        return $this->backgroundheight;
    }
}
