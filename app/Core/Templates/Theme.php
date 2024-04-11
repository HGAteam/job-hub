<?php

namespace App\Core\Templates;
use Illuminate\Support\Facades\Config;

class Theme
{
    protected $skeleton;

    public function __construct()
    {
        $this->skeleton = Config::get('theme.skeleton.themes');
    }
    public function getActiveTheme()
    {
        foreach ($this->skeleton as $theme) {
            if ($theme['active'] == true) {
                return $theme;
                // return $theme['slug']; // Retorna el nombre del template activo
            }
        }
        return null;
    }

    public function listCSS()
    {
        $activeTheme = $this->getActiveTheme();
        if ($activeTheme) {
            return $activeTheme['assets']['css'];
        }
        return [];
    }

    public function listJS()
    {
        $activeTheme = $this->getActiveTheme();
        if ($activeTheme) {
            return $activeTheme['assets']['js'];
        }
        return [];
    }

    public function includeFonts()
    {
        $activeTheme = $this->getActiveTheme();
        if ($activeTheme['assets']['fonts']['google']['active']) {
            $fonts = $activeTheme['assets']['fonts']['google'][0];
            return '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $fonts . '"/>';
        }
    }

    public function getRouteIndexHtml()
    {
        $activeTheme = $this->getActiveTheme();
        // Slug del tema obtenido desde los datos del tema activo
        $themeSlug = $activeTheme->slug;
        $routeIndexHtml = public_path('theme/' . $themeSlug . '/index.html');

        return $routeIndexHtml;
    }

    public function isLoginEnabled()
    {
        $activeTheme = $this->getActiveTheme();
        if ($activeTheme && isset($activeTheme['login']) && $activeTheme['login'] === true) {
            return true;
        }
        return false;
    }

    public function isRegisterEnabled()
    {
        $activeTheme = $this->getActiveTheme();
        if ($activeTheme && isset($activeTheme['register']) && $activeTheme['register'] === true) {
            return true;
        }
        return false;
    }
}
