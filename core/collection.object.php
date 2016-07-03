<?php

  namespace Simplicity\Core
  {
    /** ********************************************************************* */
    /**                                   USE                                 */
    /** ********************************************************************* */

    use Simplicity\Module\Helper\Helper;
    use Simplicity\Module\Request\Request;
    use Simplicity\Module\Configuration\Configuration;
    use Simplicity\Module\Configuration\Controller\Constants;
    use Simplicity\Module\Configuration\Controller\Includes;
    use Simplicity\Module\Configuration\Controller\Sites;

    /**
     * Class Collection
     *
     * @package Simplicity\Core
     */
    class Collection
    {
      /** ********************************************************************* */
      /**                               CONSTANTS                               */
      /** ********************************************************************* */

      const helper        = 0;

      const request       = 1;

      const configuration = 2;

      const includes      = 3;

      const constant      = 4;

      const sites         = 5;

      /** ********************************************************************* */
      /**                               VARIABLES                               */
      /** ********************************************************************* */

      private $data = [
        self::helper        => null,
        self::request       => null,
        self::configuration => null,
        self::includes      => null,
        self::constant      => null,
        self::sites         => null
      ];

      /** ********************************************************************* */
      /**                                 CORE                                  */
      /** ********************************************************************* */

      public function __construct()
      {
        $this->setHelper( Helper::getInstance() );
        $this->setRequest( Request::getInstance() );
        $this->setConfiguration( Configuration::getInstance() );
        $this->setIncludes( Includes::getInstance() );
        $this->setConstant( Constants::getInstance() );
        $this->setSites( Sites::getInstance() );
      }

      /** ********************************************************************* */
      /**                               GETTERS                                 */
      /** ********************************************************************* */

      public function helper() :  Helper
      { return $this->data[self::helper]; }

      public function request() : Request
      { return $this->data[self::request]; }

      public function configuration() : Configuration
      { return $this->data[self::configuration]; }

      public function includes() : Includes
      { return $this->data[self::includes]; }

      public function constant() : Constants
      { return $this->data[self::constant]; }

      public function sites() : Sites
      { return $this->data[self::sites]; }

      /** ********************************************************************* */
      /**                               SETTERS                                 */
      /** ********************************************************************* */

      /**
       * @param \Simplicity\Module\Helper\Helper $helper
       */
      private function setHelper( Helper $helper )
      { $this->data[self::helper] = $helper; }

      /**
       * @param \Simplicity\Module\Request\Request $request
       */
      private function setRequest( Request $request )
      { $this->data[self::request] = $request; }

      /**
       * @param \Simplicity\Module\Configuration\Configuration $configuration
       */
      private function setConfiguration( Configuration $configuration )
      { $this->data[self::configuration] = $configuration; }

      /**
       * @param \Simplicity\Module\Configuration\Controller\Includes $includes
       */
      private function setIncludes( Includes $includes )
      { $this->data[self::includes] = $includes; }

      /**
       * @param \Simplicity\Module\Configuration\Controller\Constants $constant
       */
      private function setConstant( Constants $constant )
      { $this->data[self::constant] = $constant; }

      /**
       * @param \Simplicity\Module\Configuration\Controller\Sites $sites
       */
      private function setSites( Sites $sites )
      { $this->data[self::sites] = $sites; }
    }
  }