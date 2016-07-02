<?php

  namespace Simplicity\Library\Objects
  {

    class Name
    {


      const first   = 0;

      const middle  = 1;

      const last    = 2;

      private $data = [
        self::first   => null,
        self::middle  => null,
        self::last    => null
      ];

      public function __construct( string $first, string $middle, string $last )
      {
        $this->setFirst(  ucfirst( strtolower( $first   ) ) );
        $this->setMiddle( ucfirst( strtolower( $middle  ) ) );
        $this->setLast(   ucfirst( strtolower( $last    ) ) );
      }

      public function __destruct()
      {

      }


      public function name() : string
      { return $this->first()." ".$this->middle()." ".$this->last(); }

      public function first() : string
      { return $this->data[self::first]; }

      public function middle() : string
      { return $this->data[self::middle]; }

      public function last() : string
      { return $this->data[self::last]; }


      private function setFirst( string $first )
      { $this->data[self::first] = $first; }

      private function setMiddle( string $middle )
      { $this->data[self::middle] = $middle; }

      private function setLast( string $last )
      { $this->data[self::last] = $last; }
    }
  }