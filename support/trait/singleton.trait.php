<?php

  namespace SMM\Support\FrameworkTrait
  {

    trait Singleton
    {
      private static $instance;

      protected function __construct(){}

      private final function __clone(){}

      public final function __wakeup(){}

      public static function getInstance()
      {
        /** Check if an instance of this object exists */
        if( !(self::$instance instanceof self) ){
          /** No instances exists use late state binding to make one */
          self::$instance = new self;
          /** Check if this object has a sub constructor */
          if( method_exists(self::$instance, 'constructor') ){
            /** Run the constructor */
            self::$instance->constructor();
          }
        }
        /** Return the object instance */
        return self::$instance;
      }
    }
  }