<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_27\Model;

class SwarmSpecCAConfig
{
    /**
     * @var int
     */
    protected $nodeCertExpiry;
    /**
     * @var SwarmSpecCAConfigExternalCAsItem[]
     */
    protected $externalCAs;

    /**
     * @return int
     */
    public function getNodeCertExpiry()
    {
        return $this->nodeCertExpiry;
    }

    /**
     * @param int $nodeCertExpiry
     *
     * @return self
     */
    public function setNodeCertExpiry($nodeCertExpiry = null)
    {
        $this->nodeCertExpiry = $nodeCertExpiry;

        return $this;
    }

    /**
     * @return SwarmSpecCAConfigExternalCAsItem[]
     */
    public function getExternalCAs()
    {
        return $this->externalCAs;
    }

    /**
     * @param SwarmSpecCAConfigExternalCAsItem[] $externalCAs
     *
     * @return self
     */
    public function setExternalCAs(array $externalCAs = null)
    {
        $this->externalCAs = $externalCAs;

        return $this;
    }
}