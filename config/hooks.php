<?php

use Kirby\Cms\Block;
use Kirby\Toolkit\Dom;

return [
  'kirbytext:after' => function (string|null $text) {
    // Create a new DOM object from the input text
    $dom = new Dom($text);

    // Get all <pre> elements from the DOM
    $preNodes = $dom->document()->getElementsByTagName('pre');

    // If no <pre> elements are found, return the original text
    if ($preNodes->length === 0) {
      return $text;
    }

    // Iterate over each <pre> element
    foreach ($preNodes as $preNode) {

      // Skip <pre> elements that either are already highlighted or have more than one child node
      if (($preNode->childNodes->length !== 1) || $preNode->hasAttribute('data-language')) {
        continue;
      }

      // Get the <code> node inside the <pre> element
      $codeNode = $preNode->firstChild;

      // Get the raw code content from the <code> node
      $code = $codeNode->nodeValue;

      // Extract the language from the class attribute of the <code> node (e.g., 'language-php' -> 'php')
      $lang = $codeNode->getAttribute('class');
      $lang = str_starts_with($lang, 'language-') ? substr($lang, 9) : 'text';

      // Create a new Block object with the code content and language
      $block = new Block([
        'type' => 'code',
        'content' => [
          'code' => $code,
          'language' => $lang,
        ]
      ]);

      // Render the block using the 'blocks/code' snippet
      $codeBlock = snippet('blocks/code', ['block' => $block], true);

      // Create a new DocumentFragment to hold the rendered code block
      $newNode = $dom->document()->createDocumentFragment();
      $newNode->appendXML($codeBlock);

      // Replace the original <pre> node with the new code block in the DOM
      $preNode->parentNode->replaceChild($newNode, $preNode);
    }

    // Convert the modified DOM back to a string and return it
    $text = $dom->toString();
    return $text;
  }
];
