<?php

namespace App\Nova;

use App\Models\instagram;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Panel;

class InstagramResource extends Resource
{
    public static $model = instagram::class;

    public static $title = 'id';

    public static $search = [
        ''
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            (new Panel('Images', [
                Images::make('Featured Image ( 550*550 )', 'featured'),
            ])),
        ];
    }

    public function cards(Request $request)
    {
        return [];
    }

    public function filters(Request $request)
    {
        return [];
    }

    public function lenses(Request $request)
    {
        return [];
    }

    public function actions(Request $request)
    {
        return [];
    }

    public static function label()
    {
        return 'Instagram';
    }

}
