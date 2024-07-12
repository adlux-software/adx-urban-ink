<?php

namespace App\Nova;

use App\Models\Variant;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;

class VariantResource extends Resource
{
    public static $model = Variant::class;

    public static $title = 'title';

    public static $search = [
        ''
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()
                ->sortable(),

            (new Panel('Details' , [

                //sort order
                Number::make('Sort Order', 'sort_order'),


                BelongsTo::make('Product', 'product', Product::class)
                    ->sortable()
                    ->searchable()
                    ->rules('required'),

                BelongsTo::make('Color', 'color', Colors::class)
                    ->sortable()
                    ->showOnPreview(),


                BelongsTo::make('Size', 'size', Size::class)
                    ->sortable()
                    ->showOnPreview(),
                Currency::make('MRP', 'mrp')
                    ->currency('LKR')
                    ->sortable()
                    ->rules('required'),



                Number::make('Quantity', 'quantity')
                    ->sortable()
                    ->rules('required'),


                Currency::make('Selling Price', 'selling_price')
                    ->currency('LKR')
                    ->sortable()
                    ->rules('required'),

                Number::make('Stock', 'stock')
                    ->sortable()
                    ->rules('required'),

                Text::make('SKU', 'sku')
                    ->sortable()
                    ->rules('required'),
            ])),

        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }

    public static function availableForNavigation(Request $request)
    {
        return false;
    }
}
