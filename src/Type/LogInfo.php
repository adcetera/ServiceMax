<?php

namespace Adcetera\svc_max\Type;

class LogInfo {

    /**
     * @var LogCategory $category
     */
    protected $category = null;

    /**
     * @var LogCategoryLevel $level
     */
    protected $level = null;

    /**
     * @param LogCategory $category
     * @param LogCategoryLevel $level
     */
    public function __construct($category, $level) {
      $this->category = $category;
      $this->level = $level;
    }

    /**
     * @return LogCategory
     */
    public function getCategory() {
      return $this->category;
    }

    /**
     * @param LogCategory $category
     * @return LogInfo
     */
    public function setCategory($category) {
      $this->category = $category;
      return $this;
    }

    /**
     * @return LogCategoryLevel
     */
    public function getLevel() {
      return $this->level;
    }

    /**
     * @param LogCategoryLevel $level
     * @return LogInfo
     */
    public function setLevel($level) {
      $this->level = $level;
      return $this;
    }

}
