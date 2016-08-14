<?php



/**
 * Broadsheet
 */
class Broadsheet
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $pageno;

    /**
     * @var int
     */
    private $pagewidth;

    /**
     * @var int
     */
    private $pageheight;


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
     * Set pageno
     *
     * @param int $pageno
     *
     * @return Broadsheet
     */
    public function setPageno($pageno)
    {
        $this->pageno = $pageno;

        return $this;
    }

    /**
     * Get pageno
     *
     * @return int
     */
    public function getPageno()
    {
        return $this->pageno;
    }

    /**
     * Set pagewidth
     *
     * @param int $pagewidth
     *
     * @return Broadsheet
     */
    public function setPagewidth($pagewidth)
    {
        $this->pagewidth = $pagewidth;

        return $this;
    }

    /**
     * Get pagewidth
     *
     * @return int
     */
    public function getPagewidth()
    {
        return $this->pagewidth;
    }

    /**
     * Set pageheight
     *
     * @param int $pageheight
     *
     * @return Broadsheet
     */
    public function setPageheight($pageheight)
    {
        $this->pageheight = $pageheight;

        return $this;
    }

    /**
     * Get pageheight
     *
     * @return int
     */
    public function getPageheight()
    {
        return $this->pageheight;
    }
}
