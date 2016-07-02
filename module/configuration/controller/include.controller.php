<?php

  namespace SMM\Configuration\Controller
  {
    /** ********************************************************************* */
    /**                            OBJECT IMPORT                              */
    /** ********************************************************************* */

    /** The support singleton trait */
    use SMM\Support\FrameworkTrait\Singleton;
    /** The controller abstract */
    use SMM\Configuration\ObjectAbstract\Controller;

    class IncludeController extends Controller
    {
      /** ********************************************************************* */
      /**                              TRAITS                                   */
      /** ********************************************************************* */

      /** Use the singleton support trait */
      use Singleton;

      /** ********************************************************************* */
      /**                               VARIABLES                               */
      /** ********************************************************************* */

      protected static $file  = "include.configuration.json";

      /** ********************************************************************* */
      /**                                 CORE                                  */
      /** ********************************************************************* */

      public function constructor()
      {
        /** Pass our self into the parent construct so it can do the initial heavy lifting */
        parent::constructor();
        /** Include the files */
        $this->include( $this->data( self::$file ) );
      }


      private function include( $data, $path = [] )
      {
        if( count($data) ){
          foreach ($data as $name => $parts){
            $loopPath = $path;
            array_push($loopPath, $name);
            $this->include( $data->{$name}->directory, $loopPath );
            $this->file( $data->{$name}->file, $loopPath );
          }
        }
      }

      private function file( $data, $path )
      {

        if( count( $data ) ){
          foreach( $data as $file ){
            $this->doInclude( $file, $path );
          }
        }
      }

      private function doInclude( $file, $path )
      {
        //echo $this->directory(self::root). implode(DIRECTORY_SEPARATOR, $path). DIRECTORY_SEPARATOR. $file.'<br />';
        include_once( $this->directory(self::root). implode( DIRECTORY_SEPARATOR, $path ). DIRECTORY_SEPARATOR. $file );
      }
    }
  }