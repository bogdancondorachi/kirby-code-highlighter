<?php

namespace Phiki\Theme;

use Phiki\Contracts\ThemeRepositoryInterface;

enum Theme: string
{
    case LightPlus = "light-plus";
case OneLight = "one-light";
case GithubDarkDefault = "github-dark-default";
case GithubDark = "github-dark";
case MaterialThemeLighter = "material-theme-lighter";
case RosePineMoon = "rose-pine-moon";
case Laserwave = "laserwave";
case CatppuccinMocha = "catppuccin-mocha";
case MaterialThemePalenight = "material-theme-palenight";
case SolarizedLight = "solarized-light";
case Plastic = "plastic";
case CatppuccinFrappe = "catppuccin-frappe";
case Monokai = "monokai";
case VitesseLight = "vitesse-light";
case GithubLightHighContrast = "github-light-high-contrast";
case GruvboxLightSoft = "gruvbox-light-soft";
case KanagawaDragon = "kanagawa-dragon";
case SlackOchin = "slack-ochin";
case MaterialTheme = "material-theme";
case SolarizedDark = "solarized-dark";
case GithubLight = "github-light";
case Houston = "houston";
case GithubDarkHighContrast = "github-dark-high-contrast";
case Poimandres = "poimandres";
case MinLight = "min-light";
case GruvboxLightMedium = "gruvbox-light-medium";
case CatppuccinLatte = "catppuccin-latte";
case OneDarkPro = "one-dark-pro";
case RosePine = "rose-pine";
case DarkPlus = "dark-plus";
case KanagawaWave = "kanagawa-wave";
case Vesper = "vesper";
case SnazzyLight = "snazzy-light";
case EverforestDark = "everforest-dark";
case CatppuccinMacchiato = "catppuccin-macchiato";
case TokyoNight = "tokyo-night";
case NightOwl = "night-owl";
case EverforestLight = "everforest-light";
case Red = "red";
case SlackDark = "slack-dark";
case AyuDark = "ayu-dark";
case Nord = "nord";
case GruvboxDarkSoft = "gruvbox-dark-soft";
case MinDark = "min-dark";
case GruvboxLightHard = "gruvbox-light-hard";
case KanagawaLotus = "kanagawa-lotus";
case GithubLightDefault = "github-light-default";
case GithubDarkDimmed = "github-dark-dimmed";
case AuroraX = "aurora-x";
case MaterialThemeDarker = "material-theme-darker";
case Synthwave84 = "synthwave-84";
case GruvboxDarkHard = "gruvbox-dark-hard";
case Andromeeda = "andromeeda";
case VitesseDark = "vitesse-dark";
case Dracula = "dracula";
case MaterialThemeOcean = "material-theme-ocean";
case DraculaSoft = "dracula-soft";
case RosePineDawn = "rose-pine-dawn";
case GruvboxDarkMedium = "gruvbox-dark-medium";
case VitesseBlack = "vitesse-black";

    public function toParsedTheme(ThemeRepositoryInterface $repository): ParsedTheme
    {
        return $repository->get($this->value);
    }
}