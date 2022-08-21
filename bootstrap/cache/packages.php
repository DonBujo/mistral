<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'zizaco/entrust' => 
  array (
    'providers' => 
    array (
      0 => 'Zizaco\\Entrust\\EntrustServiceProvider',
    ),
    'aliases' => 
    array (
      'Entrust' => 'Zizaco\\Entrust\\EntrustFacade',
    ),
  ),
);