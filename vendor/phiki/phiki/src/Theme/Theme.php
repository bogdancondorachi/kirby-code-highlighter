<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case SlackDark = "slack-dark";
case MinLight = "min-light";
case Andromeeda = "andromeeda";
case RosePineDawn = "rose-pine-dawn";
case Laserwave = "laserwave";
case AyuMirage = "ayu-mirage";
case Horizon = "horizon";
case SolarizedLight = "solarized-light";
case OneDarkPro = "one-dark-pro";
case GithubDarkHighContrast = "github-dark-high-contrast";
case AyuLight = "ayu-light";
case KanagawaLotus = "kanagawa-lotus";
case DraculaSoft = "dracula-soft";
case Synthwave84 = "synthwave-84";
case SnazzyLight = "snazzy-light";
case OneLight = "one-light";
case MaterialTheme = "material-theme";
case EverforestLight = "everforest-light";
case GruvboxDarkHard = "gruvbox-dark-hard";
case CatppuccinLatte = "catppuccin-latte";
case VitesseDark = "vitesse-dark";
case VitesseLight = "vitesse-light";
case VitesseBlack = "vitesse-black";
case KanagawaWave = "kanagawa-wave";
case MaterialThemeDarker = "material-theme-darker";
case RosePine = "rose-pine";
case GithubLightDefault = "github-light-default";
case CatppuccinFrappe = "catppuccin-frappe";
case MaterialThemeOcean = "material-theme-ocean";
case GithubLight = "github-light";
case Red = "red";
case CatppuccinMocha = "catppuccin-mocha";
case GithubLightHighContrast = "github-light-high-contrast";
case MaterialThemePalenight = "material-theme-palenight";
case GithubDarkDimmed = "github-dark-dimmed";
case GruvboxLightHard = "gruvbox-light-hard";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case Monokai = "monokai";
case MaterialThemeLighter = "material-theme-lighter";
case GithubDark = "github-dark";
case Houston = "houston";
case Dracula = "dracula";
case Vesper = "vesper";
case NightOwl = "night-owl";
case GruvboxLightMedium = "gruvbox-light-medium";
case MinDark = "min-dark";
case Poimandres = "poimandres";
case TokyoNight = "tokyo-night";
case Plastic = "plastic";
case GithubDarkDefault = "github-dark-default";
case GruvboxLightSoft = "gruvbox-light-soft";
case Nord = "nord";
case AuroraX = "aurora-x";
case NightOwlLight = "night-owl-light";
case CatppuccinMacchiato = "catppuccin-macchiato";
case LightPlus = "light-plus";
case SolarizedDark = "solarized-dark";
case AyuDark = "ayu-dark";
case SlackOchin = "slack-ochin";
case KanagawaDragon = "kanagawa-dragon";
case RosePineMoon = "rose-pine-moon";
case DarkPlus = "dark-plus";
case EverforestDark = "everforest-dark";
case GruvboxDarkMedium = "gruvbox-dark-medium";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}