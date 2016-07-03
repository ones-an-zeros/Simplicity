<?php

  namespace Simplicity\Module\Helper\Objects
  {

    class Collection
    {

      const directory = 0;

      const root      = 0;



      private $data = [
        self::directory => [
          self::root => null
        ]
      ];

      /** ********************************************************************* */
      /**                                 CORE                                  */
      /** ********************************************************************* */

      public function __construct()
      {
        $this->setDirectoryRoot( __DIR__ );
      }

      public function __destruct()
      {

      }

      /** ********************************************************************* */
      /**                               GETTERS                                 */
      /** ********************************************************************* */

      public function get( int $type, int $selector ) : string
      { return $this->data[$type][$selector]; }

      public function directory( int $selector ) : string
      { return $this->data[self::directory][$selector]; }


      /** ********************************************************************* */
      /**                               SETTERS                                 */
      /** ********************************************************************* */

      private function setDirectoryRoot( string $root )
      {
        $parts = explode( DIRECTORY_SEPARATOR, $root );
        $this->data[self::directory][self::root] = implode(
            DIRECTORY_SEPARATOR,
            array_splice($parts, 0, (count($parts)-3))
        ).DIRECTORY_SEPARATOR;
      }
    }
  }
