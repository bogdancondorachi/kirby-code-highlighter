<?php

namespace Phiki\Theme;

abstract class DefaultThemes
{
    final const NAMES_TO_PATHS = ["houston" => __DIR__ . "/../../resources/themes/houston.json",
"red" => __DIR__ . "/../../resources/themes/red.json",
"slack-ochin" => __DIR__ . "/../../resources/themes/slack-ochin.json",
"synthwave-84" => __DIR__ . "/../../resources/themes/synthwave-84.json",
"github-dark" => __DIR__ . "/../../resources/themes/github-dark.json",
"github-dark-dimmed" => __DIR__ . "/../../resources/themes/github-dark-dimmed.json",
"everforest-light" => __DIR__ . "/../../resources/themes/everforest-light.json",
"min-dark" => __DIR__ . "/../../resources/themes/min-dark.json",
"laserwave" => __DIR__ . "/../../resources/themes/laserwave.json",
"min-light" => __DIR__ . "/../../resources/themes/min-light.json",
"material-theme" => __DIR__ . "/../../resources/themes/material-theme.json",
"github-light-high-contrast" => __DIR__ . "/../../resources/themes/github-light-high-contrast.json",
"aurora-x" => __DIR__ . "/../../resources/themes/aurora-x.json",
"material-theme-palenight" => __DIR__ . "/../../resources/themes/material-theme-palenight.json",
"one-dark-pro" => __DIR__ . "/../../resources/themes/one-dark-pro.json",
"material-theme-darker" => __DIR__ . "/../../resources/themes/material-theme-darker.json",
"dracula-soft" => __DIR__ . "/../../resources/themes/dracula-soft.json",
"rose-pine-moon" => __DIR__ . "/../../resources/themes/rose-pine-moon.json",
"vesper" => __DIR__ . "/../../resources/themes/vesper.json",
"kanagawa-dragon" => __DIR__ . "/../../resources/themes/kanagawa-dragon.json",
"one-light" => __DIR__ . "/../../resources/themes/one-light.json",
"poimandres" => __DIR__ . "/../../resources/themes/poimandres.json",
"vitesse-dark" => __DIR__ . "/../../resources/themes/vitesse-dark.json",
"slack-dark" => __DIR__ . "/../../resources/themes/slack-dark.json",
"snazzy-light" => __DIR__ . "/../../resources/themes/snazzy-light.json",
"vitesse-black" => __DIR__ . "/../../resources/themes/vitesse-black.json",
"ayu-dark" => __DIR__ . "/../../resources/themes/ayu-dark.json",
"catppuccin-frappe" => __DIR__ . "/../../resources/themes/catppuccin-frappe.json",
"github-dark-high-contrast" => __DIR__ . "/../../resources/themes/github-dark-high-contrast.json",
"solarized-dark" => __DIR__ . "/../../resources/themes/solarized-dark.json",
"catppuccin-latte" => __DIR__ . "/../../resources/themes/catppuccin-latte.json",
"material-theme-ocean" => __DIR__ . "/../../resources/themes/material-theme-ocean.json",
"andromeeda" => __DIR__ . "/../../resources/themes/andromeeda.json",
"everforest-dark" => __DIR__ . "/../../resources/themes/everforest-dark.json",
"material-theme-lighter" => __DIR__ . "/../../resources/themes/material-theme-lighter.json",
"plastic" => __DIR__ . "/../../resources/themes/plastic.json",
"solarized-light" => __DIR__ . "/../../resources/themes/solarized-light.json",
"monokai" => __DIR__ . "/../../resources/themes/monokai.json",
"dracula" => __DIR__ . "/../../resources/themes/dracula.json",
"github-dark-default" => __DIR__ . "/../../resources/themes/github-dark-default.json",
"nord" => __DIR__ . "/../../resources/themes/nord.json",
"rose-pine-dawn" => __DIR__ . "/../../resources/themes/rose-pine-dawn.json",
"vitesse-light" => __DIR__ . "/../../resources/themes/vitesse-light.json",
"rose-pine" => __DIR__ . "/../../resources/themes/rose-pine.json",
"dark-plus" => __DIR__ . "/../../resources/themes/dark-plus.json",
"tokyo-night" => __DIR__ . "/../../resources/themes/tokyo-night.json",
"catppuccin-macchiato" => __DIR__ . "/../../resources/themes/catppuccin-macchiato.json",
"github-light" => __DIR__ . "/../../resources/themes/github-light.json",
"catppuccin-mocha" => __DIR__ . "/../../resources/themes/catppuccin-mocha.json",
"github-light-default" => __DIR__ . "/../../resources/themes/github-light-default.json",
"kanagawa-lotus" => __DIR__ . "/../../resources/themes/kanagawa-lotus.json",
"night-owl" => __DIR__ . "/../../resources/themes/night-owl.json",
"kanagawa-wave" => __DIR__ . "/../../resources/themes/kanagawa-wave.json",
"light-plus" => __DIR__ . "/../../resources/themes/light-plus.json"];
}