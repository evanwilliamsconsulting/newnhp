<?php



/**
 * Headline
 */
class Headline
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $headline;

    /**
     * @var string
     */
    private $topline;

    /**
     * @var bool
     */
    private $usetopline;

    /**
     * @var int
     */
    private $fontsize;

    /**
     * @var string
     */
    private $headlineclass;

    /**
     * @var bool
     */
    private $italic;


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
     * Set headline
     *
     * @param string $headline
     *
     * @return Headline
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set topline
     *
     * @param string $topline
     *
     * @return Headline
     */
    public function setTopline($topline)
    {
        $this->topline = $topline;

        return $this;
    }

    /**
     * Get topline
     *
     * @return string
     */
    public function getTopline()
    {
        return $this->topline;
    }

    /**
     * Set usetopline
     *
     * @param bool $usetopline
     *
     * @return Headline
     */
    public function setUsetopline($usetopline)
    {
        $this->usetopline = $usetopline;

        return $this;
    }

    /**
     * Get usetopline
     *
     * @return bool
     */
    public function getUsetopline()
    {
        return $this->usetopline;
    }

    /**
     * Set fontsize
     *
     * @param int $fontsize
     *
     * @return Headline
     */
    public function setFontsize($fontsize)
    {
        $this->fontsize = $fontsize;

        return $this;
    }

    /**
     * Get fontsize
     *
     * @return int
     */
    public function getFontsize()
    {
        return $this->fontsize;
    }

    /**
     * Set headlineclass
     *
     * @param string $headlineclass
     *
     * @return Headline
     */
    public function setHeadlineclass($headlineclass)
    {
        $this->headlineclass = $headlineclass;

        return $this;
    }

    /**
     * Get headlineclass
     *
     * @return string
     */
    public function getHeadlineclass()
    {
        return $this->headlineclass;
    }

    /**
     * Set italic
     *
     * @param bool $italic
     *
     * @return Headline
     */
    public function setItalic($italic)
    {
        $this->italic = $italic;

        return $this;
    }

    /**
     * Get italic
     *
     * @return bool
     */
    public function getItalic()
    {
        return $this->italic;
    }
}
