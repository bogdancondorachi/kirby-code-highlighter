<?php

/** @var \Kirby\Cms\Block $block */
$highlighter = new \Phiki\Phiki();

$code   = $block->code()->fromBase64();
$lang   = $block->language()->or('text');
$theme  = $block->theme()->or(option('bogdancondorachi.code-highlighter.theme'));
$themes = option('bogdancondorachi.code-highlighter.themes');
$gutter = option('bogdancondorachi.code-highlighter.gutter');

if (!is_null($themes) && (!is_array($themes) || array_values($themes) === $themes)) {
  // Throw an exception if $themes is not an associative array
  throw new InvalidArgumentException('The themes option must be an associative array');
}

$highlightedCode = $highlighter->codeToHtml($code, $lang, $themes ?? $theme, $gutter);

?>

<?= $highlightedCode ?>
