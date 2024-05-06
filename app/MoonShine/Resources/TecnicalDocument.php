<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;


use MoonShine\Fields\Url;
use MoonShine\Fields\File;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Menu>
 */
class TecnicalDocument extends ModelResource
{
    protected string $model = \App\Models\TecnicalDocument::class;

    protected string $title = 'Техническая документация';
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
                File::make('Файл', 'file')
                    ->disk('public')
                    ->dir('td'),
                Image::make('Изображение', 'img')
                    ->disk('public')
                    ->dir('td'),

            ]),
        ];
    }

    /**
     * @param Menu $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
