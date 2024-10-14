<?php

namespace Adcetera\svc_max\Type;

class DebuggingHeader {

    /**
     * @var LogInfo $categories
     */
    protected $categories = null;

    /**
     * @var LogType $debugLevel
     */
    protected $debugLevel = null;

    /**
     * @param LogInfo $categories
     * @param LogType $debugLevel
     */
    public function __construct($categories, $debugLevel) {
      $this->categories = $categories;
      $this->debugLevel = $debugLevel;
    }

    /**
     * @return LogInfo
     */
    public function getCategories() {
      return $this->categories;
    }

    /**
     * @param LogInfo $categories
     * @return DebuggingHeader
     */
    public function setCategories($categories) {
      $this->categories = $categories;
      return $this;
    }

    /**
     * @return LogType
     */
    public function getDebugLevel() {
      return $this->debugLevel;
    }

    /**
     * @param LogType $debugLevel
     * @return DebuggingHeader
     */
    public function setDebugLevel($debugLevel) {
      $this->debugLevel = $debugLevel;
      return $this;
    }

}
