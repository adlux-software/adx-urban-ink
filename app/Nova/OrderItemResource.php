<?php

namespace App\Nova;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class OrderItemResource extends Resource
{
    public static $model = OrderItem::class;

    public static $title = 'id';

    public static $search = [
        ''
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Order', 'order', OrdersResource::class)->sortable(),
            BelongsTo::make('Product', 'product', Product::class)->sortable(),
            BelongsTo::make('Variant', 'variant', VariantResource::class)
                ->sortable()
                ->display(function ($variant) {
                    return $variant->size->name . ' - ' . $variant->color->name;
                }),            Text::make('Quantity', 'quantity')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Total', 'total')
                ->sortable()
                ->rules('required', 'max:255'),
            Text::make('Status', 'status')
                ->sortable()
                ->rules('required', 'max:255'),
            Text::make('Note', 'note')
                ->sortable()
                ->rules('required', 'max:255'),

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
}
