<?php

namespace Adcetera\svc_max\Type;

class CoverageQuery {

  /**
   * @var CoverageQuery $queryList
   */
  protected $queryList = null;

  /**
   * @param CoverageQuery $queryList
   */
  public function __construct($queryList) {
    $this->queryList = $queryList;
  }

  /**
   * @return CoverageQuery
   */
  public function getQueryList() {
    return $this->queryList;
  }

  /**
   * @param CoverageQuery $queryList
   * @return CoverageQuery
   */
  public function setQueryList($queryList) {
    $this->queryList = $queryList;
    return $this;
  }

}