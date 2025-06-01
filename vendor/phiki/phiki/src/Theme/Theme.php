<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case RosePineDawn = "rose-pine-dawn";
case MaterialTheme = "material-theme";
case AuroraX = "aurora-x";
case Synthwave84 = "synthwave-84";
case GruvboxLightSoft = "gruvbox-light-soft";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case GruvboxLightHard = "gruvbox-light-hard";
case OneDarkPro = "one-dark-pro";
case Red = "red";
case Monokai = "monokai";
case SlackOchin = "slack-ochin";
case Houston = "houston";
case MaterialThemeDarker = "material-theme-darker";
case MaterialThemePalenight = "material-theme-palenight";
case EverforestDark = "everforest-dark";
case CatppuccinLatte = "catppuccin-latte";
case GruvboxLightMedium = "gruvbox-light-medium";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case OneLight = "one-light";
case Vesper = "vesper";
case SlackDark = "slack-dark";
case RosePine = "rose-pine";
case SolarizedDark = "solarized-dark";
case DarkPlus = "dark-plus";
case DraculaSoft = "dracula-soft";
case LightPlus = "light-plus";
case KanagawaLotus = "kanagawa-lotus";
case GithubLightHighContrast = "github-light-high-contrast";
case Dracula = "dracula";
case CatppuccinMocha = "catppuccin-mocha";
case GithubDarkDimmed = "github-dark-dimmed";
case NightOwl = "night-owl";
case KanagawaDragon = "kanagawa-dragon";
case RosePineMoon = "rose-pine-moon";
case Laserwave = "laserwave";
case VitesseBlack = "vitesse-black";
case CatppuccinFrappe = "catppuccin-frappe";
case AyuDark = "ayu-dark";
case MaterialThemeOcean = "material-theme-ocean";
case SolarizedLight = "solarized-light";
case TokyoNight = "tokyo-night";
case GithubLight = "github-light";
case GruvboxDarkHard = "gruvbox-dark-hard";
case KanagawaWave = "kanagawa-wave";
case GithubDarkDefault = "github-dark-default";
case CatppuccinMacchiato = "catppuccin-macchiato";
case GithubDarkHighContrast = "github-dark-high-contrast";
case VitesseLight = "vitesse-light";
case MaterialThemeLighter = "material-theme-lighter";
case Plastic = "plastic";
case SnazzyLight = "snazzy-light";
case Poimandres = "poimandres";
case GithubDark = "github-dark";
case Andromeeda = "andromeeda";
case VitesseDark = "vitesse-dark";
case MinLight = "min-light";
case Nord = "nord";
case EverforestLight = "everforest-light";
case GithubLightDefault = "github-light-default";
case MinDark = "min-dark";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}