<?php
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\FrontEnt\HomeController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontEnt\LoginController;
use App\Http\Livewire\Backend\ContactInfo\ContactCategory;
use App\Http\Livewire\Backend\ContactInfo\Customer as CustomerInfo;
use App\Http\Livewire\Backend\ContactInfo\Staff;
use App\Http\Livewire\Backend\ContactInfo\Supplier;
use App\Http\Livewire\Backend\Inventory\Purchase;
use App\Http\Livewire\Backend\Inventory\PurchaseInvoice;
use App\Http\Livewire\Backend\Inventory\PurchaseList;
use App\Http\Livewire\Backend\Inventory\Sale;
use App\Http\Livewire\Backend\Inventory\SaleInvoice;
use App\Http\Livewire\Backend\Inventory\SaleList;
use App\Http\Livewire\Backend\Inventory\StockAdjustment;
use App\Http\Livewire\Backend\Order\ProcessingOrderList;
use App\Http\Livewire\Backend\Order\CancelOrderList;
use App\Http\Livewire\Backend\Order\OrderInvoice;
use App\Http\Livewire\Backend\Order\OrderList;
use App\Http\Livewire\Backend\Order\ReturnedOrderList;
use App\Http\Livewire\Backend\Order\PrintOrder;
use App\Http\Livewire\Backend\Order\ShippedOrderList;
use App\Http\Livewire\Backend\Order\DeliveredOrderList;
use App\Http\Livewire\Backend\ProductInfo\Brand;
use App\Http\Livewire\Backend\ProductInfo\Category;
use App\Http\Livewire\Backend\ProductInfo\Color;
use App\Http\Livewire\Backend\ProductInfo\Product;
use App\Http\Livewire\Backend\ProductInfo\ProductList;
use App\Http\Livewire\Backend\ProductInfo\Size;
use App\Http\Livewire\Backend\ProductInfo\SubCategory;
use App\Http\Livewire\Backend\ProductInfo\SubSubCategory;
use App\Http\Livewire\Backend\ProductInfo\Unit;
use App\Http\Livewire\Backend\ProductInfo\ProductFeature;
use App\Http\Livewire\Backend\Setting\Branch;
use App\Http\Livewire\Backend\Setting\BreakingNews;
use App\Http\Livewire\Backend\Setting\CompanyInfo;
use App\Http\Livewire\Backend\Setting\CouponCode;
use App\Http\Livewire\Backend\Setting\Currency;
use App\Http\Livewire\Backend\Setting\DeliveryMethod;
use App\Http\Livewire\Backend\Setting\InvoiceSetting;
use App\Http\Livewire\Backend\Setting\PaymentMethod;
use App\Http\Livewire\Backend\Setting\PointPolicy;
use App\Http\Livewire\Backend\Setting\ShippingCharge;
use App\Http\Livewire\Backend\Setting\Slider;
use App\Http\Livewire\Backend\Setting\WhyWeAreDifferent;
use App\Http\Livewire\Backend\Setting\HowWeWillHelp;
use App\Http\Livewire\Backend\Setting\WhoTrust;
use App\Http\Livewire\Backend\Setting\Affiliation;
use App\Http\Livewire\Backend\Setting\Carrer;
use App\Http\Livewire\Backend\ProductInfo\Package;
use App\Http\Livewire\Backend\ProductInfo\Portfolio;
use App\Http\Livewire\Backend\Setting\PayNow;
use App\Http\Livewire\Backend\Blog\Blog;
use App\Http\Livewire\Backend\Setting\Vat;
use App\Http\Livewire\Backend\Setting\Warehouse;
use App\Http\Livewire\Backend\Setting\Language;
use App\Http\Livewire\Backend\Setting\ManageLanguage;
use App\Http\Livewire\Backend\Setting\AboutUs;
use App\Http\Livewire\Backend\ContactUs\Message;
use App\Http\Livewire\Backend\ProductInfo\PreviewProduct;
use App\Http\Livewire\Backend\Vendor\VendorList;
use App\Http\Livewire\Backend\Vendor\VendorApprovedList;
use App\Http\Livewire\Backend\Vendor\VendorCancelList;
use App\Http\Livewire\Frontend\Category as FrontEndCategory;
use App\Http\Livewire\Frontend\CategoryWiseProduct;
use App\Http\Livewire\Frontend\Contact as ContactUs;
use App\Http\Livewire\Frontend\Error;
use App\Http\Livewire\Frontend\MyProfile;
use App\Http\Livewire\Frontend\ProductView;
use App\Http\Livewire\Frontend\SignIn;
use App\Http\Livewire\Frontend\SignUp;
use App\Http\Livewire\Frontend\LogIn;
use App\Http\Livewire\Frontend\Wishlist;
use App\Http\Livewire\Inventory\DelieveryMethod;
use App\Http\Livewire\UserManagement\UserList;
use App\Http\Livewire\UserProfile\AuthLockScreen;
use App\Http\Livewire\UserProfile\ChangePassword;
use App\Http\Livewire\UserProfile\ProfileSettings;
use App\Http\Livewire\UserManagement\AllUserList;

