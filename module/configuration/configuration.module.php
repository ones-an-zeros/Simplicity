<?php

  namespace SMM\Configuration
  {
    /** ********************************************************************* */
    /**                              INCLUDES                                 */
    /** ********************************************************************* */

    /** The controller abstract */
    include_once("abstract".DIRECTORY_SEPARATOR."controller.abstract.php");
    /** The include controller */
    include_once("controller".DIRECTORY_SEPARATOR."constant.controller.php");

    include_once("object".DIRECTORY_SEPARATOR."constant".DIRECTORY_SEPARATOR."collection.object.php");

    /** The include controller */
    include_once("controller".DIRECTORY_SEPARATOR."include.controller.php");

    /** ********************************************************************* */
    /**                            OBJECT IMPORT                              */
    /** ********************************************************************* */

    /** The support singleton trait */
    use SMM\Support\FrameworkTrait\Singleton;
    /** The include controller */
    use SMM\Configuration\Controller\ConstantController;
    /** The include controller */
    use SMM\Configuration\Controller\IncludeController;


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
        $this->data[self::constant] = ConstantController::getInstance();
        /** Initialize the include controller */
        $this->data[self::include]  = IncludeController::getInstance();


      }
    }
    /** ********************************************************************* */
    /**                            INSTANTIATE                                */
    /** ********************************************************************* */

    /** Make an instance of the configuration object so it is ready */
    Configuration::getInstance();
  }