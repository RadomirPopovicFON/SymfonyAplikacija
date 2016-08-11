<?php

namespace KladionicaBundle\Entity;

/**
 * Kvota
 */
class Kvota
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $domacin;

    /**
     * @var string
     */
    private $gost;

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
    private $neresenIshod;


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
     * Set domacin
     *
     * @param string $domacin
     *
     * @return Kvota
     */
    public function setDomacin($domacin)
    {
        $this->domacin = $domacin;

        return $this;
    }

    /**
     * Get domacin
     *
     * @return string
     */
    public function getDomacin()
    {
        return $this->domacin;
    }

    /**
     * Set gost
     *
     * @param string $gost
     *
     * @return Kvota
     */
    public function setGost($gost)
    {
        $this->gost = $gost;

        return $this;
    }

    /**
     * Get gost
     *
     * @return string
     */
    public function getGost()
    {
        return $this->gost;
    }

    /**
     * Set pobedjujeDomacin
     *
     * @param string $pobedjujeDomacin
     *
     * @return Kvota
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
     * @return Kvota
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
     * Set neresenIshod
     *
     * @param string $neresenIshod
     *
     * @return Kvota
     */
    public function setNeresenIshod($neresenIshod)
    {
        $this->neresenIshod = $neresenIshod;

        return $this;
    }

    /**
     * Get neresenIshod
     *
     * @return string
     */
    public function getNeresenIshod()
    {
        return $this->neresenIshod;
    }
}