use App\Http\Livewire\Backend\Offer\Offer;
use App\Http\Livewire\Backend\Order\OrderEdit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('change-password-customer', [HomeController::class, 'ChangePassword'])->name('change-password-customer');
Route::post('change-profile-photo', [HomeController::class, 'ChangeProfilePhoto'])->name('change-profile-photo');
Route::post('upazila-search', [HomeController::class, 'SearchUpazila'])->name('upazila-search');
Route::get('edit/{id?}', [HomeController::class, 'EditContact'])->name('edit');
Route::post('edit', [HomeController::class, 'EditContactById']);
Route::post('edit-shipping-address', [HomeController::class, 'EditShippingAddress'])->name('edit-shipping-address');
Route::get('seller-create', [HomeController::class, 'SellerCreateForm'])->name('seller-create');
Route::post('seller-create', [HomeController::class, 'CreateSeller']);

Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/', function () {
    return view('auth.login');
});
Route::group(['prefix' => 'customer'], function () {
    // Route::get('customer_login', Customer::class)->name('customer_login');
    Route::get('category_wise_product/{id?}', CategoryWiseProduct::class)->name('category_wise_product');
    Route::get('product_view/{id?}', ProductView::class)->name('product_view');
});

// Route::get('privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/customer_login', [HomeController::class, 'CustomerLogin'])->name('customer_login');
Route::get('/check-out', [HomeController::class, 'checkOut'])->name('check-out');
Route::get('/offer', [HomeController::class, 'Offer'])->name('offer');
Route::get('/product-search/', [HomeController::class, 'productSearch'])->name('product-search');
Route::get('/feature-wise/{feature}', [HomeController::class, 'FeatureWise'])->name('feature-wise');
Route::get('/all-category-wise/{id?}', [HomeController::class, 'allCategoryWise'])->name('all-category-wise');
Route::get('/category/{id?}', [HomeController::class, 'Category'])->name('category');
Route::get('/sub-category/{id?}', [HomeController::class, 'SubCategory'])->name('sub-category');
Route::get('/sub-sub-category/{id?}', [HomeController::class, 'SubSubCategory'])->name('sub-sub-category');
Route::get('/search-category-wise/{id?}', [HomeController::class, 'searchByCategory'])->name('search-category-wise');
Route::get('/search-subCategory-wise/{id?}', [HomeController::class, 'searchBySubCategory'])->name('search-subCategory-wise');
Route::get('/search-subSubCategory-wise/{id?}', [HomeController::class, 'searchBySubSubCategory'])->name('search-subSubCategory-wise');
Route::get('/search-brand-wise/{id?}', [HomeController::class, 'searchByBrand'])->name('search-brand-wise');
Route::post('/ajax/add-to-card-store', [HomeController::class, 'addToCardStore'])->name('ajax-add-to-card-store');
Route::post('/ajax/add-to-card-quantity-update', [HomeController::class, 'cartProductQuantityUpdate'])->name('ajax-add-to-card-quantity-update');
Route::post('/ajax/add-to-card-product-delete', [HomeController::class, 'cartProductDelete'])->name('ajax-add-to-card-product-delete');
Route::get('/confirm-order', [HomeController::class, 'HomePage'])->name('confirm-order');
Route::post('/confirm-order', [HomeController::class, 'confirmOrder'])->name('confirm-order');
Route::post('/ajax/send-message', [HomeController::class, 'messages'])->name('send-message');
Route::get('/order-completed/{id?}', [HomeController::class, 'orderComplete'])->name('order-completed');
Route::get('product-details/{id?}', [HomeController::class, 'productDetails'])->name('product-details');
Route::get('my-account', [HomeController::class, 'MyAccount'])->name('my-account');
Route::get('order-details/{id?}', [HomeController::class, 'OrderDetail'])->name('order-details');
Route::get('contact', [HomeController::class, 'Contact'])->name('contact');
Route::get('contact', [HomeController::class, 'Contact'])->name('contact');
Route::get('about', [HomeController::class, 'About'])->name('about');
Route::get('pay-now', [HomeController::class, 'PayNow'])->name('pay-now');
Route::get('view-carrer', [HomeController::class, 'ViewCarrer'])->name('view-carrer');
Route::get('blog-view', [HomeController::class, 'ViewBlog'])->name('blog-view');
Route::get('service-details/{id?}', [HomeController::class, 'serviceDetails'])->name('service-details');
Route::get('privacy-policy', [HomeController::class, 'PrivacyPolicy'])->name('privacy-policy');
Route::get('terms-condition', [HomeController::class, 'TermsAndCondition'])->name('terms-condition');
Route::get('return-policy', [HomeController::class, 'ReturnPolicy'])->name('return-policy');
Route::get('app-development', [HomeController::class, 'AppDevelopment'])->name('app-development');
Route::get('graphics-design', [HomeController::class, 'GraphicsDesign'])->name('graphics-design');
Route::get('software-development', [HomeController::class, 'ReturnPolicy'])->name('software-development');
Route::get('return-policy', [HomeController::class, 'ReturnPolicy'])->name('return-policy');
Route::get('service-details/{id?}', [HomeController::class, 'servicedetail'])->name('service-details');

