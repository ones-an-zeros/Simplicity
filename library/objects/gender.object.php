<?php

  namespace Simplicity\Library\Objects
  {

    class Gender
    {
      const male    = 0;

      const female  = 1;

      const gender  = 0;

      const name    = 1;

      private $data = [
        self::gender  => null,
        self::name    => [self::male => "Male", self::female => "Female" ]
      ];

      public function __construct( int $gender )
      { $this->setGender( $gender ); }

      public function __destruct()
      {

      }

      public function gender() : int
      { return $this->data[self::gender]; }

      public function genderString() : string
      { return $this->data[self::name][$this->data[self::gender]]; }

      private function setGender( int $gender )
      { $this->data[self::gender] = $gender; }
    }
  }