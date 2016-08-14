<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Headline
 */
class Headline
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var boolean
     */
    private $gluex;

    /**
     * @var boolean
     */
    private $gluey;

    /**
     * @var boolean
     */
    private $prevx;

    /**
     * @var boolean
     */
    private $prevy;

    /**
     * @var boolean
     */
    private $resetx;

    /**
     * @var boolean
     */
    private $resety;

    /**
     * @var boolean
     */
    private $drift;

    /**
     * @var boolean
     */
    private $gravity;

    /**
     * @var integer
     */
    private $offsetx;

    /**
     * @var integer
     */
    private $offsety;

    /**
     * @var string
     */
    private $headline;

    /**
     * @var string
     */
    private $topline;

    /**
     * @var boolean
     */
    private $usetopline;

    /**
     * @var integer
     */
    private $fontsize;

    /**
     * @var string
     */
    private $headlineclass;

    /**
     * @var boolean
     */
    private $italic;


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
     * Set width
     *
     * @param integer $width
     * @return Headline
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Headline
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set gluex
     *
     * @param boolean $gluex
     * @return Headline
     */
    public function setGluex($gluex)
    {
        $this->gluex = $gluex;

        return $this;
    }

    /**
     * Get gluex
     *
     * @return boolean 
     */
    public function getGluex()
    {
        return $this->gluex;
    }

    /**
     * Set gluey
     *
     * @param boolean $gluey
     * @return Headline
     */
    public function setGluey($gluey)
    {
        $this->gluey = $gluey;

        return $this;
    }

    /**
     * Get gluey
     *
     * @return boolean 
     */
    public function getGluey()
    {
        return $this->gluey;
    }

    /**
     * Set prevx
     *
     * @param boolean $prevx
     * @return Headline
     */
    public function setPrevx($prevx)
    {
        $this->prevx = $prevx;

        return $this;
    }

    /**
     * Get prevx
     *
     * @return boolean 
     */
    public function getPrevx()
    {
        return $this->prevx;
    }

    /**
     * Set prevy
     *
     * @param boolean $prevy
     * @return Headline
     */
    public function setPrevy($prevy)
    {
        $this->prevy = $prevy;

        return $this;
    }

    /**
     * Get prevy
     *
     * @return boolean 
     */
    public function getPrevy()
    {
        return $this->prevy;
    }

    /**
     * Set resetx
     *
     * @param boolean $resetx
     * @return Headline
     */
    public function setResetx($resetx)
    {
        $this->resetx = $resetx;

        return $this;
    }

    /**
     * Get resetx
     *
     * @return boolean 
     */
    public function getResetx()
    {
        return $this->resetx;
    }

    /**
     * Set resety
     *
     * @param boolean $resety
     * @return Headline
     */
    public function setResety($resety)
    {
        $this->resety = $resety;

        return $this;
    }

    /**
     * Get resety
     *
     * @return boolean 
     */
    public function getResety()
    {
        return $this->resety;
    }

    /**
     * Set drift
     *
     * @param boolean $drift
     * @return Headline
     */
    public function setDrift($drift)
    {
        $this->drift = $drift;

        return $this;
    }

    /**
     * Get drift
     *
     * @return boolean 
     */
    public function getDrift()
    {
        return $this->drift;
    }

    /**
     * Set gravity
     *
     * @param boolean $gravity
     * @return Headline
     */
    public function setGravity($gravity)
    {
        $this->gravity = $gravity;

        return $this;
    }

    /**
     * Get gravity
     *
     * @return boolean 
     */
    public function getGravity()
    {
        return $this->gravity;
    }

    /**
     * Set offsetx
     *
     * @param integer $offsetx
     * @return Headline
     */
    public function setOffsetx($offsetx)
    {
        $this->offsetx = $offsetx;

        return $this;
    }

    /**
     * Get offsetx
     *
     * @return integer 
     */
    public function getOffsetx()
    {
        return $this->offsetx;
    }

    /**
     * Set offsety
     *
     * @param integer $offsety
     * @return Headline
     */
    public function setOffsety($offsety)
    {
        $this->offsety = $offsety;

        return $this;
    }

    /**
     * Get offsety
     *
     * @return integer 
     */
    public function getOffsety()
    {
        return $this->offsety;
    }

    /**
     * Set headline
     *
     * @param string $headline
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
     * @param boolean $usetopline
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
     * @return boolean 
     */
    public function getUsetopline()
    {
        return $this->usetopline;
    }

    /**
     * Set fontsize
     *
     * @param integer $fontsize
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
     * @return integer 
     */
    public function getFontsize()
    {
        return $this->fontsize;
    }

    /**
     * Set headlineclass
     *
     * @param string $headlineclass
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
     * @param boolean $italic
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
     * @return boolean 
     */
    public function getItalic()
    {
        return $this->italic;
    }
}
