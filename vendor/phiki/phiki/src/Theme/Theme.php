<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case MinLight = "min-light";
case GithubDarkDimmed = "github-dark-dimmed";
case Horizon = "horizon";
case GruvboxLightSoft = "gruvbox-light-soft";
case MaterialThemeOcean = "material-theme-ocean";
case Synthwave84 = "synthwave-84";
case KanagawaDragon = "kanagawa-dragon";
case Nord = "nord";
case VitesseDark = "vitesse-dark";
case GithubDarkDefault = "github-dark-default";
case GithubDark = "github-dark";
case KanagawaWave = "kanagawa-wave";
case SolarizedDark = "solarized-dark";
case Red = "red";
case GruvboxDarkHard = "gruvbox-dark-hard";
case CatppuccinFrappe = "catppuccin-frappe";
case AyuDark = "ayu-dark";
case Vesper = "vesper";
case MaterialThemeDarker = "material-theme-darker";
case RosePineDawn = "rose-pine-dawn";
case MaterialTheme = "material-theme";
case GithubLightHighContrast = "github-light-high-contrast";
case MaterialThemePalenight = "material-theme-palenight";
case Laserwave = "laserwave";
case MinDark = "min-dark";
case SlackOchin = "slack-ochin";
case RosePineMoon = "rose-pine-moon";
case DraculaSoft = "dracula-soft";
case VitesseLight = "vitesse-light";
case OneLight = "one-light";
case GruvboxLightHard = "gruvbox-light-hard";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case Andromeeda = "andromeeda";
case AyuLight = "ayu-light";
case SnazzyLight = "snazzy-light";
case OneDarkPro = "one-dark-pro";
case SolarizedLight = "solarized-light";
case DarkPlus = "dark-plus";
case LightPlus = "light-plus";
case EverforestDark = "everforest-dark";
case VitesseBlack = "vitesse-black";
case Dracula = "dracula";
case GithubLightDefault = "github-light-default";
case Houston = "houston";
case NightOwlLight = "night-owl-light";
case TokyoNight = "tokyo-night";
case GithubLight = "github-light";
case AyuMirage = "ayu-mirage";
case CatppuccinMocha = "catppuccin-mocha";
case KanagawaLotus = "kanagawa-lotus";
case Monokai = "monokai";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case AuroraX = "aurora-x";
case GithubDarkHighContrast = "github-dark-high-contrast";
case MaterialThemeLighter = "material-theme-lighter";
case HorizonBright = "horizon-bright";
case GruvboxLightMedium = "gruvbox-light-medium";
case CatppuccinLatte = "catppuccin-latte";
case EverforestLight = "everforest-light";
case Poimandres = "poimandres";
case NightOwl = "night-owl";
case CatppuccinMacchiato = "catppuccin-macchiato";
case RosePine = "rose-pine";
case Plastic = "plastic";
case SlackDark = "slack-dark";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}