Route::get('category', FrontEndCategory::class)->name('category');
Route::get('sign-in', SignIn::class)->name('sign-in');
Route::get('sign-up', SignUp::class)->name('sign-up');
Route::get('log-in', LogIn::class)->name('log-in');
Route::get('contact-us', ContactUs::class)->name('contact-us');
Route::get('my-profile', MyProfile::class)->name('my-profile');
// Route::get('return-policy', ReturnPolicy::class)->name('return-policy');
Route::get('message', Message::class)->name('message');


Route::get('error', Error::class)->name('error');

Route::get('wish-list', Wishlist::class)->name('wish-list');
Route::Post('customer_sign_in', [LoginController::class, 'authenticate'])->name('customer_sign_in');
Route::group(['middleware' => ['role:admin|user|manager|editor']], function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
        return view('livewire.dashboard');
    })->name('dashboard');

    // Route::get('dashboard', Dashboard::class)->name('dashboard');

    Route::group(['prefix' => 'member', 'middleware' => ['auth']], function () {
        Route::group(['prefix' => 'offer', 'as' => 'offer.'], function () {
            Route::get('offer', Offer::class)->name('offer');
        });
        Route::group(['prefix' => 'user-management', 'as' => 'user-management.'], function () {
            Route::get('user-list', UserList::class)->name('user-list');
            Route::get('user-restiction/{id?}', [UserController::class, 'userRestiction'])->name('user-restiction');
            Route::post('user_restiction/update', [UserController::class, 'UserRectictionsUpdate'])->name('user_restictions.update');
        });
        Route::group(['prefix' => 'inventory', 'as' => 'inventory.'], function () {
            Route::get('category', Category::class)->name('category');
            Route::get('currency', Currency::class)->name('currency');
            // Route::get('language', Language::class)->name('language');
            Route::get('delivery-method', DelieveryMethod::class)->name('delivery-method');
            Route::get('ware-house', WareHouse::class)->name('ware-house');
            Route::get('purchase/{id?}', Purchase::class)->name('purchase');
            Route::get('purchase-list', PurchaseList::class)->name('purchase-list');
            Route::get('purchase-invoice/{id}', PurchaseInvoice::class)->name('purchase-invoice');
            Route::get('sale/{id?}', Sale::class)->name('sale');
            Route::get('sale-list', SaleList::class)->name('sale-list');
            Route::get('sale-invoice/{id}', SaleInvoice::class)->name('sale-invoice');
            Route::get('stock-adjustment', StockAdjustment::class)->name('stock-adjustment');
        });
        Route::group(['prefix' => 'user-profile', 'as' => 'user-profile.'], function () {
            Route::get('profile-settings', ProfileSettings::class)->name('profile-settings');
            Route::get('change-password', ChangePassword::class)->name('change-password');
            Route::get('auth-lock-screen', AuthLockScreen::class)->name('auth-lock-screen');
        });

        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('category', Category::class)->name('category');
            Route::get('sub-category', SubCategory::class)->name('sub-category');
            Route::get('brand', Brand::class)->name('brand');
            Route::get('package', Package::class)->name('package');
            Route::get('portfolio', Portfolio::class)->name('portfolio');
            Route::get('product/{id?}', Product::class)->name('product');
            Route::get('product-list', ProductList::class)->name('product-list');
            Route::get('preview-product/{id?}', PreviewProduct::class)->name('preview-product');
            Route::get('sub-sub-category', SubSubCategory::class)->name('sub-sub-category');
            Route::get('product-feature', ProductFeature::class)->name('product-feature');
            Route::get('unit', Unit::class)->name('unit');
            Route::get('color', Color::class)->name('color');
            Route::get('size', Size::class)->name('size');
        });

        Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
            Route::get('companyinfo', CompanyInfo::class)->name('companyinfo');
            Route::get('branch', Branch::class)->name('branch');
            Route::get('currency', Currency::class)->name('currency');
            Route::get('delivery-method', DeliveryMethod::class)->name('delivery-method');
            Route::get('invoice-setting', InvoiceSetting::class)->name('invoice-setting');
            Route::get('payment-method', PaymentMethod::class)->name('payment-method');
            Route::get('coupon-code', CouponCode::class)->name('coupon-code');
            Route::get('vat', Vat::class)->name('vat');
            Route::get('shipping-charge', ShippingCharge::class)->name('shipping-charge');
            Route::get('warehouse', Warehouse::class)->name('warehouse');
            Route::get('slider', Slider::class)->name('slider');
            Route::get('why_we_are_different', WhyWeAreDifferent::class)->name('why_we_are_different');
            Route::get('how_we_will_help', HowWeWillHelp::class)->name('how_we_will_help');
            Route::get('who_trust', WhoTrust::class)->name('who_trust');
            Route::get('affiliation', Affiliation::class)->name('affiliation');
            Route::get('carrer', Carrer::class)->name('carrer');
            Route::get('point-policy', PointPolicy::class)->name('point-policy');
            Route::get('breaking-news', BreakingNews::class)->name('breaking-news');
            Route::get('carrer', Carrer::class)->name('carrer');
            Route::get('about-us-info', AboutUs::class)->name('about-us-info');
            Route::get('pay-now', PayNow::class)->name('pay-now');
            Route::get('language', Language::class)->name('language');
            Route::get('manage-language/{id?}', ManageLanguage::class)->name('manage-language');
        });

        Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
            Route::get('blog', Blog::class)->name('blog');
        });

        Route::group(['prefix' => 'order',  'as' => 'order.'], function () {
            Route::get('order-list', OrderList::class)->name('order-list');
            Route::get('order-processing', ProcessingOrderList::class)->name('order-processing');
            Route::get('order-shipped', ShippedOrderList::class)->name('order-shipped');
            Route::get('order-delivered', DeliveredOrderList::class)->name('order-delivered');
            Route::get('order-returned', ReturnedOrderList::class)->name('order-returned');
            Route::get('order-cancel', CancelOrderList::class)->name('order-cancel');
            Route::get('print-order', PrintOrder::class)->name('print-order');
            Route::get('order-edit/{id?}', OrderEdit::class)->name('order-edit');
        });

        Route::group(['prefix' => 'order',  'as' => 'order.'], function () {
            Route::get('order-invoice/{id}', OrderInvoice::class)->name('order-invoice');
        });

        Route::group(['prefix' => 'contact-info', 'as' => 'contact-info.'], function () {
            Route::get('contact-category', ContactCategory::class)->name('contact-category');
            Route::get('customer', CustomerInfo::class)->name('customer');
            Route::get('supplier', Supplier::class)->name('supplier');
            Route::get('staff', Staff::class)->name('staff');
            Route::get('all-user-list', AllUserList::class)->name('all-user-list');
        });

        Route::group(['prefix' => 'vendor', 'as' => 'vendor.'], function () {
            Route::get('vendor-list', VendorList::class)->name('vendor-list');
            Route::get('vendor-approved-list', VendorApprovedList::class)->name('vendor-approved-list');
            Route::get('vendor-cancel-list', VendorCancelList::class)->name('vendor-cancel-list');
        });

        Route::group(['prefix' => 'data', 'as' => 'data.'], function () {
            Route::get('index', [DatatableController::class, 'index'])->name('index');

            Route::get('user-table', [DatatableController::class, 'UserTable'])->name('user_table');
        });

        Route::group(['prefix' => 'data', 'as' => 'data.'], function () {
            Route::get('category_table', [DatatableController::class, 'CategoryTable'])->name('category_table');
            Route::get('sub_category_table', [DatatableController::class, 'SubCategoryTable'])->name('sub_category_table');
            Route::get('sub_sub_category_table', [DatatableController::class, 'SubSubCategoryTable'])->name('sub_sub_category_table');
            Route::get('product_table', [DatatableController::class, 'ProductTable'])->name('product_table');
            Route::get('branch_table', [DatatableController::class, 'BranchTable'])->name('branch_table');
            Route::get('currency_table', [DatatableController::class, 'CurrencyTable'])->name('currency_table');
            Route::get('delivery_method_table', [DatatableController::class, 'DeliveryMethodTable'])->name('delivery_method_table');
            Route::get('warehouse_table', [DatatableController::class, 'WarehouseTable'])->name('warehouse_table');
            Route::get('unit_table', [DatatableController::class, 'UnitTable'])->name('unit_table');
            Route::get('feature_product_table', [DatatableController::class, 'FeatureProductTable'])->name('feature_product_table');
            Route::get('slider_table', [DatatableController::class, 'SliderTable'])->name('slider_table');
            Route::get('how_we_will_help_table', [DatatableController::class, 'HowWeWillHelpTable'])->name('how_we_will_help_table');
            Route::get('who_trust_table', [DatatableController::class, 'WhoTrustTable'])->name('who_trust_table');
            Route::get('affiliation_table', [DatatableController::class, 'AffiliationTable'])->name('affiliation_table');
            Route::get('brand_table', [DatatableController::class, 'BrandTable'])->name('brand_table');
            Route::get('invoiceSetting_table', [DatatableController::class, 'InvoiceSettingTable'])->name('invoiceSetting_table');
            Route::get('vat_table', [DatatableController::class, 'VatTable'])->name('vat_table');
            Route::get('shipping_charge', [DatatableController::class, 'ShippingChargeTable'])->name('shipping_charge');
            Route::get('coupon_table', [DatatableController::class, 'CouponTable'])->name('coupon_table');
            Route::get('paymentMethod_table', [DatatableController::class, 'paymentMethodTable'])->name('paymentMethod_table');
            Route::get('invoiceSave', [DatatableController::class, 'InvoiceTable'])->name('invoiceSave');
            Route::get('customer_table', [DatatableController::class, 'CustomerTable'])->name('customer_table');
            Route::get('supplier_table', [DatatableController::class, 'SupplierTable'])->name('supplier_table');
            Route::get('staff_table', [DatatableController::class, 'StaffTable'])->name('staff_table');
            Route::get('contact_category_table', [DatatableController::class, 'ContactCategoryTable'])->name('contact_category_table');
            Route::get('purchase_list', [DatatableController::class, 'PurchaseListTable'])->name('purchase_list');
            Route::get('sale_list', [DatatableController::class, 'SaleListTable'])->name('sale_list');
            Route::get('news_list', [DatatableController::class, 'NewsListTable'])->name('news_list');
            Route::get('language_list', [DatatableController::class, 'LanguageListTable'])->name('language_list');
            Route::get('manage_language_list', [DatatableController::class, 'LanguageListTable'])->name('manage_language_list');
            Route::get('vendor_table', [DatatableController::class, 'VendorListTable'])->name('vendor_table');
            Route::get('vendor_approved_table', [DatatableController::class, 'VendorApprovedListTable'])->name('vendor_approved_table');
            Route::get('vendor_cancel_table', [DatatableController::class, 'VendorCancelListTable'])->name('vendor_cancel_table');
            Route::get('all_user_table', [DatatableController::class, 'AllUserList'])->name('all_user_table');
            Route::get('offer_table', [DatatableController::class, 'OfferList'])->name('offer_table');
            Route::get('package_table', [DatatableController::class, 'PackageTable'])->name('package_table');
            Route::get('portfolio_table', [DatatableController::class, 'PortfolioTable'])->name('portfolio_table');
            Route::get('carrer_table', [DatatableController::class, 'CarrerTable'])->name('carrer_table');
            Route::get('pay_now_table', [DatatableController::class, 'PayNowTable'])->name('pay_now_table');
            Route::get('blog_table', [DatatableController::class, 'BlogTable'])->name('blog_table');
        });
    });
});
