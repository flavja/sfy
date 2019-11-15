<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use Twig\TwigFilter;
use Twig\TwigFunction;

/*
 * création de variables globales : implementer globalsInterface
 * */
class AppExtension extends AbstractExtension implements GlobalsInterface
{
    public function getGlobals()
    {
        return [
            'site_name' => 'hastaLaVista',
            'GA_code' => 'XXXX-XXXX-XXXX'
        ];
    }

    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter(
                'hide_links',
                [$this, 'hideLinks'],
                ['is_safe' => [ 'html']
            ]),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('function_name', [$this, 'doSomething']),
        ];
    }

    public function hideLinks(string $value):string
    {
        // remplace lien par texte
        $result = preg_replace('#<a.*/a>#U', '<mark>[hidden link]</mark>', $value);
        return $result;
    }
}
