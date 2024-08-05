<?php

namespace App\Nova;

use App\Models\Order;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
class OrdersResource extends Resource
{
    public static $model = Order::class;

    public static $title = 'id';

    public static $search = [
        ''
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('First Name', 'firstname')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Last Name', 'lastname')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Email', 'email')
                ->sortable()
                ->rules('required', 'email', 'max:255'),

            Text::make('Phone', 'phone')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Address', 'address')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('City', 'city')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Zip', 'zip')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Total', 'total')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Payment Mode', 'payment_mode')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Payment ID', 'payment_id')
                ->sortable()
                ->rules('required', 'max:255'),


            Select::make('Status', 'status')
                ->sortable()
                ->rules('required', 'in:pending,complete')
                ->options([
                    'pending' => 'Pending',
                    'complete' => 'Complete',
                ]),

            HasMany::make('Order Items', 'items', OrderItemResource::class),

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
