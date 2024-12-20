<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case Houston = "houston";
case Red = "red";
case SlackOchin = "slack-ochin";
case Synthwave84 = "synthwave-84";
case GithubDark = "github-dark";
case GithubDarkDimmed = "github-dark-dimmed";
case EverforestLight = "everforest-light";
case MinDark = "min-dark";
case Laserwave = "laserwave";
case MinLight = "min-light";
case MaterialTheme = "material-theme";
case GithubLightHighContrast = "github-light-high-contrast";
case AuroraX = "aurora-x";
case MaterialThemePalenight = "material-theme-palenight";
case OneDarkPro = "one-dark-pro";
case MaterialThemeDarker = "material-theme-darker";
case DraculaSoft = "dracula-soft";
case RosePineMoon = "rose-pine-moon";
case Vesper = "vesper";
case KanagawaDragon = "kanagawa-dragon";
case OneLight = "one-light";
case Poimandres = "poimandres";
case VitesseDark = "vitesse-dark";
case SlackDark = "slack-dark";
case SnazzyLight = "snazzy-light";
case VitesseBlack = "vitesse-black";
case AyuDark = "ayu-dark";
case CatppuccinFrappe = "catppuccin-frappe";
case GithubDarkHighContrast = "github-dark-high-contrast";
case SolarizedDark = "solarized-dark";
case CatppuccinLatte = "catppuccin-latte";
case MaterialThemeOcean = "material-theme-ocean";
case Andromeeda = "andromeeda";
case EverforestDark = "everforest-dark";
case MaterialThemeLighter = "material-theme-lighter";
case Plastic = "plastic";
case SolarizedLight = "solarized-light";
case Monokai = "monokai";
case Dracula = "dracula";
case GithubDarkDefault = "github-dark-default";
case Nord = "nord";
case RosePineDawn = "rose-pine-dawn";
case VitesseLight = "vitesse-light";
case RosePine = "rose-pine";
case DarkPlus = "dark-plus";
case TokyoNight = "tokyo-night";
case CatppuccinMacchiato = "catppuccin-macchiato";
case GithubLight = "github-light";
case CatppuccinMocha = "catppuccin-mocha";
case GithubLightDefault = "github-light-default";
case KanagawaLotus = "kanagawa-lotus";
case NightOwl = "night-owl";
case KanagawaWave = "kanagawa-wave";
case LightPlus = "light-plus";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}