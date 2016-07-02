<?php

  namespace Person
  {

    class Collection
    {

      const key       = 0;

      const name      = 1;

      const email     = 2;

      const dob       = 3;

      const photo     = 4;

      const gender    = 5;

      const location  = 6;

      const account   = 7;

      const browser   = 8;

      const ip        = 9;

      private $data = [
        self::key       => null,
        self::name      => null,
        self::email     => null,
        self::dob       => null,
        self::photo     => null,
        self::gender    => null,
        self::location  => null,
        self::account   => null,
        self::browser   => null,
        self::ip        => null,
      ];

      public function __construct( object $data )
      {
        $this->setKey( $data->key );
        $this->setName( $data->first, $data->middle, $data->last );
        $this->setEmail( $data->email );
        $this->setDob( $data->day, $data->month, $data->year );
        $this->setPhoto( $data->photo );
        $this->setGender( $data->gender );
        $this->setLocation( $data->street, $data->apt, $data->city, $data->state, $data->zip );
        $this->setAccount( $data->account );
        $this->setBrowser( $data->browser );
        $this->setIp( $data->Ip );
      }

      public function __destruct()
      {

      }


      private function setKey( int $key ) : void
      { $this->data[self::key] = $key; }

      private function setName( string $first, string $middle, string $last ) : void
      { $this->data[self::name] = new Name( $first, $middle, $last ); }

      private function setEmail( string $email ) : void
      { $this->data[self::email] = $email; }

      private function setDob( int $day, int $month, int $year ) : void
      { $this->data[self::dob] = new Dob( $day, $month, $year ); }

      private function setPhoto( string $photo ) : void
      { $this->data[self::photo] = $photo; }

      private function setGender( string $gender ) : void
      { $this->data[self::gender] = $gender; }

      private function setLocation( string $street, int $apt, string $city, string $state, int $zip ) : void
      { $this->data[self::location] = new Location( $street, $apt, $city, $state, $zip ); }

      private function setAccount( int $account ) : void
      { $this->data[self::account] = $account; }

      private function setBrowser( string $browser ) : void
      { $this->data[self::browser] = $browser; }

      private function setIp( string $ip ) : void
      { $this->data[self::ip] = $ip; }
    }
}