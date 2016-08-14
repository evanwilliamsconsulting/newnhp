<?php



/**
 * Article
 */
class Article
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $columnsize;

    /**
     * @var string
     */
    private $verbage;


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
     * Set columnsize
     *
     * @param int $columnsize
     *
     * @return Article
     */
    public function setColumnsize($columnsize)
    {
        $this->columnsize = $columnsize;

        return $this;
    }

    /**
     * Get columnsize
     *
     * @return int
     */
    public function getColumnsize()
    {
        return $this->columnsize;
    }

    /**
     * Set verbage
     *
     * @param string $verbage
     *
     * @return Article
     */
    public function setVerbage($verbage)
    {
        $this->verbage = $verbage;

        return $this;
    }

    /**
     * Get verbage
     *
     * @return string
     */
    public function getVerbage()
    {
        return $this->verbage;
    }
}
