<?php

  namespace Simplicity\Exception
  {
    /** ********************************************************************* */
    /**                          PHP CONFIGURATION                            */
    /** ********************************************************************* */

    /** Make sure the errors never hit the screen */
    ini_set('display_errors', '0');


    /** ********************************************************************* */
    /**                            OBJECT IMPORT                              */
    /** ********************************************************************* */

    /** The support singleton trait */
    use Simplicity\Library\Traits\Singleton;

    class Exception
    {

      /** ********************************************************************* */
      /**                              TRAITS                                   */
      /** ********************************************************************* */

      /** Use the singleton support trait */
      use Singleton;

      public static function handle( $severity, $message, $file, $line )
      {
        echo $file.'<br/>';
        echo $line.'<br />';
        echo $message;
        exit();
      }

      public static function fatal()
      {

      }
    }
    /** ********************************************************************* */
    /**                            INSTANTIATE                                */
    /** ********************************************************************* */

    /** Instantiate the handler so we do not have to worry about it */
    Exception::getInstance();
    /** Set the exception handler */
    set_error_handler( array( 'Simplicity\Exception\Exception', 'handle' ) );
    /** Set the shutdown function */
    register_shutdown_function( array( 'Simplicity\Exception\Exception', 'fatal' ) );
  }