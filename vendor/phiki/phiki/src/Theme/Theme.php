<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case Laserwave = "laserwave";
case SlackOchin = "slack-ochin";
case OneLight = "one-light";
case DarkPlus = "dark-plus";
case GruvboxLightSoft = "gruvbox-light-soft";
case Monokai = "monokai";
case TokyoNight = "tokyo-night";
case Andromeeda = "andromeeda";
case SolarizedDark = "solarized-dark";
case MinDark = "min-dark";
case GithubDarkDefault = "github-dark-default";
case VitesseBlack = "vitesse-black";
case Vesper = "vesper";
case GruvboxLightMedium = "gruvbox-light-medium";
case KanagawaDragon = "kanagawa-dragon";
case CatppuccinMocha = "catppuccin-mocha";
case Horizon = "horizon";
case Poimandres = "poimandres";
case MinLight = "min-light";
case EverforestDark = "everforest-dark";
case Plastic = "plastic";
case AuroraX = "aurora-x";
case VitesseDark = "vitesse-dark";
case KanagawaLotus = "kanagawa-lotus";
case RosePineDawn = "rose-pine-dawn";
case MaterialThemeDarker = "material-theme-darker";
case Red = "red";
case AyuLight = "ayu-light";
case CatppuccinMacchiato = "catppuccin-macchiato";
case GithubDarkHighContrast = "github-dark-high-contrast";
case GithubDarkDimmed = "github-dark-dimmed";
case GruvboxDarkHard = "gruvbox-dark-hard";
case CatppuccinLatte = "catppuccin-latte";
case NightOwlLight = "night-owl-light";
case GruvboxLightHard = "gruvbox-light-hard";
case NightOwl = "night-owl";
case MaterialThemeLighter = "material-theme-lighter";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case EverforestLight = "everforest-light";
case CatppuccinFrappe = "catppuccin-frappe";
case GithubDark = "github-dark";
case Synthwave84 = "synthwave-84";
case GithubLightDefault = "github-light-default";
case RosePine = "rose-pine";
case MaterialThemeOcean = "material-theme-ocean";
case Dracula = "dracula";
case VitesseLight = "vitesse-light";
case GithubLight = "github-light";
case SnazzyLight = "snazzy-light";
case HorizonBright = "horizon-bright";
case Nord = "nord";
case AyuMirage = "ayu-mirage";
case SlackDark = "slack-dark";
case Houston = "houston";
case GithubLightHighContrast = "github-light-high-contrast";
case DraculaSoft = "dracula-soft";
case OneDarkPro = "one-dark-pro";
case LightPlus = "light-plus";
case MaterialTheme = "material-theme";
case SolarizedLight = "solarized-light";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case RosePineMoon = "rose-pine-moon";
case KanagawaWave = "kanagawa-wave";
case MaterialThemePalenight = "material-theme-palenight";
case AyuDark = "ayu-dark";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}