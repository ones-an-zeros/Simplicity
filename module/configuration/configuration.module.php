<?php

  namespace Simplicity\Module\Configuration
  {
    /** ********************************************************************* */
    /**                              INCLUDES                                 */
    /** ********************************************************************* */


    use Simplicity\Module\Helper\Helper;
    Helper::include("controller.abstract.php",  ["module", "configuration", "abstracts"]);

    Helper::include("constants.controller.php", ["module", "configuration", "controller"]);
    Helper::include("collection.object.php",    ["module", "configuration", "objects", "constant"]);

    Helper::include("includes.controller.php",  ["module", "configuration", "controller"]);

    Helper::include("sites.controller.php",     ["module", "configuration", "controller"]);
    Helper::include("collection.object.php",    ["module", "configuration", "objects", "sites"]);

    /** ********************************************************************* */
    /**                                 USE                                   */
    /** ********************************************************************* */

    use Simplicity\Library\Traits\Singleton;
    use Simplicity\Module\Configuration\Controller\Constants;
    use Simplicity\Module\Configuration\Controller\Includes;
    use Simplicity\Module\Configuration\Controller\Sites;


    class Configuration
    {
      /** ********************************************************************* */
      /**                             TRAITS                                    */
      /** ********************************************************************* */

      /** Use the singleton support trait */
      use Singleton;

      /** ********************************************************************* */
      /**                            CONSTANTS                                  */
      /** ********************************************************************* */

      const constant  = 0;

      const include   = 1;

      const sites     = 2;

      /** ********************************************************************* */
      /**                            VARIABLES                                  */
      /** ********************************************************************* */

      private $data = [
        self::constant  => null,
        self::include   => null,
        self::sites     => null
      ];

      /** ********************************************************************* */
      /**                              CORE                                     */
      /** ********************************************************************* */

      public function constructor()
      {
        $this->data[self::constant] = Constants::getInstance();
        $this->data[self::include]  = Includes::getInstance();
        $this->data[self::sites]    = Sites::getInstance();


      }
    }
    /** ********************************************************************* */
    /**                             INSTANTIATE                               */
    /** ********************************************************************* */

    /** Make an instance of the configuration object so it is ready */
    Configuration::getInstance();
  }