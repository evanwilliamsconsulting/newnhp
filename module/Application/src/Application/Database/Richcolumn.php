<?php



/**
 * Richcolumn
 */
class Richcolumn
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \stdClass
     */
    private $article;

    /**
     * @var int
     */
    private $startline;

    /**
     * @var int
     */
    private $endline;

    /**
     * @var bool
     */
    private $useremainder;

    /**
     * @var bool
     */
    private $usecontinuedon;

    /**
     * @var string
     */
    private $continuedon;

    /**
     * @var bool
     */
    private $usecontinuedfrom;

    /**
     * @var string
     */
    private $continuedfrom;

    /**
     * @var int
     */
    private $charsperline;

    /**
     * @var string
     */
    private $textclass;

    /**
     * @var bool
     */
    private $addlineheight;


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
     * Set article
     *
     * @param \stdClass $article
     *
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
     * @param int $startline
     *
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
     * @return int
     */
    public function getStartline()
    {
        return $this->startline;
    }

    /**
     * Set endline
     *
     * @param int $endline
     *
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
     * @return int
     */
    public function getEndline()
    {
        return $this->endline;
    }

    /**
     * Set useremainder
     *
     * @param bool $useremainder
     *
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
     * @return bool
     */
    public function getUseremainder()
    {
        return $this->useremainder;
    }

    /**
     * Set usecontinuedon
     *
     * @param bool $usecontinuedon
     *
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
     * @return bool
     */
    public function getUsecontinuedon()
    {
        return $this->usecontinuedon;
    }

    /**
     * Set continuedon
     *
     * @param string $continuedon
     *
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
     * @param bool $usecontinuedfrom
     *
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
     * @return bool
     */
    public function getUsecontinuedfrom()
    {
        return $this->usecontinuedfrom;
    }

    /**
     * Set continuedfrom
     *
     * @param string $continuedfrom
     *
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
     * @param int $charsperline
     *
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
     * @return int
     */
    public function getCharsperline()
    {
        return $this->charsperline;
    }

    /**
     * Set textclass
     *
     * @param string $textclass
     *
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
     * @param bool $addlineheight
     *
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
     * @return bool
     */
    public function getAddlineheight()
    {
        return $this->addlineheight;
    }
}
