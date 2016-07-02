<?php
  declare( strict_types = 1 );

  namespace Simplicity
  {
    /** ********************************************************************* */
    /**                              INCLUDES                                 */
    /** ********************************************************************* */

    include_once("module".DIRECTORY_SEPARATOR."helper".DIRECTORY_SEPARATOR."helper.module.php");
    Module\Helper\Helper::include("exception.module.php", ["module","exception"]);
    Module\Helper\Helper::include("configuration.module.php", ["module","configuration"]);

    /** ********************************************************************* */
    /**                                 USE                                   */
    /** ********************************************************************* */

    /** The support singleton trait */
    use Simplicity\Library\Traits\Singleton;
    use Simplicity\Core\Collection;



    class Simplicity
    {
      /** ********************************************************************* */
      /**                              TRAITS                                   */
      /** ********************************************************************* */

      /** Use the Singleton trait */
      use Singleton;


      private $collection;


      /** ********************************************************************* */
      /**                                 CORE                                  */
      /** ********************************************************************* */

      public function constructor()
      {
        echo "Simplicity Construct";
        $this->collection = new Collection();
      }
    }
    /** ********************************************************************* */
    /**                            INSTANTIATE                                */
    /** ********************************************************************* */

    /** Instantiate Simplicity to start the process */
    Simplicity::getInstance();
  }