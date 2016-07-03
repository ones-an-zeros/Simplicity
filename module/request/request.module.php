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

      const server  = 0;

      const client  = 1;

      const address = 0;


      /** ********************************************************************* */
      /**                             VARIABLES                                 */
      /** ********************************************************************* */

      private $data = [
        self::address => [
          self::server => null,
          self::client => null
        ]
      ];

      /** ********************************************************************* */
      /**                                 CORE                                  */
      /** ********************************************************************* */

      public function constructor()
      {
        $this->setAddress( $_SERVER['SERVER_ADDR'], $_SERVER['REMOTE_ADDR'] );

        //echo '<pre>'.print_r($_SERVER,true).'</pre>';
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

      /** ********************************************************************* */
      /**                             GETTER                                    */
      /** ********************************************************************* */

      private function setAddress( string $server, string $client )
      {
        $this->data[self::address][self::server] = new Address( $server );
        $this->data[self::address][self::client] = new Address( $client );
      }
    }
    /** ********************************************************************* */
    /**                             INSTANTIATE                               */
    /** ********************************************************************* */

    Request::getInstance();
  }