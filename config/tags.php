<?php

use Kirby\Cms\Block;
use Kirby\Text\KirbyTag;
use Kirby\Toolkit\Str;

return [
  'code' => [
    'attr' => [
      'lang',
      'language',
      'theme',
    ],
    'html' => function (KirbyTag $tag): string {
      $kirby  = $tag->kirby();

      $code   = $tag->value;
      $lang   = $tag->lang ?? $tag->language;
      $theme  = $tag->theme;

      $block  = new Block([
        'type' => 'code',
        'content' => [
          'code' => isBase64($code) ? base64_decode($code) : $code,
          'language' => $lang,
          'theme' => $theme,
        ]
      ]);

      return $kirby->snippet('blocks/code', ['block' => $block], true);
    }
  ]
];
