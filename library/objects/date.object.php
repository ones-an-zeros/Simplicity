<?php

  namespace Simplicity\Library\Objects
  {

    class Date
    {
      const day   = 0;

      const month = 1;

      const year  = 2;

      private $data = [
        self::day   => null,
        self::month => null,
        self::year  => null
      ];

      public function __construct( int $day, int $month, int $year )
      {
        $this->setDay( $day );
        $this->setMonth( $month );
        $this->setYear( $year );
      }

      public function __destruct()
      {

      }

      public function dob() : string
      { return $this->day()."/".$this->month()."/".$this->year(); }

      public function day() : int
      { return $this->data[self::day]; }

      public function month() : int
      { return $this->data[self::month]; }

      public function year() : int
      { return $this->data[self::year]; }


      private function setDay( int $day )
      { $this->data[self::day] = $day; }

      private function setMonth( int $month )
      { $this->data[self::month] = $month; }

      private function setYear( int $year )
      { $this->data[self::year] = $year; }
    }
  }