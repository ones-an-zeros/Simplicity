<?php

  namespace Application
  {

    use Simplicity\Library\Traits\Singleton;

    class Application
    {
      
      use Singleton;

      public function constructor()
      {
        echo 'In Application';

      }

      public function run()
      {
        echo 'In application run';
      }
    }
  }

/**
 * try {
$data = new \stdClass;
$data->key        = 10;
$data->first      = "Corey";
$data->middle     = "Hunter";
$data->last       = "Rosamond";
$data->username   = "corey";
$data->domain     = "ones-n-zeros";
$data->tld        = "com";
$data->day        = 18;
$data->month      = 8;
$data->year       = 1984;
$data->photos     = "";
$data->gender     = 0;
$data->street     = "136 South Kihridge";
$data->apt        = 0;
$data->city       = "Encinitas";
$data->state      = "California";
$data->zip        = 92024;
$data->ipAddress  = "192.168.0.1";
$data->accounts   = 1;
$data->browser    = "firefox";


$person = new Module\Person\Person($data);

echo '<pre>'.print_r($person, true).'</pre>';

} catch ( \Throwable $exception){
echo '<h1>OH SHIT THE PERSON IS DEAD!</h1>';
echo '<pre>'.print_r($exception,true).'</pre>';
}
 */