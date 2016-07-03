<?php

  namespace Simplicity\Module\UrlParser
  {
    /** ********************************************************************* */
    /**                                 USE                                   */
    /** ********************************************************************* */

    /** The support singleton trait */
    use Simplicity\Library\Traits\Singleton;
    use Simplicity\Module\UrlParser\Objects\Collection;

    class UrlParser
    {
      /** ********************************************************************* */
      /**                              TRAITS                                   */
      /** ********************************************************************* */

      use Singleton;

      /** ********************************************************************* */
      /**                             VARIABLES                                 */
      /** ********************************************************************* */

      private $collection;

      /** ********************************************************************* */
      /**                                 CORE                                  */
      /** ********************************************************************* */

      public function constructor()
      {
        $this->collection = new Collection( $_SERVER['HTTP_HOST'], $_SERVER['REQUEST_SCHEME'], $_GET );

        // $_SERVER['HTTP_HOST'];
        // $_SERVER['REQUEST_SCHEME'];

        //echo '<pre>'.print_r($_SERVER,true).'</pre>';


      }
    }
    /** ********************************************************************* */
    /**                             INSTANTIATE                               */
    /** ********************************************************************* */

    /** Make an instance of the configuration object so it is ready */
    UrlParser::getInstance();
  }