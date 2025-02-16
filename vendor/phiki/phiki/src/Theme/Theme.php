<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case RosePine = "rose-pine";
case AuroraX = "aurora-x";
case MinDark = "min-dark";
case VitesseDark = "vitesse-dark";
case NightOwl = "night-owl";
case MaterialThemeOcean = "material-theme-ocean";
case SlackDark = "slack-dark";
case Monokai = "monokai";
case EverforestDark = "everforest-dark";
case Plastic = "plastic";
case SolarizedDark = "solarized-dark";
case GithubDarkDefault = "github-dark-default";
case SnazzyLight = "snazzy-light";
case MaterialThemeDarker = "material-theme-darker";
case MaterialThemeLighter = "material-theme-lighter";
case GithubDarkDimmed = "github-dark-dimmed";
case VitesseBlack = "vitesse-black";
case VitesseLight = "vitesse-light";
case SlackOchin = "slack-ochin";
case DarkPlus = "dark-plus";
case EverforestLight = "everforest-light";
case MinLight = "min-light";
case RosePineMoon = "rose-pine-moon";
case Poimandres = "poimandres";
case AyuDark = "ayu-dark";
case CatppuccinFrappe = "catppuccin-frappe";
case GithubLightDefault = "github-light-default";
case CatppuccinMacchiato = "catppuccin-macchiato";
case KanagawaLotus = "kanagawa-lotus";
case Dracula = "dracula";
case GithubDarkHighContrast = "github-dark-high-contrast";
case LightPlus = "light-plus";
case Nord = "nord";
case RosePineDawn = "rose-pine-dawn";
case MaterialTheme = "material-theme";
case OneDarkPro = "one-dark-pro";
case OneLight = "one-light";
case Synthwave84 = "synthwave-84";
case MaterialThemePalenight = "material-theme-palenight";
case SolarizedLight = "solarized-light";
case Laserwave = "laserwave";
case CatppuccinLatte = "catppuccin-latte";
case Red = "red";
case CatppuccinMocha = "catppuccin-mocha";
case GithubLight = "github-light";
case KanagawaDragon = "kanagawa-dragon";
case TokyoNight = "tokyo-night";
case KanagawaWave = "kanagawa-wave";
case GithubLightHighContrast = "github-light-high-contrast";
case Houston = "houston";
case GithubDark = "github-dark";
case Vesper = "vesper";
case Andromeeda = "andromeeda";
case DraculaSoft = "dracula-soft";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}