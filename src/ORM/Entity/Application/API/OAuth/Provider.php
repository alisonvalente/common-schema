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

namespace Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provider.
 *
 * @ORM\Table(name="cs_application_API_OAuth_provider")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Application\API\OAuth\ProviderRepository")
 */
class Provider extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="description", type="string", nullable=true, unique=false)
     */
    protected $description;

    /**
     * @var null|string
     *
     * @ORM\Column(name="endpoint", type="string", nullable=true, unique=false)
     */
    protected $endpoint;

    /**
     * @var null|string
     *
     * @ORM\Column(name="environment", type="string", nullable=true, unique=false)
     */
    protected $environment;

    /**
     * @var null|string
     *
     * @ORM\Column(name="name", type="string", nullable=true, unique=false)
     */
    protected $name;

    /**
     * @var null|string
     *
     * @ORM\Column(name="version", type="string", nullable=true, unique=false)
     */
    protected $version;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\Client", mappedBy="provider", cascade={"persist","remove"})
     */
    protected $clients;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->clients = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set description.
     *
     * @param null|string $description
     *
     * @return Provider
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set endpoint.
     *
     * @param null|string $endpoint
     *
     * @return Provider
     */
    public function setEndpoint($endpoint = null)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * Get endpoint.
     *
     * @return null|string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Set environment.
     *
     * @param null|string $environment
     *
     * @return Provider
     */
    public function setEnvironment($environment = null)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * Get environment.
     *
     * @return null|string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Set name.
     *
     * @param null|string $name
     *
     * @return Provider
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set version.
     *
     * @param null|string $version
     *
     * @return Provider
     */
    public function setVersion($version = null)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version.
     *
     * @return null|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Add client.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\Client $client
     *
     * @return Provider
     */
    public function addClient(\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\Client $client)
    {
        $this->clients[] = $client;

        return $this;
    }

    /**
     * Remove client.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\Client $client
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeClient(\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\Client $client)
    {
        return $this->clients->removeElement($client);
    }

    /**
     * Get clients.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClients()
    {
        return $this->clients;
    }
}
