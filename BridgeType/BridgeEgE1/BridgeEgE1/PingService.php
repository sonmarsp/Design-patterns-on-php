<?php
namespace BridgeEgE1;

class PingService extends Service
{
  public function get(): string
  {
    return $this->implementation->format('pong');
  }

}