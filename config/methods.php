<?php

if (!function_exists('isBase64')) {
  function isBase64(string $string): bool {
    $decoded = base64_decode($string, true);
    return $decoded !== false && mb_detect_encoding($decoded, ['UTF-8', 'ASCII'], true);
  }
}

return [
  'fromBase64' => function ($field) {
    if ($field->isNotEmpty() && isBase64($value = trim($field->value()))) {
      $field->value = base64_decode($value);
    }
    return $field;
  }
];
