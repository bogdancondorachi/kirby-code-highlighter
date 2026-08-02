<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case VitesseLight = "vitesse-light";
case MaterialThemeDarker = "material-theme-darker";
case OneDarkPro = "one-dark-pro";
case AyuMirage = "ayu-mirage";
case MaterialThemeLighter = "material-theme-lighter";
case GruvboxLightHard = "gruvbox-light-hard";
case GruvboxLightSoft = "gruvbox-light-soft";
case GithubDarkDimmed = "github-dark-dimmed";
case TokyoNight = "tokyo-night";
case GruvboxDarkHard = "gruvbox-dark-hard";
case CatppuccinLatte = "catppuccin-latte";
case AyuLight = "ayu-light";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case Laserwave = "laserwave";
case MinDark = "min-dark";
case SlackOchin = "slack-ochin";
case Horizon = "horizon";
case EverforestDark = "everforest-dark";
case GithubLight = "github-light";
case SlackDark = "slack-dark";
case RosePineDawn = "rose-pine-dawn";
case EverforestLight = "everforest-light";
case NightOwl = "night-owl";
case HorizonBright = "horizon-bright";
case AyuDark = "ayu-dark";
case AuroraX = "aurora-x";
case VitesseBlack = "vitesse-black";
case KanagawaDragon = "kanagawa-dragon";
case VitesseDark = "vitesse-dark";
case GruvboxLightMedium = "gruvbox-light-medium";
case GithubDarkDefault = "github-dark-default";
case Houston = "houston";
case Andromeeda = "andromeeda";
case MaterialThemePalenight = "material-theme-palenight";
case DarkPlus = "dark-plus";
case CatppuccinMocha = "catppuccin-mocha";
case Nord = "nord";
case Synthwave84 = "synthwave-84";
case Red = "red";
case GithubDarkHighContrast = "github-dark-high-contrast";
case MaterialTheme = "material-theme";
case KanagawaLotus = "kanagawa-lotus";
case Monokai = "monokai";
case Vesper = "vesper";
case KanagawaWave = "kanagawa-wave";
case SnazzyLight = "snazzy-light";
case SolarizedDark = "solarized-dark";
case RosePineMoon = "rose-pine-moon";
case CatppuccinFrappe = "catppuccin-frappe";
case SolarizedLight = "solarized-light";
case NightOwlLight = "night-owl-light";
case Plastic = "plastic";
case GithubLightHighContrast = "github-light-high-contrast";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case Poimandres = "poimandres";
case MaterialThemeOcean = "material-theme-ocean";
case CatppuccinMacchiato = "catppuccin-macchiato";
case MinLight = "min-light";
case Dracula = "dracula";
case GithubLightDefault = "github-light-default";
case OneLight = "one-light";
case LightPlus = "light-plus";
case GithubDark = "github-dark";
case RosePine = "rose-pine";
case DraculaSoft = "dracula-soft";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}