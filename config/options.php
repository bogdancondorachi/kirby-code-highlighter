<?php

use Phiki\Theme\Theme;
use Kirby\Toolkit\Str;

return [
  'language' => 'text',
  'theme' => 'github-dark-default',
  'gutter' => false,
  
  'block' => [
    'languages' => [
      'bash' => 'Bash',
      'c' => 'C',
      'cpp' => 'C++',
      'css' => 'CSS',
      'go' => 'Go',
      'gql' => 'GraphQL',
      'html' => 'HTML',
      'java' => 'Java',
      'js' => 'JavaScript',
      'json' => 'JSON',
      'md' => 'Markdown',
      'php' => 'PHP',
      'py' => 'Python',
      'ruby' => 'Ruby',
      'rust' => 'Rust',
      'scss' => 'SCSS',
      'shell' => 'Shell',
      'sql' => 'SQL',
      'text' => 'Plain Text',
      'ts' => 'TypeScript',
      'vue' => 'Vue',
      'xml' => 'XML',
      'yml' => 'YAML',
    ],
    'themes' => array_combine(
      array_map(fn(Theme $theme) => $theme->value, Theme::cases()),
      array_map(fn(Theme $theme) => Str::ucwords(Str::replace($theme->value, '-', ' ')), Theme::cases())
    )
  ]
];
