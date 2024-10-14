<?php

namespace SvcMax;

class IntegrationStatus
{

    /**
     * @var string $errMsg
     */
    protected $errMsg = null;

    /**
     * @var string $recordId
     */
    protected $recordId = null;

    /**
     * @var string $salesOrder
     */
    protected $salesOrder = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getErrMsg()
    {
      return $this->errMsg;
    }

    /**
     * @param string $errMsg
     * @return \SvcMax\IntegrationStatus
     */
    public function setErrMsg($errMsg)
    {
      $this->errMsg = $errMsg;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordId()
    {
      return $this->recordId;
    }

    /**
     * @param string $recordId
     * @return \SvcMax\IntegrationStatus
     */
    public function setRecordId($recordId)
    {
      $this->recordId = $recordId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesOrder()
    {
      return $this->salesOrder;
    }

    /**
     * @param string $salesOrder
     * @return \SvcMax\IntegrationStatus
     */
    public function setSalesOrder($salesOrder)
    {
      $this->salesOrder = $salesOrder;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \SvcMax\IntegrationStatus
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timestamp
     * @return \SvcMax\IntegrationStatus
     */
    public function setTimestamp(\DateTime $timestamp = null)
    {
      if ($timestamp == null) {
       $this->timestamp = null;
      } else {
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
      }
      return $this;
    }

}
