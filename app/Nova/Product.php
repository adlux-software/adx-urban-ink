<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Mostafaznv\NovaCkEditor\CkEditor;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Product>
     */
    public static $model = \App\Models\Product::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'slug', 'description','category.slug',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Title', 'title')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug', 'slug')
                ->from('title')
                ->rules('required'),

            Text::make('URL', function ($model) {
                return '<a href="' . route('product.show', $this->slug) . '" target="_blank"><svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 6V8H5V19H16V14H18V20C18 20.5523 17.5523 21 17 21H4C3.44772 21 3 20.5523 3 20V7C3 6.44772 3.44772 6 4 6H10ZM21 3V11H19L18.9999 6.413L11.2071 14.2071L9.79289 12.7929L17.5849 5H13V3H21Z"></path></svg></a>';
            })
                ->asHtml()
                ->onlyOnIndex(),

            Boolean::make('Status', 'status')->sortable(),
            Boolean::make('Featured', 'featured')->sortable(),
            Boolean::make('Popular', 'popular')->sortable(),
            Boolean::make('Best Selling Product', 'BestSellingProduct')->sortable(),

            CkEditor::make('Description')
                ->hideFromIndex()
                ->rules('required')
                ->sortable(),

            BelongsTo::make('Category')->sortable()
                ->showOnPreview(),

            HasMany::make('Variants', 'variants', VariantResource::class),

            (new Panel('Images', [

                Images::make('Featured Image', 'featured'),

                Images::make('Gallery', 'gallery'),

            ])),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
