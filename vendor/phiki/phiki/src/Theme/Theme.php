<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case GruvboxDarkMedium = "gruvbox-dark-medium";
case Red = "red";
case GithubLightDefault = "github-light-default";
case GithubDarkHighContrast = "github-dark-high-contrast";
case SolarizedLight = "solarized-light";
case GruvboxLightHard = "gruvbox-light-hard";
case GithubDark = "github-dark";
case GithubLightHighContrast = "github-light-high-contrast";
case SlackDark = "slack-dark";
case Andromeeda = "andromeeda";
case OneDarkPro = "one-dark-pro";
case AyuLight = "ayu-light";
case TokyoNight = "tokyo-night";
case NightOwl = "night-owl";
case Dracula = "dracula";
case Poimandres = "poimandres";
case LightPlus = "light-plus";
case Nord = "nord";
case KanagawaLotus = "kanagawa-lotus";
case MinLight = "min-light";
case MaterialThemeLighter = "material-theme-lighter";
case SlackOchin = "slack-ochin";
case MaterialThemeDarker = "material-theme-darker";
case AuroraX = "aurora-x";
case VitesseDark = "vitesse-dark";
case DarkPlus = "dark-plus";
case MaterialThemeOcean = "material-theme-ocean";
case CatppuccinMocha = "catppuccin-mocha";
case SolarizedDark = "solarized-dark";
case Vesper = "vesper";
case SnazzyLight = "snazzy-light";
case GithubLight = "github-light";
case MinDark = "min-dark";
case KanagawaWave = "kanagawa-wave";
case Monokai = "monokai";
case DraculaSoft = "dracula-soft";
case GruvboxDarkHard = "gruvbox-dark-hard";
case HorizonBright = "horizon-bright";
case AyuDark = "ayu-dark";
case OneLight = "one-light";
case Laserwave = "laserwave";
case CatppuccinMacchiato = "catppuccin-macchiato";
case GruvboxLightSoft = "gruvbox-light-soft";
case GithubDarkDimmed = "github-dark-dimmed";
case KanagawaDragon = "kanagawa-dragon";
case MaterialTheme = "material-theme";
case NightOwlLight = "night-owl-light";
case VitesseBlack = "vitesse-black";
case MaterialThemePalenight = "material-theme-palenight";
case RosePine = "rose-pine";
case Plastic = "plastic";
case Horizon = "horizon";
case CatppuccinFrappe = "catppuccin-frappe";
case VitesseLight = "vitesse-light";
case AyuMirage = "ayu-mirage";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case EverforestDark = "everforest-dark";
case EverforestLight = "everforest-light";
case RosePineDawn = "rose-pine-dawn";
case GruvboxLightMedium = "gruvbox-light-medium";
case Houston = "houston";
case GithubDarkDefault = "github-dark-default";
case CatppuccinLatte = "catppuccin-latte";
case RosePineMoon = "rose-pine-moon";
case Synthwave84 = "synthwave-84";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}