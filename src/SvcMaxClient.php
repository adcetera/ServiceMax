<?php

namespace Adcetera\svc_max;

use Adcetera\svc_max\Type\CoverageQuery;

class SvcMaxClient extends \SoapClient {

  /**
   * @var array $classmap The defined classes
   */
  private static $classmap = array (
    'AllowFieldTruncationHeader' => 'Adcetera\\svc_max\\Type\\AllowFieldTruncationHeader',
    'CallOptions' => 'Adcetera\\svc_max\\Type\\CallOptions',
    'DebuggingHeader' => 'Adcetera\\svc_max\\Type\\DebuggingHeader',
    'LogInfo' => 'Adcetera\\svc_max\\Type\\LogInfo',
    'DebuggingInfo' => 'Adcetera\\svc_max\\Type\\DebuggingInfo',
    'SessionHeader' => 'Adcetera\\svc_max\\Type\\SessionHeader',
    'CoverageQuery' => 'Adcetera\\svc_max\\Type\\CoverageQuery',
    'IntegrationStatus' => 'Adcetera\\svc_max\\Type\\IntegrationStatus',
    'coverageQuery' => 'Adcetera\\svc_max\\Type\\coverageQuery',
    'coverageQueryResponse' => 'Adcetera\\svc_max\\Type\\coverageQueryResponse',
  );

  public function __construct($wsdl, $options) {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }

    $options = array_merge(array ('features' => 1), $options);
    parent::__construct($wsdl, $options);
  }

  public function coverageQuery(CoverageQuery $parameters) {
    return $this->__soapCall('coverageQuery', array($parameters));
  }

}