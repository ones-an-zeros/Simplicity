<?php

  namespace Person
  {

    class Person
    {

      private $collection;


      public function __construct( $data )
      {
        $this->collection = new Collection( $data );
      }
    }
  }