<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case KanagawaDragon = "kanagawa-dragon";
case VitesseBlack = "vitesse-black";
case GithubDarkHighContrast = "github-dark-high-contrast";
case SnazzyLight = "snazzy-light";
case GithubLightDefault = "github-light-default";
case Red = "red";
case AuroraX = "aurora-x";
case MinDark = "min-dark";
case MaterialThemeOcean = "material-theme-ocean";
case VitesseLight = "vitesse-light";
case AyuLight = "ayu-light";
case Vesper = "vesper";
case Horizon = "horizon";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case TokyoNight = "tokyo-night";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case VitesseDark = "vitesse-dark";
case Laserwave = "laserwave";
case KanagawaLotus = "kanagawa-lotus";
case EverforestLight = "everforest-light";
case MaterialThemeDarker = "material-theme-darker";
case CatppuccinFrappe = "catppuccin-frappe";
case SlackOchin = "slack-ochin";
case CatppuccinMocha = "catppuccin-mocha";
case MaterialThemeLighter = "material-theme-lighter";
case Plastic = "plastic";
case KanagawaWave = "kanagawa-wave";
case SolarizedDark = "solarized-dark";
case GruvboxDarkHard = "gruvbox-dark-hard";
case CatppuccinMacchiato = "catppuccin-macchiato";
case DarkPlus = "dark-plus";
case Synthwave84 = "synthwave-84";
case SlackDark = "slack-dark";
case RosePineMoon = "rose-pine-moon";
case Monokai = "monokai";
case Poimandres = "poimandres";
case GithubLightHighContrast = "github-light-high-contrast";
case RosePineDawn = "rose-pine-dawn";
case SolarizedLight = "solarized-light";
case NightOwl = "night-owl";
case AyuMirage = "ayu-mirage";
case DraculaSoft = "dracula-soft";
case EverforestDark = "everforest-dark";
case GruvboxLightSoft = "gruvbox-light-soft";
case GithubDark = "github-dark";
case Dracula = "dracula";
case GithubDarkDefault = "github-dark-default";
case MaterialThemePalenight = "material-theme-palenight";
case CatppuccinLatte = "catppuccin-latte";
case GithubDarkDimmed = "github-dark-dimmed";
case GruvboxLightMedium = "gruvbox-light-medium";
case RosePine = "rose-pine";
case MinLight = "min-light";
case Nord = "nord";
case OneLight = "one-light";
case LightPlus = "light-plus";
case NightOwlLight = "night-owl-light";
case Houston = "houston";
case MaterialTheme = "material-theme";
case GruvboxLightHard = "gruvbox-light-hard";
case OneDarkPro = "one-dark-pro";
case Andromeeda = "andromeeda";
case GithubLight = "github-light";
case AyuDark = "ayu-dark";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}