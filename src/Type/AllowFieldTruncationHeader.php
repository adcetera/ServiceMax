<?php

namespace Adcetera\svc_max\Type;

class AllowFieldTruncationHeader {

    /**
     * @var boolean $allowFieldTruncation
     */
    protected $allowFieldTruncation = null;

    /**
     * @param boolean $allowFieldTruncation
     */
    public function __construct($allowFieldTruncation) {
      $this->allowFieldTruncation = $allowFieldTruncation;
    }

    /**
     * @return boolean
     */
    public function getAllowFieldTruncation() {
      return $this->allowFieldTruncation;
    }

    /**
     * @param boolean $allowFieldTruncation
     * @return AllowFieldTruncationHeader
     */
    public function setAllowFieldTruncation($allowFieldTruncation) {
      $this->allowFieldTruncation = $allowFieldTruncation;
      return $this;
    }

}
