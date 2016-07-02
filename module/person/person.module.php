<?php

  namespace SMM\Module\Person
  {

    use SMM\Module\Person\Object\Collection;

    class Person
    {

      private $collection;


      public function __construct( \stdClass $data )
      {
        $this->collection = new Collection( $data );
      }
    }
  }