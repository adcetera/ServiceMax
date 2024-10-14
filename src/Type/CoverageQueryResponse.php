<?php

namespace Adcetera\svc_max\Type;

class CoverageQueryResponse {

  /**
   * @var CoverageQuery $result
   */
  protected $result = null;

  /**
   * @param CoverageQuery $result
   */
  public function __construct($result) {
    $this->result = $result;
  }

  /**
   * @return CoverageQuery
   */
  public function getResult() {
    return $this->result;
  }

  /**
   * @param CoverageQuery $result
   * @return CoverageQueryResponse
   */
  public function setResult($result) {
    $this->result = $result;
    return $this;
  }

}