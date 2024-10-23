<?php

namespace App\Providers;

use App\Nova\Administrator;
use App\Nova\Category;
use App\Nova\Colors;
use App\Nova\ContactResource;
use App\Nova\Dashboards\Main;
use App\Nova\HomeDetailsResource;
use App\Nova\InstagramResource;
use App\Nova\OrderItemResource;
use App\Nova\OrdersResource;
use App\Nova\Product;
use App\Nova\Resource\NewProductResource;
use App\Nova\Resource\PostCreatFormInfomationResource;
use App\Nova\Resource\PostStatusResource;
use App\Nova\Resource\ProcessingStepsResource;
use App\Nova\Size;
use App\Nova\User;
use App\Nova\VariantResource;
use Bakerkretzmar\NovaSettingsTool\SettingsTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),

                MenuSection::make('People', [
                    MenuItem::resource(User::class),
                ])->icon('user-group')->collapsable(),

                MenuSection::make('Attributes', [
                    MenuItem::resource(Colors::class),
                    MenuItem::resource(Size::class),

                ])->icon('book-open')->collapsable(),

                MenuSection::make('Products', [
                    MenuItem::resource(Category::class),
                    MenuItem::resource(Product::class),
                    MenuItem::resource(VariantResource::class),
                ])->icon('cube')->collapsable(),

                MenuSection::make('Orders', [
                    MenuItem::resource(OrdersResource::class),
                    MenuItem::resource(OrderItemResource::class),
                ])->icon('cog')->collapsable(),

                MenuSection::make('Orders', [
                ])->icon('bell')->collapsable(),

                MenuSection::make('Contact', [
                    MenuItem::resource(ContactResource::class),
                    MenuItem::resource(InstagramResource::class),
                ])->icon('phone')->collapsable(),

                MenuSection::make('Policy', [
                    MenuItem::resource(\App\Nova\PolicyResource::class),
                ])->icon('book-open')->collapsable(),

                MenuSection::make(__(config('nova-settings-tool.sidebar-label', 'Settings')))
                    ->path('/settings')
                    ->icon('cog'),
            ];
        });

        Nova::footer(function () {
            $year = date('Y'); // Get current year
            $version = \Laravel\Nova\Nova::version(); // Get current Nova version
            $businessName = 'The Sapphire Company'; // Get the business name

            return "<div>
                <p class='mt-8 text-center text-xs text-80'>
                    <a href='https://nova.laravel.com' class='text-primary font-bold dim no-underline'>{$businessName}</a>
                    <span class='px-1'>&middot;</span>
                    &copy; {$year} Solution By Adlux Software (Pvt) Ltd
                            <span class='px-1'>&middot;</span>
                            v{$version}
                </p>
            </div>";
        });
    }
    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }


    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            (new SettingsTool()),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
