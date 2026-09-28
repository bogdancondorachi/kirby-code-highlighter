<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case SolarizedDark = "solarized-dark";
case MaterialThemeOcean = "material-theme-ocean";
case Plastic = "plastic";
case NightOwlLight = "night-owl-light";
case MinLight = "min-light";
case GithubDarkHighContrast = "github-dark-high-contrast";
case MaterialThemeLighter = "material-theme-lighter";
case AyuLight = "ayu-light";
case GruvboxLightSoft = "gruvbox-light-soft";
case NightOwl = "night-owl";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case MaterialThemeDarker = "material-theme-darker";
case Dracula = "dracula";
case SlackDark = "slack-dark";
case CatppuccinMocha = "catppuccin-mocha";
case OneLight = "one-light";
case AyuMirage = "ayu-mirage";
case KanagawaWave = "kanagawa-wave";
case Poimandres = "poimandres";
case Red = "red";
case VitesseDark = "vitesse-dark";
case GithubDarkDimmed = "github-dark-dimmed";
case RosePineDawn = "rose-pine-dawn";
case OneDarkPro = "one-dark-pro";
case GithubLightHighContrast = "github-light-high-contrast";
case GithubDarkDefault = "github-dark-default";
case LightPlus = "light-plus";
case DarkPlus = "dark-plus";
case Monokai = "monokai";
case VitesseBlack = "vitesse-black";
case AuroraX = "aurora-x";
case Horizon = "horizon";
case KanagawaDragon = "kanagawa-dragon";
case HorizonBright = "horizon-bright";
case SlackOchin = "slack-ochin";
case EverforestDark = "everforest-dark";
case GithubLightDefault = "github-light-default";
case CatppuccinMacchiato = "catppuccin-macchiato";
case Vesper = "vesper";
case AyuDark = "ayu-dark";
case MaterialThemePalenight = "material-theme-palenight";
case MinDark = "min-dark";
case GruvboxLightMedium = "gruvbox-light-medium";
case Andromeeda = "andromeeda";
case GruvboxDarkHard = "gruvbox-dark-hard";
case GithubLight = "github-light";
case VitesseLight = "vitesse-light";
case DraculaSoft = "dracula-soft";
case Nord = "nord";
case RosePineMoon = "rose-pine-moon";
case RosePine = "rose-pine";
case KanagawaLotus = "kanagawa-lotus";
case EverforestLight = "everforest-light";
case GruvboxLightHard = "gruvbox-light-hard";
case Synthwave84 = "synthwave-84";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case CatppuccinLatte = "catppuccin-latte";
case TokyoNight = "tokyo-night";
case Laserwave = "laserwave";
case SnazzyLight = "snazzy-light";
case SolarizedLight = "solarized-light";
case CatppuccinFrappe = "catppuccin-frappe";
case Houston = "houston";
case MaterialTheme = "material-theme";
case GithubDark = "github-dark";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}