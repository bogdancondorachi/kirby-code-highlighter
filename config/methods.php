<?php

/**
 * Determines if a string is valid Base64 and optionally matches specified encodings.
 *
 * @param string $string The string to check.
 * @param array $encodings List of acceptable encodings. Defaults to ['UTF-8', 'ASCII'].
 * @return bool True if the string is valid Base64 and matches an encoding, false otherwise.
 */
if (!function_exists('isBase64')) {
  function isBase64(string $string, array $encodings = ['UTF-8', 'ASCII']): bool {
    $decoded = base64_decode($string, true);
    return $decoded !== false && in_array(mb_detect_encoding($decoded), $encodings, true);
  }
}

return [
  'fromBase64' => function ($field) {
    // Return early if the field is empty.
    if ($field->isEmpty()) {
      return $field;
    }

    $value = trim($field->value());

    // Decode and set value if is a valid Base64 string.
    if (isBase64($value)) {
      $field->value = base64_decode($value);
    }

    return $field;
  }
];
