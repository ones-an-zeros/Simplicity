<?php

  namespace Simplicity\Module\Helper
  {
    /** ********************************************************************* */
    /**                              INCLUDE                                  */
    /** ********************************************************************* */

    /** Singleton Trait */
    include_once (".".DIRECTORY_SEPARATOR."library".DIRECTORY_SEPARATOR."traits".DIRECTORY_SEPARATOR."singleton.trait.php");
    /** Singleton Trait */
    include_once ("objects".DIRECTORY_SEPARATOR."collection.object.php");


    /** ********************************************************************* */
    /**                                USE                                    */
    /** ********************************************************************* */

    /** Singleton Trait */
    use Simplicity\Library\Traits\Singleton;
    
    use Simplicity\Module\Helper\Object\Collection;

    class Helper
    {
      /** ********************************************************************* */
      /**                             TRAITS                                    */
      /** ********************************************************************* */

      /** Use the singleton support trait */
      use Singleton;

      /** ********************************************************************* */
      /**                            VARIABLES                                  */
      /** ********************************************************************* */

      private $collection;

      /** ********************************************************************* */
      /**                              CORE                                     */
      /** ********************************************************************* */

      public function constructor()
      {
        $this->collection = new Collection();
      }


      public static function rootDirectory() : string
      { return self::getInstance()->collection->directory( Collection::root ); }

      private static function path( array $path ) : string
      { return implode( DIRECTORY_SEPARATOR, $path ).DIRECTORY_SEPARATOR; }

      public static function include( string $file, array $path )
      { include_once( self::rootDirectory().self::path( $path ).$file); }
    }
    /** ********************************************************************* */
    /**                            INSTANTIATE                                */
    /** ********************************************************************* */

    /** Instantiate Simplicity to start the process */
    Helper::getInstance();
  }