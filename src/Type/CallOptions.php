<?php

namespace Adcetera\svc_max\Type;

class CallOptions {

    /**
     * @var string $client
     */
    protected $client = null;

    /**
     * @param string $client
     */
    public function __construct($client) {
      $this->client = $client;
    }

    /**
     * @return string
     */
    public function getClient() {
      return $this->client;
    }

    /**
     * @param string $client
     * @return CallOptions
     */
    public function setClient($client) {
      $this->client = $client;
      return $this;
    }

}
