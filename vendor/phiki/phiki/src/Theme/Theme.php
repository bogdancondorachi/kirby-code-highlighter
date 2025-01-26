<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case SnazzyLight = "snazzy-light";
case MaterialThemeOcean = "material-theme-ocean";
case Nord = "nord";
case GithubDarkDefault = "github-dark-default";
case KanagawaDragon = "kanagawa-dragon";
case KanagawaLotus = "kanagawa-lotus";
case VitesseLight = "vitesse-light";
case DraculaSoft = "dracula-soft";
case MaterialThemeDarker = "material-theme-darker";
case RosePineMoon = "rose-pine-moon";
case RosePine = "rose-pine";
case MaterialThemeLighter = "material-theme-lighter";
case SolarizedDark = "solarized-dark";
case AuroraX = "aurora-x";
case TokyoNight = "tokyo-night";
case VitesseBlack = "vitesse-black";
case GithubLightDefault = "github-light-default";
case Red = "red";
case VitesseDark = "vitesse-dark";
case Synthwave84 = "synthwave-84";
case Laserwave = "laserwave";
case KanagawaWave = "kanagawa-wave";
case Vesper = "vesper";
case GithubLight = "github-light";
case GithubLightHighContrast = "github-light-high-contrast";
case OneDarkPro = "one-dark-pro";
case LightPlus = "light-plus";
case Houston = "houston";
case GithubDarkHighContrast = "github-dark-high-contrast";
case SlackOchin = "slack-ochin";
case OneLight = "one-light";
case Monokai = "monokai";
case SlackDark = "slack-dark";
case SolarizedLight = "solarized-light";
case RosePineDawn = "rose-pine-dawn";
case MinLight = "min-light";
case MaterialThemePalenight = "material-theme-palenight";
case Andromeeda = "andromeeda";
case CatppuccinFrappe = "catppuccin-frappe";
case CatppuccinMacchiato = "catppuccin-macchiato";
case NightOwl = "night-owl";
case GithubDark = "github-dark";
case AyuDark = "ayu-dark";
case CatppuccinLatte = "catppuccin-latte";
case CatppuccinMocha = "catppuccin-mocha";
case MaterialTheme = "material-theme";
case GithubDarkDimmed = "github-dark-dimmed";
case Plastic = "plastic";
case EverforestLight = "everforest-light";
case MinDark = "min-dark";
case DarkPlus = "dark-plus";
case EverforestDark = "everforest-dark";
case Poimandres = "poimandres";
case Dracula = "dracula";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}