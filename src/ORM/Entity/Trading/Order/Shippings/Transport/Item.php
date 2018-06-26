<?php

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Transport;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="cs_trading_order_shipping_transport")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shippings\Transport\ItemRepository")
 */
class Item extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @ORM\Column(name="carrier", type="string", unique=false)
     */
    protected $carrier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ship", type="datetime")
     */
    protected $date_ship;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_tracking_ship", type="datetime")
     */
    protected $date_tracking_ship;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_service", type="string", unique=false)
     */
    protected $delivery_service;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    protected $expands;

    /**
     * @var array
     *
     * @ORM\Column(name="tags", type="array")
     */
    protected $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="tracking_link", type="string", unique=false)
     */
    protected $tracking_link;

    /**
     * @var string
     *
     * @ORM\Column(name="tracking_number", type="string", unique=false)
     */
    protected $tracking_number;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping", inversedBy="transports")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipping_id", referencedColumnName="id")
     * })
     */
    protected $shipping;


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
     * Set carrier.
     *
     * @param string $carrier
     *
     * @return Item
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Get carrier.
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Set dateShip.
     *
     * @param \DateTime $dateShip
     *
     * @return Item
     */
    public function setDateShip($dateShip)
    {
        $this->date_ship = $dateShip;

        return $this;
    }

    /**
     * Get dateShip.
     *
     * @return \DateTime
     */
    public function getDateShip()
    {
        return $this->date_ship;
    }

    /**
     * Set dateTrackingShip.
     *
     * @param \DateTime $dateTrackingShip
     *
     * @return Item
     */
    public function setDateTrackingShip($dateTrackingShip)
    {
        $this->date_tracking_ship = $dateTrackingShip;

        return $this;
    }

    /**
     * Get dateTrackingShip.
     *
     * @return \DateTime
     */
    public function getDateTrackingShip()
    {
        return $this->date_tracking_ship;
    }

    /**
     * Set deliveryService.
     *
     * @param string $deliveryService
     *
     * @return Item
     */
    public function setDeliveryService($deliveryService)
    {
        $this->delivery_service = $deliveryService;

        return $this;
    }

    /**
     * Get deliveryService.
     *
     * @return string
     */
    public function getDeliveryService()
    {
        return $this->delivery_service;
    }

    /**
     * Set expands.
     *
     * @param array $expands
     *
     * @return Item
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
     * Set tags.
     *
     * @param array $tags
     *
     * @return Item
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set trackingLink.
     *
     * @param string $trackingLink
     *
     * @return Item
     */
    public function setTrackingLink($trackingLink)
    {
        $this->tracking_link = $trackingLink;

        return $this;
    }

    /**
     * Get trackingLink.
     *
     * @return string
     */
    public function getTrackingLink()
    {
        return $this->tracking_link;
    }

    /**
     * Set trackingNumber.
     *
     * @param string $trackingNumber
     *
     * @return Item
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->tracking_number = $trackingNumber;

        return $this;
    }

    /**
     * Get trackingNumber.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }

    /**
     * Set shipping.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping|null $shipping
     *
     * @return Item
     */
    public function setShipping(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping $shipping = null)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping.
     *
     * @return \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping|null
     */
    public function getShipping()
    {
        return $this->shipping;
    }
}
