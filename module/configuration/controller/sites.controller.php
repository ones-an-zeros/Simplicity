<?php

  namespace Simplicity\Module\Configuration\Controller
  {

    /** ********************************************************************* */
    /**                                 USE                                   */
    /** ********************************************************************* */

    use Simplicity\Library\Traits\Singleton;
    use Simplicity\Configuration\Abstracts\Controller;
    use Simplicity\Module\Configuration\Sites\Collection;

    class Sites extends Controller
    {
      /** ********************************************************************* */
      /**                              TRAITS                                   */
      /** ********************************************************************* */

      use Singleton;

      /** ********************************************************************* */
      /**                             VARIABLES                                 */
      /** ********************************************************************* */

      protected static $file  = "sites.configuration.json";

      private $collection;

      /** ********************************************************************* */
      /**                               CORE                                    */
      /** ********************************************************************* */

      public function constructor()
      {
        parent::constructor();
        $this->collection = new Collection();
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