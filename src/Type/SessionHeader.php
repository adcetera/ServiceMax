<?php

namespace Adcetera\svc_max\Type;

class SessionHeader {

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @param string $sessionId
     */
    public function __construct($sessionId) {
      $this->sessionId = $sessionId;
    }

    /**
     * @return string
     */
    public function getSessionId() {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return SessionHeader
     */
    public function setSessionId($sessionId) {
      $this->sessionId = $sessionId;
      return $this;
    }

}
