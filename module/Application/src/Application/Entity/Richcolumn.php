<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Richcolumn
 */
class Richcolumn
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
     * @var \stdClass
     */
    private $article;

    /**
     * @var integer
     */
    private $startline;

    /**
     * @var integer
     */
    private $endline;

    /**
     * @var boolean
     */
    private $useremainder;

    /**
     * @var boolean
     */
    private $usecontinuedon;

    /**
     * @var string
     */
    private $continuedon;

    /**
     * @var boolean
     */
    private $usecontinuedfrom;

    /**
     * @var string
     */
    private $continuedfrom;

    /**
     * @var integer
     */
    private $charsperline;

    /**
     * @var string
     */
    private $textclass;

    /**
     * @var boolean
     */
    private $addlineheight;


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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * @return Richcolumn
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
     * Set article
     *
     * @param \stdClass $article
     * @return Richcolumn
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \stdClass 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set startline
     *
     * @param integer $startline
     * @return Richcolumn
     */
    public function setStartline($startline)
    {
        $this->startline = $startline;

        return $this;
    }

    /**
     * Get startline
     *
     * @return integer 
     */
    public function getStartline()
    {
        return $this->startline;
    }

    /**
     * Set endline
     *
     * @param integer $endline
     * @return Richcolumn
     */
    public function setEndline($endline)
    {
        $this->endline = $endline;

        return $this;
    }

    /**
     * Get endline
     *
     * @return integer 
     */
    public function getEndline()
    {
        return $this->endline;
    }

    /**
     * Set useremainder
     *
     * @param boolean $useremainder
     * @return Richcolumn
     */
    public function setUseremainder($useremainder)
    {
        $this->useremainder = $useremainder;

        return $this;
    }

    /**
     * Get useremainder
     *
     * @return boolean 
     */
    public function getUseremainder()
    {
        return $this->useremainder;
    }

    /**
     * Set usecontinuedon
     *
     * @param boolean $usecontinuedon
     * @return Richcolumn
     */
    public function setUsecontinuedon($usecontinuedon)
    {
        $this->usecontinuedon = $usecontinuedon;

        return $this;
    }

    /**
     * Get usecontinuedon
     *
     * @return boolean 
     */
    public function getUsecontinuedon()
    {
        return $this->usecontinuedon;
    }

    /**
     * Set continuedon
     *
     * @param string $continuedon
     * @return Richcolumn
     */
    public function setContinuedon($continuedon)
    {
        $this->continuedon = $continuedon;

        return $this;
    }

    /**
     * Get continuedon
     *
     * @return string 
     */
    public function getContinuedon()
    {
        return $this->continuedon;
    }

    /**
     * Set usecontinuedfrom
     *
     * @param boolean $usecontinuedfrom
     * @return Richcolumn
     */
    public function setUsecontinuedfrom($usecontinuedfrom)
    {
        $this->usecontinuedfrom = $usecontinuedfrom;

        return $this;
    }

    /**
     * Get usecontinuedfrom
     *
     * @return boolean 
     */
    public function getUsecontinuedfrom()
    {
        return $this->usecontinuedfrom;
    }

    /**
     * Set continuedfrom
     *
     * @param string $continuedfrom
     * @return Richcolumn
     */
    public function setContinuedfrom($continuedfrom)
    {
        $this->continuedfrom = $continuedfrom;

        return $this;
    }

    /**
     * Get continuedfrom
     *
     * @return string 
     */
    public function getContinuedfrom()
    {
        return $this->continuedfrom;
    }

    /**
     * Set charsperline
     *
     * @param integer $charsperline
     * @return Richcolumn
     */
    public function setCharsperline($charsperline)
    {
        $this->charsperline = $charsperline;

        return $this;
    }

    /**
     * Get charsperline
     *
     * @return integer 
     */
    public function getCharsperline()
    {
        return $this->charsperline;
    }

    /**
     * Set textclass
     *
     * @param string $textclass
     * @return Richcolumn
     */
    public function setTextclass($textclass)
    {
        $this->textclass = $textclass;

        return $this;
    }

    /**
     * Get textclass
     *
     * @return string 
     */
    public function getTextclass()
    {
        return $this->textclass;
    }

    /**
     * Set addlineheight
     *
     * @param boolean $addlineheight
     * @return Richcolumn
     */
    public function setAddlineheight($addlineheight)
    {
        $this->addlineheight = $addlineheight;

        return $this;
    }

    /**
     * Get addlineheight
     *
     * @return boolean 
     */
    public function getAddlineheight()
    {
        return $this->addlineheight;
    }
}
