<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case OneDarkPro = "one-dark-pro";
case Poimandres = "poimandres";
case GruvboxDarkHard = "gruvbox-dark-hard";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case RosePineMoon = "rose-pine-moon";
case DraculaSoft = "dracula-soft";
case Synthwave84 = "synthwave-84";
case VitesseBlack = "vitesse-black";
case MaterialThemeLighter = "material-theme-lighter";
case Plastic = "plastic";
case Nord = "nord";
case AyuDark = "ayu-dark";
case KanagawaWave = "kanagawa-wave";
case TokyoNight = "tokyo-night";
case CatppuccinMocha = "catppuccin-mocha";
case SlackOchin = "slack-ochin";
case MaterialThemeOcean = "material-theme-ocean";
case GruvboxLightHard = "gruvbox-light-hard";
case GithubDark = "github-dark";
case RosePineDawn = "rose-pine-dawn";
case MaterialThemePalenight = "material-theme-palenight";
case SolarizedLight = "solarized-light";
case GruvboxLightMedium = "gruvbox-light-medium";
case GithubLight = "github-light";
case GithubLightHighContrast = "github-light-high-contrast";
case GithubDarkDimmed = "github-dark-dimmed";
case Andromeeda = "andromeeda";
case OneLight = "one-light";
case NightOwl = "night-owl";
case AuroraX = "aurora-x";
case MaterialThemeDarker = "material-theme-darker";
case CatppuccinMacchiato = "catppuccin-macchiato";
case DarkPlus = "dark-plus";
case VitesseDark = "vitesse-dark";
case SolarizedDark = "solarized-dark";
case SnazzyLight = "snazzy-light";
case CatppuccinLatte = "catppuccin-latte";
case MaterialTheme = "material-theme";
case CatppuccinFrappe = "catppuccin-frappe";
case EverforestDark = "everforest-dark";
case Laserwave = "laserwave";
case Vesper = "vesper";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case Houston = "houston";
case RosePine = "rose-pine";
case MinLight = "min-light";
case KanagawaLotus = "kanagawa-lotus";
case VitesseLight = "vitesse-light";
case Red = "red";
case MinDark = "min-dark";
case GithubDarkDefault = "github-dark-default";
case LightPlus = "light-plus";
case SlackDark = "slack-dark";
case KanagawaDragon = "kanagawa-dragon";
case Dracula = "dracula";
case EverforestLight = "everforest-light";
case GithubDarkHighContrast = "github-dark-high-contrast";
case Monokai = "monokai";
case GruvboxLightSoft = "gruvbox-light-soft";
case GithubLightDefault = "github-light-default";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}