<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case LightPlus = "light-plus";
case GruvboxLightHard = "gruvbox-light-hard";
case GithubLightDefault = "github-light-default";
case Laserwave = "laserwave";
case GruvboxDarkHard = "gruvbox-dark-hard";
case Vesper = "vesper";
case Poimandres = "poimandres";
case SlackDark = "slack-dark";
case Dracula = "dracula";
case MinLight = "min-light";
case RosePine = "rose-pine";
case DarkPlus = "dark-plus";
case EverforestDark = "everforest-dark";
case GithubDarkDimmed = "github-dark-dimmed";
case Synthwave84 = "synthwave-84";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case AyuMirage = "ayu-mirage";
case VitesseBlack = "vitesse-black";
case CatppuccinMacchiato = "catppuccin-macchiato";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case Andromeeda = "andromeeda";
case MinDark = "min-dark";
case GruvboxLightSoft = "gruvbox-light-soft";
case Monokai = "monokai";
case GithubDarkHighContrast = "github-dark-high-contrast";
case KanagawaWave = "kanagawa-wave";
case Houston = "houston";
case AyuDark = "ayu-dark";
case GruvboxLightMedium = "gruvbox-light-medium";
case KanagawaLotus = "kanagawa-lotus";
case Red = "red";
case CatppuccinMocha = "catppuccin-mocha";
case Horizon = "horizon";
case NightOwlLight = "night-owl-light";
case MaterialThemeLighter = "material-theme-lighter";
case RosePineDawn = "rose-pine-dawn";
case Plastic = "plastic";
case MaterialTheme = "material-theme";
case HorizonBright = "horizon-bright";
case CatppuccinFrappe = "catppuccin-frappe";
case GithubDarkDefault = "github-dark-default";
case GithubLight = "github-light";
case MaterialThemeOcean = "material-theme-ocean";
case GithubDark = "github-dark";
case TokyoNight = "tokyo-night";
case RosePineMoon = "rose-pine-moon";
case GithubLightHighContrast = "github-light-high-contrast";
case VitesseDark = "vitesse-dark";
case MaterialThemeDarker = "material-theme-darker";
case VitesseLight = "vitesse-light";
case SnazzyLight = "snazzy-light";
case OneDarkPro = "one-dark-pro";
case AuroraX = "aurora-x";
case MaterialThemePalenight = "material-theme-palenight";
case SlackOchin = "slack-ochin";
case Nord = "nord";
case CatppuccinLatte = "catppuccin-latte";
case NightOwl = "night-owl";
case SolarizedDark = "solarized-dark";
case KanagawaDragon = "kanagawa-dragon";
case OneLight = "one-light";
case AyuLight = "ayu-light";
case DraculaSoft = "dracula-soft";
case EverforestLight = "everforest-light";
case SolarizedLight = "solarized-light";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}