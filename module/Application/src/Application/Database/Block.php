<?php



/**
 * Block
 */
class Block
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \stdClass
     */
    private $containerreference;


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
     * Set containerreference
     *
     * @param \stdClass $containerreference
     *
     * @return Block
     */
    public function setContainerreference($containerreference)
    {
        $this->containerreference = $containerreference;

        return $this;
    }

    /**
     * Get containerreference
     *
     * @return \stdClass
     */
    public function getContainerreference()
    {
        return $this->containerreference;
    }
}
