<?php

namespace Adcetera\svc_max\Type;

class DebuggingInfo {

    /**
     * @var string $debugLog
     */
    protected $debugLog = null;

    /**
     * @param string $debugLog
     */
    public function __construct($debugLog) {
      $this->debugLog = $debugLog;
    }

    /**
     * @return string
     */
    public function getDebugLog() {
      return $this->debugLog;
    }

    /**
     * @param string $debugLog
     * @return DebuggingInfo
     */
    public function setDebugLog($debugLog) {
      $this->debugLog = $debugLog;
      return $this;
    }

}
