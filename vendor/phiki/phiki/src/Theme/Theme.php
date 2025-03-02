<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case MinDark = "min-dark";
case RosePineMoon = "rose-pine-moon";
case SolarizedLight = "solarized-light";
case LightPlus = "light-plus";
case KanagawaDragon = "kanagawa-dragon";
case CatppuccinLatte = "catppuccin-latte";
case VitesseDark = "vitesse-dark";
case EverforestLight = "everforest-light";
case Plastic = "plastic";
case Houston = "houston";
case Andromeeda = "andromeeda";
case Synthwave84 = "synthwave-84";
case KanagawaLotus = "kanagawa-lotus";
case CatppuccinFrappe = "catppuccin-frappe";
case OneLight = "one-light";
case EverforestDark = "everforest-dark";
case Vesper = "vesper";
case GithubLight = "github-light";
case SnazzyLight = "snazzy-light";
case CatppuccinMocha = "catppuccin-mocha";
case AuroraX = "aurora-x";
case GithubLightHighContrast = "github-light-high-contrast";
case CatppuccinMacchiato = "catppuccin-macchiato";
case RosePineDawn = "rose-pine-dawn";
case OneDarkPro = "one-dark-pro";
case VitesseBlack = "vitesse-black";
case DraculaSoft = "dracula-soft";
case MaterialThemeDarker = "material-theme-darker";
case Dracula = "dracula";
case KanagawaWave = "kanagawa-wave";
case Red = "red";
case MaterialThemeLighter = "material-theme-lighter";
case NightOwl = "night-owl";
case GithubDark = "github-dark";
case RosePine = "rose-pine";
case Laserwave = "laserwave";
case MaterialThemeOcean = "material-theme-ocean";
case Nord = "nord";
case GithubLightDefault = "github-light-default";
case SlackOchin = "slack-ochin";
case Monokai = "monokai";
case MinLight = "min-light";
case SlackDark = "slack-dark";
case SolarizedDark = "solarized-dark";
case GithubDarkDefault = "github-dark-default";
case MaterialTheme = "material-theme";
case VitesseLight = "vitesse-light";
case TokyoNight = "tokyo-night";
case Poimandres = "poimandres";
case GithubDarkHighContrast = "github-dark-high-contrast";
case AyuDark = "ayu-dark";
case GithubDarkDimmed = "github-dark-dimmed";
case DarkPlus = "dark-plus";
case MaterialThemePalenight = "material-theme-palenight";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}