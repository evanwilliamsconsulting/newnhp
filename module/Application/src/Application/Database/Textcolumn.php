<?php



/**
 * Textcolumn
 */
class Textcolumn
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $startline;

    /**
     * @var int
     */
    private $endline;

    /**
     * @var int
     */
    private $fontsize;

    /**
     * @var bool
     */
    private $useremainder;

    /**
     * @var bool
     */
    private $usecontinuedon;

    /**
     * @var bool
     */
    private $usecontinuedfrom;

    /**
     * @var string
     */
    private $continuedon;

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
     * @var \stdClass
     */
    private $wordage;


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
     * Set startline
     *
     * @param int $startline
     *
     * @return Textcolumn
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
     * @return Textcolumn
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
     * Set fontsize
     *
     * @param int $fontsize
     *
     * @return Textcolumn
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
     * Set useremainder
     *
     * @param bool $useremainder
     *
     * @return Textcolumn
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
     * @return Textcolumn
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
     * Set usecontinuedfrom
     *
     * @param bool $usecontinuedfrom
     *
     * @return Textcolumn
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
     * Set continuedon
     *
     * @param string $continuedon
     *
     * @return Textcolumn
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
     * Set continuedfrom
     *
     * @param string $continuedfrom
     *
     * @return Textcolumn
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
     * @return Textcolumn
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
     * @return Textcolumn
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
     * Set wordage
     *
     * @param \stdClass $wordage
     *
     * @return Textcolumn
     */
    public function setWordage($wordage)
    {
        $this->wordage = $wordage;

        return $this;
    }

    /**
     * Get wordage
     *
     * @return \stdClass
     */
    public function getWordage()
    {
        return $this->wordage;
    }
}
