<?php

namespace App\Nova;

use App\Models\contact;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class ContactResource extends Resource
{
    public static $model = contact::class;

    public static $title = 'id';

    public static $search = [
        ''
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            //name
            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),
            //email
            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:255'),
            //phone
            Text::make('Phone')
                ->sortable()
                ->rules('required', 'max:20'),
            //message
            Text::make('Message')
                ->sortable()
                ->rules('required', 'max:500')
                ->hideFromIndex(),

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

    public static function label()
    {
        return 'New Contact';
    }

}
