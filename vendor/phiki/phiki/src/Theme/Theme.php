<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case MaterialTheme = "material-theme";
case Poimandres = "poimandres";
case CatppuccinFrappe = "catppuccin-frappe";
case VitesseLight = "vitesse-light";
case GithubDark = "github-dark";
case VitesseDark = "vitesse-dark";
case CatppuccinLatte = "catppuccin-latte";
case AuroraX = "aurora-x";
case Plastic = "plastic";
case RosePineMoon = "rose-pine-moon";
case KanagawaWave = "kanagawa-wave";
case Andromeeda = "andromeeda";
case CatppuccinMacchiato = "catppuccin-macchiato";
case Monokai = "monokai";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case GithubDarkDefault = "github-dark-default";
case DarkPlus = "dark-plus";
case MaterialThemeDarker = "material-theme-darker";
case RosePine = "rose-pine";
case SlackOchin = "slack-ochin";
case Red = "red";
case Nord = "nord";
case Vesper = "vesper";
case MaterialThemeOcean = "material-theme-ocean";
case Synthwave84 = "synthwave-84";
case Laserwave = "laserwave";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case GruvboxLightSoft = "gruvbox-light-soft";
case OneDarkPro = "one-dark-pro";
case GithubDarkDimmed = "github-dark-dimmed";
case SlackDark = "slack-dark";
case SolarizedLight = "solarized-light";
case KanagawaLotus = "kanagawa-lotus";
case GruvboxDarkHard = "gruvbox-dark-hard";
case VitesseBlack = "vitesse-black";
case MinDark = "min-dark";
case GruvboxLightMedium = "gruvbox-light-medium";
case LightPlus = "light-plus";
case GruvboxLightHard = "gruvbox-light-hard";
case Dracula = "dracula";
case OneLight = "one-light";
case KanagawaDragon = "kanagawa-dragon";
case GithubLightDefault = "github-light-default";
case MaterialThemePalenight = "material-theme-palenight";
case SnazzyLight = "snazzy-light";
case TokyoNight = "tokyo-night";
case NightOwl = "night-owl";
case RosePineDawn = "rose-pine-dawn";
case AyuDark = "ayu-dark";
case EverforestLight = "everforest-light";
case DraculaSoft = "dracula-soft";
case MinLight = "min-light";
case CatppuccinMocha = "catppuccin-mocha";
case EverforestDark = "everforest-dark";
case GithubLight = "github-light";
case SolarizedDark = "solarized-dark";
case GithubDarkHighContrast = "github-dark-high-contrast";
case GithubLightHighContrast = "github-light-high-contrast";
case Houston = "houston";
case MaterialThemeLighter = "material-theme-lighter";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}