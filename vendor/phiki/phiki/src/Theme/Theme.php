<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case CatppuccinMacchiato = "catppuccin-macchiato";
case EverforestDark = "everforest-dark";
case DraculaSoft = "dracula-soft";
case OneDarkPro = "one-dark-pro";
case NightOwl = "night-owl";
case Monokai = "monokai";
case RosePine = "rose-pine";
case KanagawaDragon = "kanagawa-dragon";
case Laserwave = "laserwave";
case CatppuccinFrappe = "catppuccin-frappe";
case MaterialThemeDarker = "material-theme-darker";
case GruvboxLightMedium = "gruvbox-light-medium";
case MinDark = "min-dark";
case SnazzyLight = "snazzy-light";
case Plastic = "plastic";
case AyuDark = "ayu-dark";
case Houston = "houston";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case LightPlus = "light-plus";
case TokyoNight = "tokyo-night";
case RosePineDawn = "rose-pine-dawn";
case GithubDarkDimmed = "github-dark-dimmed";
case CatppuccinLatte = "catppuccin-latte";
case SlackDark = "slack-dark";
case GithubDark = "github-dark";
case GithubDarkDefault = "github-dark-default";
case VitesseDark = "vitesse-dark";
case SolarizedLight = "solarized-light";
case VitesseLight = "vitesse-light";
case GithubDarkHighContrast = "github-dark-high-contrast";
case SolarizedDark = "solarized-dark";
case RosePineMoon = "rose-pine-moon";
case Red = "red";
case GruvboxLightSoft = "gruvbox-light-soft";
case KanagawaWave = "kanagawa-wave";
case MaterialThemeLighter = "material-theme-lighter";
case GithubLightHighContrast = "github-light-high-contrast";
case GruvboxDarkHard = "gruvbox-dark-hard";
case GithubLightDefault = "github-light-default";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case VitesseBlack = "vitesse-black";
case GruvboxLightHard = "gruvbox-light-hard";
case MaterialThemeOcean = "material-theme-ocean";
case AuroraX = "aurora-x";
case DarkPlus = "dark-plus";
case Andromeeda = "andromeeda";
case EverforestLight = "everforest-light";
case GithubLight = "github-light";
case MaterialTheme = "material-theme";
case SlackOchin = "slack-ochin";
case CatppuccinMocha = "catppuccin-mocha";
case KanagawaLotus = "kanagawa-lotus";
case Nord = "nord";
case Poimandres = "poimandres";
case Synthwave84 = "synthwave-84";
case OneLight = "one-light";
case MinLight = "min-light";
case Dracula = "dracula";
case MaterialThemePalenight = "material-theme-palenight";
case Vesper = "vesper";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}