<?php

  namespace SMM\Module\Person\Object
  {

    use SMM\Module\Person\Object\{Accounts, Key, Photos};
    use SMM\Support\Object\{Address, Browser, Date, EmailAddress, Gender, IpAddress, Name};


    class Collection
    {

      const key         = 0;

      const name        = 1;

      const email       = 2;

      const dob         = 3;

      const photos      = 4;

      const gender      = 5;

      const location    = 6;

      const accounts    = 7;

      const browser     = 8;

      const ipAddress   = 9;

      private $data = [
        self::key       => null,
        self::name      => null,
        self::email     => null,
        self::dob       => null,
        self::photos    => null,
        self::gender    => null,
        self::location  => null,
        self::accounts  => null,
        self::browser   => null,
        self::ipAddress => null,
      ];

      public function __construct( \stdClass $data )
      {
        $this->setKey( $data->key );
        $this->setName( $data->first, $data->middle, $data->last );
        $this->setEmail( $data->username, $data->domain, $data->tld );
        $this->setDob( $data->day, $data->month, $data->year );
        $this->setPhoto( $data->photos );
        $this->setGender( $data->gender );
        $this->setLocation( $data->street, $data->apt, $data->city, $data->state, $data->zip );
        $this->setAccount( $data->accounts );
        $this->setBrowser( $data->browser );
        $this->setIpAddress( $data->ipAddress );
      }

      public function __destruct()
      {

      }
      
      private function setKey( int $key )
      { $this->data[self::key]    = new Key( $key ); }

      private function setName( string $first, string $middle, string $last )
      { $this->data[self::name]   = new Name( $first, $middle, $last ); }

      private function setEmail( string $username, string $domain, string $tld )
      { $this->data[self::email]  = new EmailAddress( $username, $domain, $tld ); }

      private function setDob( int $day, int $month, int $year )
      { $this->data[self::dob]    = new Date( $day, $month, $year ); }

      private function setPhoto( string $photos )
      { $this->data[self::photos] = new Photos( $photos ); }

      private function setGender( string $gender )
      { $this->data[self::gender] = new Gender( $gender); }

      private function setLocation( string $street, int $apt, string $city, string $state, int $zip )
      { $this->data[self::location] = new Address( $street, $apt, $city, $state, $zip ); }

      private function setAccount( int $accounts )
      { $this->data[self::accounts] = new Accounts( $accounts ); }

      private function setBrowser( string $browser )
      { $this->data[self::browser] = new Browser( $browser ); }

      private function setIpAddress( string $ipAddress )
      { $this->data[self::ipAddress] = new IpAddress( $ipAddress ); }
    }
}