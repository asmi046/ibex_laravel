<?php

declare(strict_types=1);

namespace App\Providers;

use Closure;
use MoonShine\MoonShine;
use MoonShine\Pages\Page;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuElement;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\OptionResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\TecnicalDocument;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Providers\MoonShineApplicationServiceProvider;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ),
            ]),

            MenuItem::make(
                static fn() => __('Продукты'),
                new ProductResource()
            )->icon('heroicons.outline.archive-box') ,

            MenuItem::make(
                static fn() => __('Услуги'),
                new ServiceResource()
            )->icon('heroicons.outline.cog-8-tooth') ,

            MenuItem::make(
                static fn() => __('Опции'),
                new OptionResource()
            )->icon('heroicons.adjustments-horizontal') ,

            MenuItem::make(
                static fn() => __('Мню'),
                new MenuResource()
            )->icon('heroicons.bars-3') ,

            MenuItem::make(
                static fn() => __('Страницы'),
                new PageResource()
            )->icon('heroicons.outline.clipboard-document') ,

            MenuItem::make(
                static fn() => __('Техническая документация'),
                new TecnicalDocument()
            )->icon('heroicons.clipboard-document-list') ,
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
