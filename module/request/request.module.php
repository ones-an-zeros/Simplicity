<?php

  namespace Simplicity\Module\Request
  {
    /** ********************************************************************* */
    /**                                 USE                                   */
    /** ********************************************************************* */

    use Simplicity\Library\Traits\Singleton;

    class Request
    {
      /** ********************************************************************* */
      /**                              TRAITS                                   */
      /** ********************************************************************* */

      use Singleton;

      /** ********************************************************************* */
      /**                            CONSTANTS                                  */
      /** ********************************************************************* */

      const server      = 0;

      const client      = 1;


      const address     = 0;

      const method      = 1;

      const cookie      = 2;

      const protocol    = 3;

      const requestTime = 4;

      const userAgent   = 5;

      const script      = 6;

      const parameters  = 7;
      

      /** ********************************************************************* */
      /**                             VARIABLES                                 */
      /** ********************************************************************* */

      private $data = [
        self::address => [
          self::server => null,
          self::client => null,
        ],
        self::method      => null,
        self::cookie      => null,
        self::protocol    => null,
        self::requestTime => null,
        self::userAgent   => null,
        self::script      => null,
        self::parameters  => null
      ];

      /** ********************************************************************* */
      /**                                 CORE                                  */
      /** ********************************************************************* */

      public function constructor()
      {
        $this->setAddress( $_SERVER['SERVER_ADDR'], $_SERVER['REMOTE_ADDR'] );
        $this->setMethod( $_SERVER['REQUEST_METHOD'] );
        $this->setCookie( $_SERVER['HTTP_COOKIE'] );
        $this->setProtocol( $_SERVER['REQUEST_SCHEME'] );
        $this->setRequestTime( $_SERVER['REQUEST_TIME'] );
        $this->setUserAgent( $_SERVER['HTTP_USER_AGENT'] );
        $this->setScript( $_SERVER['SCRIPT_NAME'] );
        $this->setParameters( $_GET );
      }

      /** ********************************************************************* */
      /**                             GETTER                                    */
      /** ********************************************************************* */

      public function address( int $type ) : string
      { return $this->data[self::address][$type]; }

      public function clientAddress() : string
      { return $this->address( self::client ); }

      public function serverAddress() : string
      { return $this->address( self::server ); }

      public function method() : string
      { return $this->data[self::method]; }

      public function protocol() : string
      { return $this->data[self::protocol]; }

      public function requestTime() : string
      { return $this->data[self::requestTime]; }

      public function userAgent() : string
      { return $this->data[self::userAgent]; }

      public function script() : string
      { return $this->data[self::parameters]; }

      /** ********************************************************************* */
      /**                             GETTER                                    */
      /** ********************************************************************* */

      private function setAddress( string $server, string $client )
      {
        $this->data[self::address][self::server] = new Address( $server );
        $this->data[self::address][self::client] = new Address( $client );
      }

      private function setMethod( string $method )
      { $this->data[self::method] = new Method( $method ); }

      private function setCookie( string $cookie )
      { $this->data[self::cookie] = new Cookie( $cookie ); }

      private function setProtocol( string $protocol )
      { $this->data[self::protocol] = new Protocol( $protocol ); }

      private function setRequestTime( string $requestTime )
      { $this->data[self::requestTime] = new RequestTime( $requestTime ); }

      private function setUserAgent( string $userAgent )
      { $this->data[self::userAgent] = new UserAgent( $userAgent ); }

      private function setScript( string $script )
      { $this->data[self::script] = new Script( $script ); }

      private function setParameters( array $parameters )
      { $this->data[self::parameters] = $parameters; }
    }
    /** ********************************************************************* */
    /**                             INSTANTIATE                               */
    /** ********************************************************************* */

    Request::getInstance();
  }