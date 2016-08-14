<?php



/**
 * Container
 */
class Container
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $background;

    /**
     * @var bool
     */
    private $frame;

    /**
     * @var int
     */
    private $backgroundwidth;

    /**
     * @var int
     */
    private $backgroundheight;


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
     * Set background
     *
     * @param string $background
     *
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
     * @param bool $frame
     *
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
     * @return bool
     */
    public function getFrame()
    {
        return $this->frame;
    }

    /**
     * Set backgroundwidth
     *
     * @param int $backgroundwidth
     *
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
     * @return int
     */
    public function getBackgroundwidth()
    {
        return $this->backgroundwidth;
    }

    /**
     * Set backgroundheight
     *
     * @param int $backgroundheight
     *
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
     * @return int
     */
    public function getBackgroundheight()
    {
        return $this->backgroundheight;
    }
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $page;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Container
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set page
     *
     * @param int $page
     *
     * @return Container
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * @var string
     */
    private $username;

    /**
     * @var \DateTime
     */
    private $original;


    /**
     * Set username
     *
     * @param string $username
     *
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
     * Set original
     *
     * @param \DateTime $original
     *
     * @return Container
     */
    public function setOriginal($original)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return \DateTime
     */
    public function getOriginal()
    {
        return $this->original;
    }
}
