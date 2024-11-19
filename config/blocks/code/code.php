<?php

/** @var \Kirby\Cms\Block $block */
$highlighter = new \Phiki\Phiki();

$code   = $block->code()->fromBase64();
$lang   = $block->language()->or('text');
$theme  = $block->theme()->or(option('bogdancondorachi.code-highlighter.theme'));
$gutter = option('bogdancondorachi.code-highlighter.gutter');

$highlightedCode = $highlighter->codeToHtml($code, $lang, $theme, $gutter);

?>

<?= $highlightedCode ?>
