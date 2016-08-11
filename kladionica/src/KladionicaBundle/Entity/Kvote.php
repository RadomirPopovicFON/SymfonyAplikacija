<?php

namespace KladionicaBundle\Entity;

/**
 * Kvote
 */
class Kvote
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pobedjujeDomacin;

    /**
     * @var string
     */
    private $pobedjujeGost;

    /**
     * @var string
     */
    private $nereseno;


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
     * Set pobedjujeDomacin
     *
     * @param string $pobedjujeDomacin
     *
     * @return Kvote
     */
    public function setPobedjujeDomacin($pobedjujeDomacin)
    {
        $this->pobedjujeDomacin = $pobedjujeDomacin;

        return $this;
    }

    /**
     * Get pobedjujeDomacin
     *
     * @return string
     */
    public function getPobedjujeDomacin()
    {
        return $this->pobedjujeDomacin;
    }

    /**
     * Set pobedjujeGost
     *
     * @param string $pobedjujeGost
     *
     * @return Kvote
     */
    public function setPobedjujeGost($pobedjujeGost)
    {
        $this->pobedjujeGost = $pobedjujeGost;

        return $this;
    }

    /**
     * Get pobedjujeGost
     *
     * @return string
     */
    public function getPobedjujeGost()
    {
        return $this->pobedjujeGost;
    }

    /**
     * Set nereseno
     *
     * @param string $nereseno
     *
     * @return Kvote
     */
    public function setNereseno($nereseno)
    {
        $this->nereseno = $nereseno;

        return $this;
    }

    /**
     * Get nereseno
     *
     * @return string
     */
    public function getNereseno()
    {
        return $this->nereseno;
    }
}

