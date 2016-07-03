<?php

namespace Simplicity\Module\Request
{

  class Address
  {
    /** ********************************************************************* */
    /**                            CONSTANTS                                  */
    /** ********************************************************************* */

    const ipv4    = 0;

    const ipv6    = 1;

    const type    = 0;

    const address = 1;

    /** ********************************************************************* */
    /**                            VARIABLES                                  */
    /** ********************************************************************* */

    private $data = [
      self::type    => null,
      self::address => null
    ];


    /** ********************************************************************* */
    /**                              CORE                                     */
    /** ********************************************************************* */

    public function __construct( string $address )
    {
      $this->setType( filter_var($address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)?self::ipv6:self::ipv4 );
      $this->setAddress( $address );
    }

    public function __destruct()
    {

    }

    /** ********************************************************************* */
    /**                             GETTER                                    */
    /** ********************************************************************* */

    private function type() : int
    { return $this->data[self::type]; }

    private function address() : string
    { return $this->data[self::address]; }

    /** ********************************************************************* */
    /**                             SETTER                                    */
    /** ********************************************************************* */

    private function setType( int $type )
    { $this->data[self::type] = $type; }

    private function setAddress( string $address )
    { $this->data[self::address] = $address; }
  }
}