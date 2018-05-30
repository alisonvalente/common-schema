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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer.
 *
 * @ORM\Table(name="cs_trading_order_customer")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Customer\CustomerRepository")
 */
class Customer extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", unique=false)
     */
    private $nickname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", unique=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", unique=false)
     */
    private $first_name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", unique=false)
     */
    private $last_name;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    private $expands;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\People\Phone
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\People\Phone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phone_id", referencedColumnName="id", unique=true)
     * })
     */
    private $phone;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alternative_phone_id", referencedColumnName="id", unique=true)
     * })
     */
    private $alternative_phone;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\People\Document
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\People\Document")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="document_id", referencedColumnName="id", unique=true)
     * })
     */
    private $document;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_billing_id", referencedColumnName="id", unique=true)
     * })
     */
    private $address_billing;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_delivery_id", referencedColumnName="id", unique=true)
     * })
     */
    private $address_delivery;

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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * Set expands.
     *
     * @param array $expands
     *
     * @return Customer
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
     * @param null|\Gpupo\CommonSchema\ORM\Entity\People\Phone $phone
     *
     * @return Customer
     */
    public function setPhone(\Gpupo\CommonSchema\ORM\Entity\People\Phone $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\People\Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set alternativePhone.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone $alternativePhone
     *
     * @return Customer
     */
    public function setAlternativePhone(\Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone $alternativePhone = null)
    {
        $this->alternative_phone = $alternativePhone;

        return $this;
    }

    /**
     * Get alternativePhone.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone
     */
    public function getAlternativePhone()
    {
        return $this->alternative_phone;
    }

    /**
     * Set document.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\People\Document $document
     *
     * @return Customer
     */
    public function setDocument(\Gpupo\CommonSchema\ORM\Entity\People\Document $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\People\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set addressBilling.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling $addressBilling
     *
     * @return Customer
     */
    public function setAddressBilling(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling $addressBilling = null)
    {
        $this->address_billing = $addressBilling;

        return $this;
    }

    /**
     * Get addressBilling.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling
     */
    public function getAddressBilling()
    {
        return $this->address_billing;
    }

    /**
     * Set addressDelivery.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery $addressDelivery
     *
     * @return Customer
     */
    public function setAddressDelivery(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery $addressDelivery = null)
    {
        $this->address_delivery = $addressDelivery;

        return $this;
    }

    /**
     * Get addressDelivery.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery
     */
    public function getAddressDelivery()
    {
        return $this->address_delivery;
    }
}
