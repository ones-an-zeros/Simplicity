<?php

namespace Simplicity\Module\Request
{

  class Method
  {
    /** ********************************************************************* */
    /**                            CONSTANTS                                  */
    /** ********************************************************************* */

    const get   = 0;

    const post  = 1;


    const type  = 0;

    const text  = 1;

    /** ********************************************************************* */
    /**                            VARIABLES                                  */
    /** ********************************************************************* */

    private $data = [
      self::type => null,
      self::text => null
    ];

    /** ********************************************************************* */
    /**                              CORE                                     */
    /** ********************************************************************* */

    public function __construct( string $text )
    {
      $this->setType( $text );
      $this->setText( $text );
    }

    public function __destruct()
    {

    }

    /** ********************************************************************* */
    /**                             GETTER                                    */
    /** ********************************************************************* */

    public function type() : int
    { return $this->data[self::type]; }

    public function text() : string
    { return $this->data[self::text]; }

    /** ********************************************************************* */
    /**                             SETTER                                    */
    /** ********************************************************************* */

    private function setType( string $type )
    { $this->data[self::type] = ((strtoupper($type)=="GET")?self::get:self::post); }

    private function setText( string $text )
    { $this->data[self::text] = $text; }
  }
}