<?php

  namespace Simplicity\Core
  {

    class Site
    {
      const protocol  = 0;

      const domain    = 1;

      const tld       = 2;

      const sld       = 3;

      const admin     = 4;
      
      private $data = [
        self::protocol  => null,
        self::domain    => null,
        self::tld       => null,
        self::sld       => null,
        self::admin     => null,
      ];


      public function __construct( $data )
      {

      }


    }
  }