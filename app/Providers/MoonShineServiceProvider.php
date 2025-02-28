<?php

declare(strict_types=1);

namespace App\Providers;

use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;

use App\MoonShine\Resources\TaskResource;
use App\MoonShine\Resources\ProjectResource;
use App\MoonShine\Resources\FileResource;


use Closure;

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

            MenuItem::make('Tareas', new TaskResource())->icon('heroicons.user-group'),

            MenuGroup::make('Gestión Proyectos', [
                MenuItem::make('Creacion de Proyectos', new ProjectResource())->icon('heroicons.book-open'),
            ])->icon('heroicons.folder'),

            MenuGroup::make('Gestión Expediente Tecnico', [
                MenuItem::make('Expediente Tecnico', new FileResource())->icon('heroicons.book-open'),
                MenuGroup::make('Documentos', [
                    MenuItem::make('Resumen Ejecutivo', new FileResource())
                        ->icon('heroicons.outline.clipboard-document-list'),
                    MenuItem::make('Memoria Descriptiva', new FileResource())
                        ->icon('heroicons.outline.document-check'),
                    MenuItem::make('Memoria Descriptiva', new FileResource())
                        ->icon('heroicons.outline.document-check'),
                    MenuItem::make('Resumen Ejecutivo', new FileResource())
                        ->icon('heroicons.outline.clipboard-document-list'),
                    MenuItem::make('Memoria Descriptiva', new FileResource())
                        ->icon('heroicons.outline.document-check'),
                    MenuItem::make('Memoria Descriptiva', new FileResource())
                        ->icon('heroicons.outline.document-check'),
                    MenuItem::make('Resumen Ejecutivo', new FileResource())
                        ->icon('heroicons.outline.clipboard-document-list'),
                    MenuItem::make('Memoria Descriptiva', new FileResource())
                        ->icon('heroicons.outline.document-check'),
                    MenuItem::make('Memoria Descriptiva', new FileResource())
                        ->icon('heroicons.outline.document-check'),
                    MenuItem::make('Resumen Ejecutivo', new FileResource())
                        ->icon('heroicons.outline.clipboard-document-list'),
                    MenuItem::make('Memoria Descriptiva', new FileResource())
                        ->icon('heroicons.outline.document-check'),
                    MenuItem::make('Memoria Descriptiva', new FileResource())
                        ->icon('heroicons.outline.document-check'),
                    MenuItem::make('Memoria Descriptiva', new FileResource())
                        ->icon('heroicons.outline.document-check'),
                    MenuItem::make('Memoria Descriptiva', new FileResource())
                        ->icon('heroicons.outline.document-check'),
                ])->icon('heroicons.outline.academic-cap'),
            ])->icon('heroicons.folder'),


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
