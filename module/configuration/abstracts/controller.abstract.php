<?php

  namespace Simplicity\Configuration\Abstracts
  {

    abstract class Controller
    {

      const root = 0;

      const data = 1;

      protected $data = [
        self::root => null,
        self::data => null
      ];

      public function constructor()
      {
        /** Set the root directory */
        $this->setRootDirectory();
        /** Set the data directory */
        $this->setDataDirectory();
      }

      protected function data( string $file ) : \stdClass
      { return json_decode( file_get_contents( $this->directory( self::data ).$file ) ); }

      /** *********************************************************************************************************** */
      /**                                               DIRECTORY                                                     */
      /** *********************************************************************************************************** */

      protected function directory( int $selector ) : string
      { return $this->data[$selector]; }

      private function setRootDirectory()
      { $this->data[self::root] = substr( __DIR__, 0, -30); }

      private function setDataDirectory()
      { $this->data[self::data] = $this->directory( self::root )."configuration".DIRECTORY_SEPARATOR; }
    }
  }

