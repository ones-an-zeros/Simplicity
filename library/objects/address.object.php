<?php

  namespace Simplicity\Library\Objects
  {

    class Address
    {

      const street  = 0;

      const apt     = 1;

      const city    = 2;

      const state   = 3;

      const zip     = 4;

      private $data = [
        self::street  => null,
        self::apt     => null,
        self::city    => null,
        self::state   => null,
        self::zip     => null
      ];

      public function __construct( string $street, int $apt, string $city, string $state, int $zip )
      {
        $this->setStreet( $street );
        $this->setApt( $apt );
        $this->setCity( $city );
        $this->setState( $state );
        $this->setZip( $zip );
      }

      public function __destruct()
      {

      }


      public function street() : string
      { return $this->data[self::street]; }

      public function apt() : int
      { return $this->data[self::apt]; }

      public function city() : string
      { return $this->data[self::city]; }

      public function state() : string
      { return $this->data[self::state]; }

      public function zip() : int
      { return $this->data[self::zip]; }


      private function setStreet( string $street )
      { $this->data[self::street] = $street; }

      private function setApt( int $apt )
      { $this->data[self::apt] = $apt; }

      private function setCity( string $city )
      { $this->data[self::city] = $city; }

      private function setState( string $state )
      { $this->data[self::state] = $state; }

      private function setZip( string $zip )
      { $this->data[self::zip] = $zip; }
    }
  }