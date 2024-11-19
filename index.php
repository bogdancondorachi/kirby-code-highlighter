<?php

@include_once __DIR__ . '/vendor/autoload.php';

use Phiki\Theme\Theme;
use Kirby\Toolkit\Str;

Kirby::plugin('bogdancondorachi/code-highlighter', [
  'options' => [
    'theme' => 'github-dark',
    'gutter' => false,
    'block' => [
      'languages' => [
        'bash' => 'Bash',
        'blade' => 'Blade',
        'c' => 'C',
        'coffee' => 'CoffeeScript',
        'cpp' => 'C++',
        'css' => 'CSS',
        'glsl' => 'GLSL',
        'graphql' => 'GraphQL',
        'handlebars' => 'Handlebars',
        'html' => 'HTML',
        'http' => 'HTTP',
        'java' => 'Java',
        'js' => 'JavaScript',
        'json' => 'JSON',
        'jsx' => 'JSX',
        'less' => 'Less',
        'markdown' => 'Markdown',
        'php' => 'PHP',
        'text' => 'Plain Text',
        'python' => 'Python',
        'regexp' => 'RegExp',
        'sass' => 'Sass',
        'scss' => 'SCSS',
        'shell' => 'Shell',
        'sql' => 'SQL',
        'stylus' => 'Stylus',
        'svelte' => 'Svelte',
        'tsx' => 'TSX',
        'typescript' => 'TypeScript',
        'vue' => 'Vue',
        'xml' => 'XML',
        'yaml' => 'YAML'
      ],
      'themes' => array_combine(
        array_map(fn(Theme $theme) => $theme->value, Theme::cases()),
        array_map(fn(Theme $theme) => Str::ucwords(Str::replace($theme->value, '-', ' ')), Theme::cases())
      )
    ]
  ],

  'tags' => require __DIR__ . '/config/tags.php',
  'hooks' => require __DIR__ . '/config/hooks.php',
  'fieldMethods' => require __DIR__ . '/config/methods.php',

  'blueprints' => [
    'blocks/code' => __DIR__ . '/config/blocks/code/code.yml'
  ],
  
  'snippets' => [
    'blocks/code' => __DIR__ . '/config/blocks/code/code.php'
  ]
]);
