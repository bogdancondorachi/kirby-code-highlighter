<?php

/** @var \Kirby\Cms\Block $block */

$highlighter = new \Phiki\Phiki();

// Extract block values and options
$code   = $block->code()->fromBase64();
$lang   = $block->language()->or(option('bogdancondorachi.code-highlighter.language'));
$theme  = $block->theme()->or(option('bogdancondorachi.code-highlighter.theme'));
$themes = option('bogdancondorachi.code-highlighter.themes');
$gutter = option('bogdancondorachi.code-highlighter.gutter');

// Validate themes format
if (!is_null($themes) && (!is_array($themes) || array_values($themes) === $themes)) {
  throw new InvalidArgumentException('The themes option must be an associative array');
}

// Determine the effective theme
$effectiveTheme = $themes && is_array($themes) 
  ? ($block->theme()->isNotEmpty() ? $theme : $themes) 
  : $theme;

// Generate highlighted code
$highlightedCode = $highlighter->codeToHtml($code, $lang, $effectiveTheme, $gutter);

?>

<?= $highlightedCode ?>
