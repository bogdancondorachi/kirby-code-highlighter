<?php

namespace Phiki\Generators;

use Phiki\Contracts\OutputGeneratorInterface;
use Phiki\Support\Arr;
use Phiki\Theme\ParsedTheme;

class HtmlGenerator implements OutputGeneratorInterface
{
    /**
     * @param  array<string, ParsedTheme>  $themes
     */
    public function __construct(
        protected ?string $grammarName,
        protected array $themes,
        protected bool $withGutter = false,
        protected bool $withWrapper = false,
    ) {}

    public function generate(array $tokens): string
    {
        return $this->withWrapper ? $this->buildWrapper($tokens) : $this->buildPre($tokens);
    }

    private function buildWrapper($tokens): string
    {
        if (count($this->themes) > 1) {
            foreach ($this->themes as $id => $theme) {
                $wrapperStyles[] = $theme->base()->toCssVarString($id);
            }
        } else {
            $wrapperStyles[] = $this->getDefaultTheme()->base()->toStyleString();
        }

        return sprintf(
            '<div class="phiki-wrapper"%s style="%s">%s</div>',
            $this->grammarName ? " data-language=\"$this->grammarName\"" : null,
            implode(' ', $wrapperStyles),
            $this->buildPre($tokens)
        );
    }

    private function buildPre($tokens): string
    {
        $preClasses = array_filter([
            'phiki',
            count($this->themes) > 1 ? 'phiki-themes' : null,
        ]);

        if (count($this->themes) > 1) {
            foreach ($this->themes as $id => $theme) {
                $preClasses[] = $theme->name;
                $preStyles[] = $theme->base()->toCssVarString($id);
            }
        } else {
            $preClasses[] = $this->getDefaultTheme()->name;
            $preStyles[] = $this->getDefaultTheme()->base()->toStyleString();
        }

        return sprintf(
            '<pre class="%s"%s style="%s">%s</pre>',
            implode(' ', $preClasses),
            $this->grammarName ? " data-language=\"$this->grammarName\"" : null,
            implode(' ', $preStyles),
            $this->buildCode($tokens)
        );
    }

    private function buildCode(array $tokens): string
    {
        foreach ($tokens as $i => $line) {
            $output[] = $this->buildLine($line, $i);
        }

        return '<code>' . implode($output) . '</code>';
    }

    private function buildLine(array $line, int $index): string
    {
        $output = [];

        if ($this->withGutter) {
            $output[] = $this->buildLineNumber($index + 1);
        }

        foreach ($line as $token) {
            $output[] = $this->buildToken($token);
        }

        return '<span class="line">' . implode($output) . '</span>';
    }

    private function buildLineNumber(int $lineNumber): string
    {
        if (count($this->themes) > 1) {
            foreach ($this->themes as $id => $theme) {
                $lineNumberColor = $theme->colors['editorLineNumber.foreground'] ?? null;
                $lineNumberStyles[] = $lineNumberColor ? "--phiki-{$id}: $lineNumberColor;" : null;
            }
        } else {
            $lineNumberColor = $this->getDefaultTheme()->colors['editorLineNumber.foreground'] ?? null;
            $lineNumberStyles[] = $lineNumberColor ? "color: $lineNumberColor;" : null;
        }

        $lineNumberStyles[] = '-webkit-user-select: none;';
        $lineNumberStyles[] = 'user-select: none;';

        return sprintf(
            '<span class="line-number" style="%s">%2d</span>',
            implode(' ', $lineNumberStyles),
            $lineNumber
        );
    }

    private function buildToken(object $token): string
    {
        $tokenStyles = [];

        if (count($this->themes) > 1) {
            foreach ($token->settings as $id => $settings) {
                $tokenStyles[] = $settings->toCssVarString($id);
            }
        } else {
            $tokenStyles[] = ($token->settings[$this->getDefaultThemeId()] ?? null)?->toStyleString();
        }

        $styleString = implode(' ', array_filter($tokenStyles));

        return sprintf(
            '<span%s>%s</span>',
            $styleString ? " style=\"$styleString\"" : null,
            htmlspecialchars($token->token->text)
        );
    }

    private function getDefaultTheme(): ParsedTheme
    {
        return Arr::first($this->themes);
    }

    private function getDefaultThemeId(): string
    {
        return Arr::firstKey($this->themes);
    }
}
