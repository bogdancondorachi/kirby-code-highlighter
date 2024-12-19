<?php

@include_once __DIR__ . '/vendor/autoload.php';

use Kirby\Cms\App;

App::plugin('bogdancondorachi/code-highlighter', [

  'options' => require __DIR__ . '/config/options.php',

  'api' => require __DIR__ . '/config/api.php',

  'tags' => require __DIR__ . '/config/tags.php',
  'hooks' => require __DIR__ . '/config/hooks.php',
  'fieldMethods' => require __DIR__ . '/config/methods.php',

  'blueprints' => [
    'blocks/code' => __DIR__ . '/config/blocks/code/code.yml'
  ],
  
  'snippets' => [
    'blocks/code' => __DIR__ . '/config/blocks/code/code.php'
  ],
]);
