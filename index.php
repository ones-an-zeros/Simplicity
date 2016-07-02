<?php



  /** Force strict types */
  declare( strict_types = 1 );


  namespace SMM
  {

    /** The support singleton trait */
    include_once ("support" . DIRECTORY_SEPARATOR . "trait" . DIRECTORY_SEPARATOR . "singleton.trait.php");

    try {
      /** Include the configuration module. This will do 90% of the configuration work */
      include_once ("module" . DIRECTORY_SEPARATOR . "exception" . DIRECTORY_SEPARATOR . "exception.module.php");
    } catch ( \Throwable $exception ){
      echo '<h1>Exception Module failed to load!</h1>';
      echo '<pre>'.print_r($exception,true).'</pre>';
    }

    try {
      /** Include the configuration module. This will do 90% of the configuration work */
      include_once( "module".DIRECTORY_SEPARATOR."configuration".DIRECTORY_SEPARATOR."configuration.module.php" );
    } catch ( \Throwable $exception){
      echo '<h1>Configuration Module failed to load!</h1>';
      echo '<pre>'.print_r($exception,true).'</pre>';
    }



    echo '<pre>'.print_r(get_declared_classes(),true).'</pre>';
  }



