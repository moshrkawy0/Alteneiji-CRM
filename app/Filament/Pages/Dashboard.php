<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Panel;

class Dashboard extends Page
{
    protected string $view = 'filament.pages.dashboard';
    
    // Hide from navigation menu
    protected static bool $shouldRegisterNavigation = false;
    
    // Make it the home page
    public static function getRoutePath(Panel $panel): string
    {
        return '';
    }
    
    // Page title
    public function getHeading(): string
    {
        return 'Dashboard';
    }
    
    // Page title tag
    public function getTitle(): string
    {
        return 'Dashboard';
    }
}
