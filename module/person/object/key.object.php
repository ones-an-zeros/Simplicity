<?php

  namespace SMM\Module\Person\Object
  {

    class Key
    {
      const key = 0;


      private $data = [
        self::key => null
      ];

      public function __construct( int $key )
      { $this->setKey( $key ); }

      public function __destruct()
      {
        
      }

      public function key(): int
      { return $this->data[self::key]; }

      private function setKey( int $key )
      { $this->data[self::key] = $key; }
    }
  }