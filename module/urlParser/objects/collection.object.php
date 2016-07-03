<?php

  namespace Simplicity\Module\UrlParser\Objects
  {

    class Collection
    {
      /** ********************************************************************* */
      /**                               CONSTANTS                               */
      /** ********************************************************************* */

      const protocol    = 0;

      const subDomain   = 1;

      const domain      = 2;

      const tld         = 3;

      const sld         = 4;

      const parameters  = 5;

      /** ********************************************************************* */
      /**                               VARIABLES                               */
      /** ********************************************************************* */

      private $data = [
        self::protocol    => null,
        self::subDomain   => null,
        self::domain      => null,
        self::tld         => null,
        self::sld         => null,
        self::parameters  => null
      ];

      /** ********************************************************************* */
      /**                                 CORE                                  */
      /** ********************************************************************* */

      public function __construct( string $host, string $protocol, array $parameters )
      {
        $host = $this->parseHost( $host );

        $this->setProtocol( $protocol );

        $this->setParameters( $parameters );
      }

      public function __destruct()
      {

      }

      /** ********************************************************************* */
      /**                               PARSER                                  */
      /** ********************************************************************* */

      private function parseHost( string $host )
      {
        $url = $_SERVER['REQUEST_SCHEME']."://".str_replace(".com",".co.uk", $_SERVER['HTTP_HOST']).$_SERVER['REQUEST_URI'];

        echo '<pre>'.print_r($_SERVER,true).'</pre>';
        //echo '<pre>'.print_r(parse_url($url),true).'</pre>';




        list( $protocol, $remainder ) = explode( "://", $url );
        list( $remainder, $file )     = explode( "/", $remainder );
        $partCount = substr_count( $remainder, "." );



        echo '<strong>URL: </strong>'.$url.'<br />';
        echo '<strong>Protocol: </strong>'.$protocol.'<br />';
        echo '<strong>File: </strong>'.$file.'<br />';
        echo '<strong>Number of parts: </strong>'.$partCount.'<br />';


        echo '<strong>Remainder: </strong>'.$remainder.'<br />';

        exit();


        echo '<pre>';
        print_r($_SERVER);
        var_dump(parse_url($url));
        var_dump(parse_url($url, PHP_URL_SCHEME));
        var_dump(parse_url($url, PHP_URL_USER));
        var_dump(parse_url($url, PHP_URL_PASS));
        var_dump(parse_url($url, PHP_URL_HOST));
        var_dump(parse_url($url, PHP_URL_PORT));
        var_dump(parse_url($url, PHP_URL_PATH));
        var_dump(parse_url($url, PHP_URL_QUERY));
        var_dump(parse_url($url, PHP_URL_FRAGMENT));
        echo '</pre>';


        echo parse_url($host, PHP_URL_HOST);

        echo '<pre>'.print_r(parse_url($host, PHP_URL_HOST),true).'</pre>';


        $parts = explode(".", $host);

        //echo '<pre>'.print_r($parts,true).'</pre>';



      }


      /** ********************************************************************* */
      /**                               GETTERS                                 */
      /** ********************************************************************* */

      public function protocol() : string
      {

      }

      public function subDomain() : string
      {

      }

      public function domain() : string
      {

      }

      public function tld() : string
      {

      }

      public function sld() : string
      {

      }

      public function parameters() : array
      { return $this->data[self::parameters]; }

      /** ********************************************************************* */
      /**                               SETTERS                                 */
      /** ********************************************************************* */

      private function setProtocol( string $protocol )
      { $this->data[self::protocol] = $protocol; }

      private function setSubDomain( string $subDomain )
      {

      }

      private function setDomain( string $domain )
      {

      }

      private function setTld( string $tld )
      {

      }

      private function setSld( string $sld )
      {

      }

      private function setParameters( array $parameters )
      { $this->data[self::parameters] = $parameters; }
    }
  }