<?php

namespace KladionicaBundle\Entity;

/**
 * KosarkaKvote
 */
class KosarkaKvote
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $gostPobedjuje;

    /**
     * @var string
     */
    private $domacinPobedjuje;

    /**
     * @var string
     */
    private $hendikep;


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
     * Set gostPobedjuje
     *
     * @param string $gostPobedjuje
     *
     * @return KosarkaKvote
     */
    public function setGostPobedjuje($gostPobedjuje)
    {
        $this->gostPobedjuje = $gostPobedjuje;

        return $this;
    }

    /**
     * Get gostPobedjuje
     *
     * @return string
     */
    public function getGostPobedjuje()
    {
        return $this->gostPobedjuje;
    }

    /**
     * Set domacinPobedjuje
     *
     * @param string $domacinPobedjuje
     *
     * @return KosarkaKvote
     */
    public function setDomacinPobedjuje($domacinPobedjuje)
    {
        $this->domacinPobedjuje = $domacinPobedjuje;

        return $this;
    }

    /**
     * Get domacinPobedjuje
     *
     * @return string
     */
    public function getDomacinPobedjuje()
    {
        return $this->domacinPobedjuje;
    }

    /**
     * Set hendikep
     *
     * @param string $hendikep
     *
     * @return KosarkaKvote
     */
    public function setHendikep($hendikep)
    {
        $this->hendikep = $hendikep;

        return $this;
    }

    /**
     * Get hendikep
     *
     * @return string
     */
    public function getHendikep()
    {
        return $this->hendikep;
    }
}

