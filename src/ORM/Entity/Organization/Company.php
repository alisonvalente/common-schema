<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\CommonSchema\ORM\Entity\Organization;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company.
 *
 * @ORM\Table(name="cs_organization_company")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Organization\CompanyRepository")
 */
class Company extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", unique=false)
     */
    protected $nickname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", unique=false)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", unique=false)
     */
    protected $first_name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", unique=false)
     */
    protected $last_name;

    /**
     * @var int
     *
     * @ORM\Column(name="internal_id", type="bigint")
     */
    protected $internal_id;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    protected $expands;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Organization\Phone
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Organization\Phone", cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phone_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $phone;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone", cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alternative_phone_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $alternative_phone;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Organization\Document
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Organization\Document", cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="document_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $document;

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
     * Set nickname.
     *
     * @param string $nickname
     *
     * @return Company
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname.
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Company
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return Company
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return Company
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set internalId.
     *
     * @param int $internalId
     *
     * @return Company
     */
    public function setInternalId($internalId)
    {
        $this->internal_id = $internalId;

        return $this;
    }

    /**
     * Get internalId.
     *
     * @return int
     */
    public function getInternalId()
    {
        return $this->internal_id;
    }

    /**
     * Set expands.
     *
     * @param array $expands
     *
     * @return Company
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
     * Set phone.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Organization\Phone $phone
     *
     * @return Company
     */
    public function setPhone(\Gpupo\CommonSchema\ORM\Entity\Organization\Phone $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Organization\Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set alternativePhone.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone $alternativePhone
     *
     * @return Company
     */
    public function setAlternativePhone(\Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone $alternativePhone = null)
    {
        $this->alternative_phone = $alternativePhone;

        return $this;
    }

    /**
     * Get alternativePhone.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone
     */
    public function getAlternativePhone()
    {
        return $this->alternative_phone;
    }

    /**
     * Set document.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Organization\Document $document
     *
     * @return Company
     */
    public function setDocument(\Gpupo\CommonSchema\ORM\Entity\Organization\Document $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Organization\Document
     */
    public function getDocument()
    {
        return $this->document;
    }
}
