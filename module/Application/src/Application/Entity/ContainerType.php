<?php



/**
 * ContainerType
 */
class ContainerType
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $containertype;


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
     * Set containertype
     *
     * @param string $containertype
     *
     * @return ContainerType
     */
    public function setContainertype($containertype)
    {
        $this->containertype = $containertype;

        return $this;
    }

    /**
     * Get containertype
     *
     * @return string
     */
    public function getContainertype()
    {
        return $this->containertype;
    }
}

