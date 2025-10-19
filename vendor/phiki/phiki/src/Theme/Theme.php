<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case CatppuccinMacchiato = "catppuccin-macchiato";
case MaterialThemeDarker = "material-theme-darker";
case Laserwave = "laserwave";
case GruvboxDarkHard = "gruvbox-dark-hard";
case GruvboxLightSoft = "gruvbox-light-soft";
case AuroraX = "aurora-x";
case OneLight = "one-light";
case GithubLightDefault = "github-light-default";
case Houston = "houston";
case SolarizedDark = "solarized-dark";
case CatppuccinLatte = "catppuccin-latte";
case LightPlus = "light-plus";
case MaterialTheme = "material-theme";
case CatppuccinMocha = "catppuccin-mocha";
case GithubLightHighContrast = "github-light-high-contrast";
case OneDarkPro = "one-dark-pro";
case EverforestDark = "everforest-dark";
case KanagawaDragon = "kanagawa-dragon";
case CatppuccinFrappe = "catppuccin-frappe";
case MaterialThemeOcean = "material-theme-ocean";
case AyuDark = "ayu-dark";
case DraculaSoft = "dracula-soft";
case GithubDark = "github-dark";
case Synthwave84 = "synthwave-84";
case VitesseDark = "vitesse-dark";
case MinDark = "min-dark";
case VitesseBlack = "vitesse-black";
case Andromeeda = "andromeeda";
case SlackDark = "slack-dark";
case KanagawaWave = "kanagawa-wave";
case RosePineDawn = "rose-pine-dawn";
case SolarizedLight = "solarized-light";
case Nord = "nord";
case Vesper = "vesper";
case RosePineMoon = "rose-pine-moon";
case KanagawaLotus = "kanagawa-lotus";
case EverforestLight = "everforest-light";
case SlackOchin = "slack-ochin";
case NightOwl = "night-owl";
case Monokai = "monokai";
case GruvboxLightHard = "gruvbox-light-hard";
case VitesseLight = "vitesse-light";
case MaterialThemeLighter = "material-theme-lighter";
case GithubDarkHighContrast = "github-dark-high-contrast";
case MaterialThemePalenight = "material-theme-palenight";
case Plastic = "plastic";
case GithubLight = "github-light";
case Red = "red";
case GithubDarkDefault = "github-dark-default";
case Dracula = "dracula";
case GruvboxLightMedium = "gruvbox-light-medium";
case TokyoNight = "tokyo-night";
case SnazzyLight = "snazzy-light";
case GithubDarkDimmed = "github-dark-dimmed";
case Poimandres = "poimandres";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case MinLight = "min-light";
case DarkPlus = "dark-plus";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case RosePine = "rose-pine";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}