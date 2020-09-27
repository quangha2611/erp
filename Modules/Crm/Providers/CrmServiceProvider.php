<?php

namespace Modules\Crm\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

use Modules\Crm\Repositories\Calendar\CalendarInterfaceRepository;
use Modules\Crm\Repositories\Calendar\CalendarRepository;
use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;
use Modules\Crm\Repositories\Customer\CustomerRepository;
use Modules\Crm\Repositories\CustomerLevel\CustomerLevelInterfaceRepository;
use Modules\Crm\Repositories\CustomerLevel\CustomerLevelRepository;
use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;
use Modules\Crm\Repositories\Activity\ActivityRepository;
use Modules\Crm\Repositories\PhoneCallResult\PhoneCallResultInterfaceRepository;
use Modules\Crm\Repositories\PhoneCallResult\PhoneCallResultRepository;
use Modules\Crm\Repositories\PhoneCall\PhoneCallInterfaceRepository;
use Modules\Crm\Repositories\PhoneCall\PhoneCallRepository;
use Modules\Crm\Repositories\RequestCall\RequestCallInterfaceRepository;
use Modules\Crm\Repositories\RequestCall\RequestCallRepository;
use Modules\Crm\Repositories\Contact\ContactInterfaceRepository;
use Modules\Crm\Repositories\Contact\ContactRepository;
use Modules\Crm\Repositories\Contract\ContractInterfaceRepository;
use Modules\Crm\Repositories\Contract\ContractRepository;
use Modules\Crm\Repositories\Product\ProductInterfaceRepository;
use Modules\Crm\Repositories\Product\ProductRepository;
use Modules\Crm\Repositories\ContractDetail\ContractDetailRepository;
use Modules\Crm\Repositories\ContractDetail\ContractDetailInterfaceRepository;


class CrmServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Crm';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'crm';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->bind(CalendarInterfaceRepository::class, CalendarRepository::class);
        $this->app->bind(CustomerInterfaceRepository::class, CustomerRepository::class);
        $this->app->bind(ActivityInterfaceRepository::class, ActivityRepository::class);
        $this->app->bind(CustomerLevelInterfaceRepository::class, CustomerLevelRepository::class);
        $this->app->bind(PhoneCallResultInterfaceRepository::class, PhoneCallResultRepository::class);
        $this->app->bind(PhoneCallInterfaceRepository::class, PhoneCallRepository::class);
        $this->app->bind(RequestCallInterfaceRepository::class, RequestCallRepository::class);
        $this->app->bind(ContactInterfaceRepository::class, ContactRepository::class);
        $this->app->bind(ContractDetailInterfaceRepository::class, ContractDetailRepository::class);
        $this->app->bind(ContractInterfaceRepository::class, ContractRepository::class);
        $this->app->bind(ProductInterfaceRepository::class, ProductRepository::class);
    }

    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
        );
    }


    public function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', $this->moduleNameLower . '-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/' . $this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path($this->moduleName, 'Database/factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
                $paths[] = $path . '/modules/' . $this->moduleNameLower;
            }
        }
        return $paths;
    }
}
