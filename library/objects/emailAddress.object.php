<?php

  namespace Simplicity\Library\Objects
  {

    class EmailAddress
    {
      const username  = 0;

      const domain    = 1;

      const tld       = 2;


      private $data = [
        self::username  => null,
        self::domain    => null,
        self::tld       => null
      ];

      public function __construct( string $username, string $domain, string $tld )
      {
        $this->setUsername( $username );
        $this->setDomain( $domain );
        $this->setTld( $tld );
      }

      public function __destruct()
      {

      }

      public function email() : string
      { return sprintf("%s@%s.%s", $this->username(), $this->domain(), $this->tld()); }

      public function username() : string
      { return $this->data[self::username]; }

      public function domain() : string
      { return $this->data[self::domain]; }

      public function tld() : string
      { return $this->data[self::tld]; }


      private function setUsername( string $username )
      { $this->data[self::username] = $username; }

      private function setDomain( string $domain )
      { $this->data[self::domain] = $domain; }

      private function setTld( string $tld )
      { $this->data[self::tld] = $tld; }

    }
  }