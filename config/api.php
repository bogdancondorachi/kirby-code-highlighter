<?php

return [
  'routes' => [
    [
      'pattern' => 'code-highlighter',
      'action'  => function () {
        return [
          'lang'   => option('bogdancondorachi.code-highlighter.language'),
          'theme'  => option('bogdancondorachi.code-highlighter.theme'),
          'gutter' => option('bogdancondorachi.code-highlighter.gutter'),
        ];
      }
    ]
  ]
];
