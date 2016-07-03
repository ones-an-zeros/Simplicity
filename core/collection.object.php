<?php

  namespace Simplicity\Core
  {
    /** ********************************************************************* */
    /**                                   USE                                 */
    /** ********************************************************************* */

    use Simplicity\Module\Configuration\Configuration;
    use Simplicity\Module\Configuration\Controller\Constants;
    use Simplicity\Module\Helper\Helper;

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

      const configuration = 1;

      const constant      = 2;

      const sites         = 3;

      /** ********************************************************************* */
      /**                               VARIABLES                               */
      /** ********************************************************************* */

      private $data = [
        self::helper        => null,
        self::configuration => null,
        self::constant      => null,
        self::sites         => null
      ];

      /** ********************************************************************* */
      /**                                 CORE                                  */
      /** ********************************************************************* */

      public function __construct()
      {
        $this->setHelper( Helper::getInstance() );
        $this->setConfiguration( Configuration::getInstance() );
        $this->setConstant( Constants::getInstance() );
        $this->setSites( Sites::getInstance() );
      }

      /** ********************************************************************* */
      /**                               GETTERS                                 */
      /** ********************************************************************* */

      public function helper() :  Helper
      { return $this->data[self::helper]; }

      public function configuration() : Configuration
      { return $this->data[self::configuration]; }

      public function constant() : Constants
      { return $this->data[self::constant]; }

      /** ********************************************************************* */
      /**                               SETTERS                                 */
      /** ********************************************************************* */

      /**
       * @param \Simplicity\Module\Helper\Helper $helper
       */
      private function setHelper( Helper $helper )
      { $this->data[self::helper] = $helper; }

      /**
       * @param \Simplicity\Module\Configuration\Configuration $configuration
       */
      private function setConfiguration( Configuration $configuration )
      { $this->data[self::configuration] = $configuration; }

      /**
       * @param \Simplicity\Module\Configuration\Controller\Constants $constant
       */
      private function setConstant( Constants $constant )
      { $this->data[self::constant] = $constant; }
    }
  }