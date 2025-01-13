![Kirby Code Highlighter](.github/preview-v2.png)

![Version](https://img.shields.io/packagist/v/bogdancondorachi/kirby-code-highlighter?style=for-the-badge&label=Version&labelColor=3d444d&color=096BDE)
![Dependency](https://img.shields.io/badge/kirby-%5E4.0-F4E162?style=for-the-badge&labelColor=3d444d)
![Dependency](https://img.shields.io/packagist/dependency-v/bogdancondorachi/kirby-code-highlighter/php?style=for-the-badge&label=PHP&labelColor=3d444d&color=7C72FF)

> [!NOTE]
> A server-side syntax highlighter plugin for Kirby CMS, powered by [Phiki](https://github.com/phikiphp/phiki), that uses TextMate grammars and VS Code themes to generate syntax-highlighted code within Kirby's code block and KirbyText. Also with [Shiki](https://shiki.style) implementation for live code block preview inside the Kirby Panel!

## ✨ Key Features
- ⚡ **Performance:** Fast and powerful syntax highlighting.
- 🚀 **Integration:** Works with Kirby's code block and KirbyText.
- 👁️ **Panel Preview:** Live code preview in the Kirby Panel.
- 🌍 **Languages:** Over 200+ supported languages.
- 🎨 **Themes:** Choose from 50+ VS Code themes.
- 🔐 **Base64 Support:** Handles base64-encoded content.

## 📦 Installation

### Composer
```bash
composer require bogdancondorachi/kirby-code-highlighter
```

### Git Submodule
```bash
git submodule add https://github.com/bogdancondorachi/kirby-code-highlighter.git site/plugins/code-highlighter
```

### Manual
[Download the plugin](https://api.github.com/repos/bogdancondorachi/kirby-code-highlighter/zipball) and extract it to: `/site/plugins/code-highlighter`

## ⚙️ Usage

### Kirby Blocks Field
This plugin overwrites the Kirby's native [code block](https://getkirby.com/docs/reference/panel/blocks/code), the output will be highlighted automatically.

```yaml
blocks:
  type: blocks
  fieldsets:
    - code
```
*By default, the code block uses the [default theme](#default-theme). A theme selector is provided for applying different themes to individual blocks. You can also [customize](#customize-languages-and-themes-selection) the available languages and themes.*

### KirbyText
Embed syntax-highlighted code directly in KirbyText fields:

````
```php
echo "Hello, world!";
```
````

Or use the plugin's custom KirbyTag with support for base64-encoded content:

```
(code: ZWNobyAiSGVsbG8sIHdvcmxkISI7 lang: php theme: github-light)
```
*By default, the code tag applies the [default theme](#default-theme). However, you can use the theme attribute to specify a different theme for individual code blocks.*

## 🔧 Configuration
All options goes into your `config.php` file:

### Default Theme
Set the default theme:

```php
'bogdancondorachi.code-highlighter' => [
  'theme' => 'github-dark-default',
],
```
*Check out the [supported](#explore-supported-languages-and-themes) themes*

### Default Language
Set the default language:

```php
'bogdancondorachi.code-highlighter' => [
  'language' => 'text',
],
```
*Check out the [supported](#explore-supported-languages-and-themes) languages*

### Light/Dark Dual Themes
If you use light/dark mode on your website, you can set a default theme for each individual mode:

```php
'bogdancondorachi.code-highlighter' => [
  'themes' => [
    'light' => 'github-light',
    'dark' => 'github-dark'
  ]
],
```

In this case, you'll need to add one of the CSS snippet's to make it reactive to your site's theme:

#### Query-based Dark Mode
```css
@media (prefers-color-scheme: light) {
  .phiki,
  .phiki span {
    color: var(--phiki-light);
    background-color: var(--phiki-light-bg);
  }
}

@media (prefers-color-scheme: dark) {
  .phiki,
  .phiki span {
    color: var(--phiki-dark);
    background-color: var(--phiki-dark-bg);
  }
}
```

#### Class-based Dark Mode
```css
html.light .phiki,
html.light .phiki span {
  color: var(--phiki-light);
  background-color: var(--phiki-light-bg);
}

html.dark .phiki,
html.dark .phiki span {
  color: var(--phiki-dark);
  background-color: var(--phiki-dark-bg);
}
```

### Line Numbering
Enable line numbers in your rendered code blocks:

```php
'bogdancondorachi.code-highlighter' => [
  'gutter' => true,
],
```

### Customize Languages and Themes Selection
Customize the languages and themes options available in Kirby’s code block:

```php
'bogdancondorachi.code-highlighter' => [
  'block.languages' => [
    'css' => 'CSS',
    'php' => 'PHP',
    'yml' => 'Yaml',
  ],
  'block.themes' => [
    'github-dark' => 'GitHub Dark',
    'github-light' => 'GitHub Light',
    'vitesse-dark' => 'Vitesse Dark',
  ],
],
```

#### Explore Supported Languages and Themes
- [Supported Languages](https://shiki.matsu.io/languages)
- [Supported Themes](https://shiki.matsu.io/themes)

### Front-end Block Styling
Further customize the block style to match your site's design. Here's an example:

```css
.phiki {
  margin: 2rem 0;
  padding: 1rem;
  font-size: 0.875rem;
  line-height: 1.5rem;
  overflow: auto;
  border-radius: 0.25rem;
  box-shadow:
    0 1px 3px 0 rgba(0, 0, 0, 0.1),
    0 1px 2px 0 rgba(0, 0, 0, 0.06);
}

.phiki .line-number {
  margin-right: 1rem;
  text-align: right;
}
```

## 🙏 Credits
- [Ryan Chandler](https://github.com/ryangjchandler) for porting Shiki to PHP via [Phiki](https://github.com/phikiphp/phiki), which powers this plugin.
- [Johann Schopplich](https://github.com/johannschopplich) for his [Kirby Highlighter](https://github.com/johannschopplich/kirby-highlighter), which served as base for this project.

## 📜 License
[MIT License](./LICENSE) Copyright © 2024 [Bogdan Condorachi](https://github.com/bogdancondorachi)
