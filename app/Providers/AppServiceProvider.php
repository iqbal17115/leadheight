<?php

namespace App\Providers;

use App\Models\Backend\Inventory\SaleInvoice;
use App\Models\Backend\Inventory\SaleInvoiceDetail;
use App\Models\Backend\ProductInfo\Category;
use App\Models\Backend\Setting\BreakingNews;
use App\Models\Backend\Setting\CompanyInfo;
use App\Models\Backend\Setting\AboutUs;
use App\Models\UserProfile\ProfileSetting;
use App\Models\Backend\Setting\InvoiceSetting;
use App\Models\Backend\Setting\Language;
use App\Models\District;
use App\Models\User;
use App\Models\FrontEnd\Order;
use App\Models\Inventory\Currency;
use App\Models\Notification;
use App\Models\Backend\Offer\Offer;
use App\Services\AddToCardService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Categories
        View::composer('*', function ($view) {

            $view->with('language', Language::whereIsDefault(1)->first());
            $view->with('Districts', District::orderBy('name', 'asc')->get());
            $view->with('categories', Category::orderBy('id', 'desc')->get());
            $view->with('categories', Category::orderBy('id', 'desc')->get());
            // $view->with('categoryImageLast', Category::whereTopShow(1)->orderBy('id', 'desc')->first());
            // $view->with('subCategories', SubCategory::orderBy('id', 'desc')->get());
            // $view->with('subSubCategories', SubSubCategory::orderBy('id', 'desc')->get());
            $view->with('companyInfo', CompanyInfo::first());
            $view->with('AboutUsInfo', AboutUs::first());
            $view->with('InvoiceSetting', InvoiceSetting::first());
            $view->with('currencySymbol', Currency::whereIsActive(1)->first());
            $view->with('cardBadge', AddToCardService::cardTotalProductAndAmount());
            $view->with('BreakingNews', BreakingNews::whereIsActive(1)->get());
            $view->with('orders_count', Order::whereStatus('processing')->count());
            $view->with('offers', Offer::whereIsActive(1)->get());
            $view->with('ProfileSettings', ProfileSetting::first());

            // Start Order Notification
            $view->with('notifications', Notification::where('status', null)->get());
            // End Order Notification
        });

    }
}
