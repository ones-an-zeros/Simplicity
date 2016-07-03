<?php
  namespace Simplicity\Module\Configuration\Sites
  {

    class Collection implements \Countable, \IteratorAggregate, \ArrayAccess
    {

      /** ********************************************************************* */
      /**                             VARIABLES                                 */
      /** ********************************************************************* */

      private $data = [

      ];

      public function set( string $key, string $value ) : Collection
      {
        $this->data[$key] = $value;
        return $this;
      }

      public function get( string $key ) : mixed
      { return $this->data[$key] ?? null; }

      public function count(): int
      { return count( $this->data ); }

      public function __isset( string $key ) : bool
      { return isset( $this->data[$key] ); }

      public function __unset( string $key )
      { unset( $this->data[$key] ); }

      public function getIterator(): \ArrayIterator
      { return new \ArrayIterator($this->data); }

      public function offsetSet( $key, $value ) : Collection
      { return $this->set($key, $value); }

      public function offsetGet( $key ) : mixed
      { return $this->get($key); }

      public function offsetUnset( $key )
      { $this->__unset($key); }

      public function offsetExists($key): bool
      { return $this->__isset($key); }
    }
  }