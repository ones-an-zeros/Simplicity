<?php

  namespace Simplicity\Configuration\Controller
  {

    /** ********************************************************************* */
    /**                            OBJECT IMPORT                              */
    /** ********************************************************************* */

    /** The support singleton trait */
    use Simplicity\Library\Traits\Singleton;
    /** The controller abstract */
    use Simplicity\Configuration\Abstracts\Controller;
    /** The collection object for this controller */
    use Simplicity\Configuration\Constants\Collection;

    class Constants extends Controller
    {
      /** ********************************************************************* */
      /**                              TRAITS                                   */
      /** ********************************************************************* */

      /** Use the singleton support trait */
      use Singleton;

      /** ********************************************************************* */
      /**                             VARIABLES                                 */
      /** ********************************************************************* */

      protected static $file  = "constant.configuration.json";

      private $collection;

      /** ********************************************************************* */
      /**                               CORE                                    */
      /** ********************************************************************* */

      public function constructor()
      {
        /** Pass our self into the parent construct so it can do the initial heavy lifting */
        parent::constructor();
        /** Make the collection object */
        $this->collection = new Collection();
        /** Include the files */
        $this->process( $this->data( self::$file ) );
      }

      private function process( \stdClass $data )
      {
        foreach( $data as $name => $value ){
          $this->collection->set( $name, $value );
        }
      }
    }
  }