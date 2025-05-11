<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case GruvboxDarkSoft = "gruvbox-dark-soft";
case OneDarkPro = "one-dark-pro";
case GithubDarkHighContrast = "github-dark-high-contrast";
case GithubLightHighContrast = "github-light-high-contrast";
case SlackOchin = "slack-ochin";
case MaterialThemeDarker = "material-theme-darker";
case MaterialThemePalenight = "material-theme-palenight";
case MinDark = "min-dark";
case Synthwave84 = "synthwave-84";
case GruvboxLightMedium = "gruvbox-light-medium";
case SolarizedDark = "solarized-dark";
case RosePine = "rose-pine";
case CatppuccinLatte = "catppuccin-latte";
case DraculaSoft = "dracula-soft";
case GithubDark = "github-dark";
case Laserwave = "laserwave";
case GithubLightDefault = "github-light-default";
case SlackDark = "slack-dark";
case MaterialThemeOcean = "material-theme-ocean";
case GithubDarkDefault = "github-dark-default";
case RosePineDawn = "rose-pine-dawn";
case GruvboxLightHard = "gruvbox-light-hard";
case OneLight = "one-light";
case Poimandres = "poimandres";
case KanagawaLotus = "kanagawa-lotus";
case GithubLight = "github-light";
case CatppuccinFrappe = "catppuccin-frappe";
case Red = "red";
case DarkPlus = "dark-plus";
case GruvboxDarkHard = "gruvbox-dark-hard";
case RosePineMoon = "rose-pine-moon";
case Monokai = "monokai";
case SolarizedLight = "solarized-light";
case GithubDarkDimmed = "github-dark-dimmed";
case CatppuccinMocha = "catppuccin-mocha";
case KanagawaDragon = "kanagawa-dragon";
case Andromeeda = "andromeeda";
case LightPlus = "light-plus";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case Plastic = "plastic";
case Nord = "nord";
case SnazzyLight = "snazzy-light";
case AuroraX = "aurora-x";
case VitesseBlack = "vitesse-black";
case Dracula = "dracula";
case Houston = "houston";
case VitesseDark = "vitesse-dark";
case MaterialTheme = "material-theme";
case NightOwl = "night-owl";
case EverforestDark = "everforest-dark";
case Vesper = "vesper";
case MinLight = "min-light";
case TokyoNight = "tokyo-night";
case KanagawaWave = "kanagawa-wave";
case AyuDark = "ayu-dark";
case VitesseLight = "vitesse-light";
case GruvboxLightSoft = "gruvbox-light-soft";
case MaterialThemeLighter = "material-theme-lighter";
case EverforestLight = "everforest-light";
case CatppuccinMacchiato = "catppuccin-macchiato";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}