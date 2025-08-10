<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case MaterialThemeLighter = "material-theme-lighter";
case SolarizedDark = "solarized-dark";
case Plastic = "plastic";
case RosePine = "rose-pine";
case RosePineMoon = "rose-pine-moon";
case CatppuccinMocha = "catppuccin-mocha";
case KanagawaWave = "kanagawa-wave";
case VitesseBlack = "vitesse-black";
case SolarizedLight = "solarized-light";
case OneDarkPro = "one-dark-pro";
case Andromeeda = "andromeeda";
case GithubLight = "github-light";
case Dracula = "dracula";
case MaterialThemePalenight = "material-theme-palenight";
case SlackOchin = "slack-ochin";
case CatppuccinLatte = "catppuccin-latte";
case Monokai = "monokai";
case MaterialThemeDarker = "material-theme-darker";
case Nord = "nord";
case GithubDarkDimmed = "github-dark-dimmed";
case GruvboxLightSoft = "gruvbox-light-soft";
case GruvboxDarkHard = "gruvbox-dark-hard";
case SlackDark = "slack-dark";
case SnazzyLight = "snazzy-light";
case DraculaSoft = "dracula-soft";
case KanagawaLotus = "kanagawa-lotus";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case GithubLightDefault = "github-light-default";
case VitesseLight = "vitesse-light";
case VitesseDark = "vitesse-dark";
case GithubLightHighContrast = "github-light-high-contrast";
case EverforestDark = "everforest-dark";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case Vesper = "vesper";
case Poimandres = "poimandres";
case AuroraX = "aurora-x";
case GruvboxLightHard = "gruvbox-light-hard";
case MaterialThemeOcean = "material-theme-ocean";
case Houston = "houston";
case CatppuccinFrappe = "catppuccin-frappe";
case EverforestLight = "everforest-light";
case MinDark = "min-dark";
case OneLight = "one-light";
case GruvboxLightMedium = "gruvbox-light-medium";
case NightOwl = "night-owl";
case DarkPlus = "dark-plus";
case LightPlus = "light-plus";
case RosePineDawn = "rose-pine-dawn";
case AyuDark = "ayu-dark";
case CatppuccinMacchiato = "catppuccin-macchiato";
case Red = "red";
case TokyoNight = "tokyo-night";
case Synthwave84 = "synthwave-84";
case KanagawaDragon = "kanagawa-dragon";
case MinLight = "min-light";
case GithubDark = "github-dark";
case GithubDarkDefault = "github-dark-default";
case GithubDarkHighContrast = "github-dark-high-contrast";
case MaterialTheme = "material-theme";
case Laserwave = "laserwave";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}