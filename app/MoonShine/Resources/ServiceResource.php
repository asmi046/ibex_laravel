<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use MoonShine\Fields\ID;

use MoonShine\Fields\Json;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Service>
 */
class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Услуги компании';
    protected string $column = 'title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Название', 'title'),
                Slug::make('Окончание сылки', 'slug')->hideOnIndex(),
                Image::make('Основное изображение', 'img')->dir('services'),
                TinyMce::make('Краткое описание', 'short_description')->hideOnIndex(),
                TinyMce::make('Описание', 'description')->hideOnIndex(),
                Number::make('Порядок сортировки', 'order')->sortable(),
                Json::make('Галерея', 'galery')
                ->hideOnIndex()
                ->fields([
                    Image::make('Изображение', 'lnk')->dir('services'),
                    Text::make('Тег alt', 'alt'),
                    Text::make('Тег title', 'title')
                ]),
                Text::make('SEO заголовок', 'seo_title')->hideOnIndex(),
                Textarea::make('SEO описание', 'seo_description')->hideOnIndex()
            ]),
        ];
    }

    /**
     * @param Service $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
