<?php

namespace App\Nova;

use App\Models\Policy;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Mostafaznv\NovaCkEditor\CkEditor;

class PolicyResource extends Resource
{
    public static $model = Policy::class;

    public static $title = 'title';

    public static $search = [
        'id', 'title', 'slug', 'summery', 'description', 'status',
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Title', 'title')
                ->sortable()
                ->rules('required'),

            Slug::make('Slug', 'slug')
                ->from('title')
                ->rules('required'),

            CkEditor::make('Summery', 'summery')
                ->sortable()
                ->rules('nullable'),

            CkEditor::make('Description', 'description')
                ->sortable()
                ->rules('nullable'),

            Number::make('Sort Order', 'sort_order')
                ->sortable(),

            Boolean::make('Status', 'status')
                ->sortable()
                ->rules('boolean'),
        ];
    }

    public static function label(): string
    {
        return 'Policies';
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
