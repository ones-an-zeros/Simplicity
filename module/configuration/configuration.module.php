<?php

  namespace Simplicity\Module\Configuration
  {
    /** ********************************************************************* */
    /**                              INCLUDES                                 */
    /** ********************************************************************* */

    /** The controller abstract */
    include_once("abstracts".DIRECTORY_SEPARATOR."controller.abstract.php");
    /** The include controller */
    include_once("controller".DIRECTORY_SEPARATOR."constants.controller.php");

    include_once("object".DIRECTORY_SEPARATOR."constant".DIRECTORY_SEPARATOR."collection.object.php");

    /** The include controller */
    include_once("controller".DIRECTORY_SEPARATOR."includes.controller.php");

    /** ********************************************************************* */
    /**                            OBJECT IMPORT                              */
    /** ********************************************************************* */

    /** The support singleton trait */
    use Simplicity\Library\Traits\Singleton;
    /** The include controller */
    use Simplicity\Module\Configuration\Controller\Constants;
    /** The include controller */
    use Simplicity\Module\Configuration\Controller\Includes;


    class Configuration
    {
      /** ********************************************************************* */
      /**                              TRAITS                                   */
      /** ********************************************************************* */

      /** Use the singleton support trait */
      use Singleton;

      /** ********************************************************************* */
      /**                               CONSTANTS                               */
      /** ********************************************************************* */

      const constant  = 0;

      const include   = 1;

      /** ********************************************************************* */
      /**                               VARIABLES                               */
      /** ********************************************************************* */

      private $data = [
        self::constant  => null,
        self::include   => null
      ];

      /** ********************************************************************* */
      /**                                 CORE                                  */
      /** ********************************************************************* */

      public function constructor()
      {
        $this->data[self::constant] = Constants::getInstance();
        /** Initialize the include controller */
        $this->data[self::include]  = Includes::getInstance();


      }
    }
    /** ********************************************************************* */
    /**                            INSTANTIATE                                */
    /** ********************************************************************* */

    /** Make an instance of the configuration object so it is ready */
    Configuration::getInstance();
  }