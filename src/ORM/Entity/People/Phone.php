<?php

namespace Gpupo\CommonSchema\ORM\Entity\People;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phone
 *
 * @ORM\Table(name="cs_people_phone")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\People\PhoneRepository")
 */
class Phone extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="area_code", type="bigint")
     */
    protected $area_code;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    protected $expands;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", unique=false)
     */
    protected $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", unique=false)
     */
    protected $number;

    /**
     * @var bool
     *
     * @ORM\Column(name="verified", type="boolean")
     */
    protected $verified;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set areaCode.
     *
     * @param int $areaCode
     *
     * @return Phone
     */
    public function setAreaCode($areaCode)
    {
        $this->area_code = $areaCode;

        return $this;
    }

    /**
     * Get areaCode.
     *
     * @return int
     */
    public function getAreaCode()
    {
        return $this->area_code;
    }

    /**
     * Set expands.
     *
     * @param array $expands
     *
     * @return Phone
     */
    public function setExpands($expands)
    {
        $this->expands = $expands;

        return $this;
    }

    /**
     * Get expands.
     *
     * @return array
     */
    public function getExpands()
    {
        return $this->expands;
    }

    /**
     * Set extension.
     *
     * @param string $extension
     *
     * @return Phone
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set number.
     *
     * @param string $number
     *
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set verified.
     *
     * @param bool $verified
     *
     * @return Phone
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get verified.
     *
     * @return bool
     */
    public function getVerified()
    {
        return $this->verified;
    }
}
