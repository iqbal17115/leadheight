<?php

declare(strict_types=1);

namespace App\Http\Controllers\FrontEnt;
use App\Http\Controllers\Controller;
use App\Models\Backend\ContactInfo\Contact;
use App\Models\Backend\ContactUs\Message;
use App\Models\Backend\Offer\Offer;
use App\Models\Backend\ProductInfo\ProductFeature;
use App\Models\Backend\ProductInfo\Brand;
use App\Models\Backend\ProductInfo\Category;
use App\Models\Backend\ProductInfo\SubCategory;
use App\Models\Backend\ProductInfo\SubSubCategory;
use App\Models\Backend\ProductInfo\Product;
use App\Models\Backend\Setting\ShippingCharge;
use App\Models\Backend\Setting\HowWeWillHelp;
use App\Models\Backend\Setting\WhoTrust;
use App\Models\Backend\Setting\PayNow;
use App\Models\Backend\Setting\Carrer;
use App\Models\Backend\Blog\Blog;
use App\Models\FrontEnd\AddToCard;
use App\Models\FrontEnd\Order;
use App\Models\FrontEnd\OrderDetail;
use App\Models\FrontEnd\Vendor;
use App\Models\Setting\Slider;
use App\Models\Notification;
use App\Models\User;
use App\Services\AddToCardService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public $OrdetCode;
    /**
     * @var Product
     */
    private $product;
    /**
     * @var AddToCard
     */
    private $addToCard;
    /**
     * @var AddToCardService
     */
    private $addToCardService;

    /**
     * HomeController constructor.
     */
    public function __construct(Product $product, AddToCard $addToCard, AddToCardService $addToCardService)
    {
        $this->product = $product;
        $this->addToCard = $addToCard;
        $this->addToCardService = $addToCardService;
    }
    public function HomePage(){
        return redirect()->route('home');
    }
    public function TermsAndCondition(){
        return view('ecommerce.terms-and-condition');
    }
    public function PrivacyPolicy()
    {
        return view('ecommerce.privacy-policy');
    }
    public function ReturnPolicy()
    {
        return view('ecommerce.return_policy');
    }
    public function About()
    {
        return view('ecommerce.about');
    }

    public function PayNow()
    {
         $PayNow = PayNow::where('is_qr_image', "1")->get();
         $PayNowwithGeneral = PayNow::where('is_qr_image', "0")->get();

        return view('ecommerce.pay-now',[
            // $PayNow = PayNow::where('is_qr_image', "1")->get()->toarray(),
            'PayNows' => $PayNow,
            'PayNowwithGeneral' => $PayNowwithGeneral,
        ]);
    }


    public function ViewCarrer()
    {
        $getjobcerculers = Carrer::get();
        return view('ecommerce.carrer',[
            'getjobcerculerss' => $getjobcerculers,
        ]);
    }

    public function ViewBlog()
    {
        $allBlog = Blog::get();
        return view('ecommerce.blog',[
            'allblogs' => $allBlog
        ]);
    }

    public function Contact()
    {
        return view('ecommerce.contact');
    }
    public function Offer()
    {
        return view('frontend.offer');
    }
    public function allCategoryWise()
    {
        return view('frontend.all-category-wise-product');
    }
    public function CreateSeller(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'business_name' => 'required',
            'trade_license' => 'required',
            'trn_number' => 'required',
            'business_location' => 'required',
            'district_id' => 'required',
            'email' => 'required|unique:vendors',
            'mobile' => 'required|unique:vendors',
            'password' => 'required|min:6',
            'account_type' => 'required',
            // 'profile_photo_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        DB::transaction(function () use ($request) {
            // User Create
            $UserQuery = new User();
            $UserQuery->name = $request->name;
            $UserQuery->mobile = $request->mobile;
            $UserQuery->email = $request->email;
            $UserQuery->type = $request->account_type;
            $UserQuery->branch_id = 1;
            $UserQuery->upazila_id = $request->district_id;
            $UserQuery->password = Hash::make($request->password);
            $UserQuery->save();

            // Vendor Create
            $Query = new Vendor();
            $Query->user_id = $UserQuery->id;
            $Query->name = $request->name;
            $Query->business_name = $request->business_name;
            $Query->trade_license = $request->trade_license;
            $Query->trn_number = $request->trn_number;
            $Query->email = $request->email;
            $Query->business_location = $request->business_location;
            $Query->district_id = $request->district_id;
            $Query->mobile = $request->mobile;
            $Query->account_type = $request->account_type;
            $Query->save();

            //  Create Contact
            $ContactQuery = new Contact();
            $ContactQuery->type = 'Customer';
            $ContactQuery->user_id = $UserQuery->id;
            $ContactQuery->first_name = $request->name;
            $ContactQuery->mobile = $request->mobile;
            $ContactQuery->email = $request->email;
            $ContactQuery->business_name = $request->business_name;
            $ContactQuery->district_id = $request->district_id;
            $ContactQuery->branch_id = 1;
            $ContactQuery->created_by = 1;
            $ContactQuery->save();
        });

        return redirect()->back();
    }

    public function SellerCreateForm()
    {
        return view('frontend.seller-create');
    }

    public function OrderDetail($id = null)
    {
        if (Auth::user()) {
            return view('ecommerce.order-details', [
                'orderDetails' => OrderDetail::whereOrderId($id)->get(),
                'order' => Order::whereId($id)->first(),
            ]);
        } else {
            return view('frontend.sign-in');
        }
    }

    public function SearchUpazila(Request $request)
    {
        $data['products'] = $this->addToCardService::cardTotalProductAndAmount();
        // $upazillas = DB::table('upazilas')->where('district_id', '=', 1)->get();

        return view('frontend.check-out', [
            'data' => $data, 'shipping_charge' => ShippingCharge::whereIsActive(1)->get(),
            // 'zillas' => DB::table('districts')->get(), 'upazillas' => $upazillas
        ]);
    }

    public function EditShippingAddress(Request $request)
    {
        $QueryUpdate = Contact::whereUserId(Auth::user()->id)->first();
        $QueryUpdate->shipping_address = $request->shipping_address;
        $QueryUpdate->district_id = $request->district_id;
        $QueryUpdate->mobile = $request->mobile;
        $QueryUpdate->business_name = $request->business_name;
        $QueryUpdate->first_name = $request->first_name;
        $QueryUpdate->created_by = Auth::user()->id;
        $QueryUpdate->save();

        return back();
    }

    public function CustomerLogin()
    {
        return view('ecommerce.login');
    }

    public function ChangeProfilePhoto(Request $request)
    {
        $this->validate($request, [
            'profile_photo_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->profile_photo_path->extension();

        $request->profile_photo_path->move(public_path('images'), $imageName);

        $User = User::find(Auth::user()->id);

        $User->profile_photo_path = $imageName;
        $User->save();

        return redirect()->back();
    }

    public function Sendmessage(Request $request)
    {
        $Query = new message();
        $Query->name = $request->name;
        $Query->mobile = $request->mobile;
        $Query->email = $request->email;
        $Query->address = $request->address;
        $Query->save();

        return redirect()->back();
    }

    public function ChangePassword(Request $request)
    {
        // dd($request->oldpassword);

        $this->validate($request, [
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'password_confirmation' => 'required_with:oldpassword|same:newpassword|min:6',
        ]);

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->oldpassword, $hashedPassword)) {
            if (!Hash::check($request->newpassword, $hashedPassword)) {
                $users = User::find(Auth::user()->id);
                $users->password = bcrypt($request->newpassword);
                User::where('id', Auth::user()->id)->update(['password' => $users->password]);

                //   session()->flash('message','password updated successfully');
                //   return redirect()->back();
                return redirect()->route('my-account');
            }
        }
    }

    public function MyAccount()
    {
        // dd(Contact::whereCreatedBy(Auth::user()->id)->get());
        if (Auth::user()) {
            return view('ecommerce.my-account', [
                'contacts' => Contact::whereUserId(Auth::user()->id)->get(),
                'contact' => Contact::whereUserId(Auth::user()->id)->first(),
                // 'Districts' => District::orderBy('name', 'asc')->get(),
            ]);
        } else {
            return view('ecommerce.login');
        }
    }

    public function index(Request $request)
    {
        $data['html'] = view('frontend.header-card-popup')->render();
        $data['products'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereIsActive(1)->limit(10)->get()->toArray();

        $featues = ProductFeature::orderBy('position', 'ASC')->get();
        foreach($featues as $feature){
            $featured = str_replace(' ', '_', $feature->name);
            $data[$featured] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereProductFeatureId($feature->id)->whereIsActive(1)->limit(24)->orderBy('id', 'desc')->get()->toArray();
        }
        // $data['products_desc'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereFeatured('New Product')->whereIsActive(1)->limit(24)->orderBy('id', 'desc')->get()->toArray();
        // $data['best_sellings'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereFeatured('Best Selling Product')->whereIsActive(1)->limit(24)->orderBy('id', 'desc')->get()->toArray();
        // $data['fresh_vegetables'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereFeatured('Fresh Vegetables')->whereIsActive(1)->limit(24)->orderBy('id', 'desc')->get()->toArray();
        // $data['fresh_fruits'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereFeatured('Fresh Fruits')->whereIsActive(1)->limit(24)->orderBy('id', 'desc')->get()->toArray();
        // $data['meat_and_sea_food'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereFeatured('Meat & Seafood')->whereIsActive(1)->limit(24)->orderBy('id', 'desc')->get()->toArray();
        $topFourCategories = Category::take(4)->get();
        $topCategories = Category::skip(4)->take(200)->get();
        $sliderImages = Slider::orderBy('position')->whereIsActive(1)->get();
        $sliderImageDesc = Slider::orderBy('id', 'desc')->whereIsActive(1)->limit(2)->get();
        $how_we_will_help = HowWeWillHelp::get();
        $who_trust = WhoTrust::get();
        return view('ecommerce.home', [
            'data' => $data,
            'topFourCategories' => $topFourCategories,
            'topCategories' => $topCategories,
            'sliderImages' => $sliderImages,
            'sliderImageDesc' => $sliderImageDesc,
            'how_we_will_helps' => $how_we_will_help,
            'who_trusts' => $who_trust,
            'features' => ProductFeature::orderBy('position', 'ASC')->get(),
            'offers' => Offer::whereIsActive(1)->orderBy('id', 'DESC')->get()
        ]);
    }

    public function orderComplete($id = null)
    {
        // dd($id);
        $order = $id;
        //  dd($order);
        return view('frontend.order-completed', compact('order'));
    }

    public function confirmOrder(Request $request)
    {
        $request->validate([
            'shipping_address' => 'required',
            'mobile' => 'required',
            'division_id' => 'required'
        ]);

        DB::transaction(function () use ($request) {
            $sessionId = Session::getId();
            if (AddToCard::wheresessionId($sessionId)->sum('total_price') > 0) {
                //    Add Customer
                $Query = Contact::whereMobile($request->mobile)->firstOrNew();
                $Query->type = 'Customer';
                // $Query->user_id = Auth::user()->id;
                $Query->first_name = $request->fName;
                // $Query->last_name = $request->lName;
                $Query->shipping_address = $request->shipping_address;
                // $Query->business_name = $request->business_name;
                $Query->division_id = $request->division_id;
                // $Query->district_id = $request->district_id;
                // $Query->upazila_id = $request->upazila_id;
                $Query->mobile = $request->mobile;
                $Query->is_active = 1;
                $Query->branch_id = 1;
                $Query->created_by = 1;
                $Query->save();

                //    Add Order
                $Order = new Order();
                $Order->code = 'OC' . floor(time() - 999999999);
                $Order->contact_id = $Query->id;
                $Order->order_date = Carbon::now();
                $AddToCart = AddToCard::wheresessionId($sessionId)->get();
                $Order->total_amount = $AddToCart->sum('total_price');
                $Order->payable_amount = ($AddToCart->sum('total_price'));
                $Order->status = 'processing';
                $Order->note = $request->note;
                $Order->is_active = 1;
                $Order->save();

                // Add To Order Details
                foreach ($AddToCart as $OrderProductDetail) {
                    $OrderProductDetails = json_decode($OrderProductDetail->data);
                    $ProductQuery = Product::find($OrderProductDetails->product_id);

                    $OrderDetails = new OrderDetail();
                    if ($ProductQuery) {
                        $OrderDetails->vendor_id = $ProductQuery->vendor_id;
                    }
                    $OrderDetails->order_id = $Order->id;
                    $OrderDetails->product_id = $OrderProductDetails->product_id;
                    $OrderDetails->unit_price = $OrderProductDetail->unit_price;
                    $OrderDetails->quantity = $OrderProductDetail->quantity;
                    $OrderDetails->is_active = 1;
                    $OrderDetails->save();
                }

                //   Delete Add To Cart
                AddToCard::wheresessionId($sessionId)->delete();
                // $this->orderComplete($Order->id);
                $this->OrdetCode = $Order->code;

                $Notification = new Notification();
                $Notification->order_id = $Order->id;
                $Notification->contact_id = $Query->id;
                $Notification->save();
            }
        });
        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Successfully',
        //     'redirect_url' => route('order-completed'),
        // ]);
        return View('ecommerce.order-complete', [
            'orderCode' => $this->OrdetCode,
        ]);
        // return redirect(route('order-completed'));
        //    return redirect()->route('/order-completed');
    }

    public function FeatureWise($feature){
        $data['products'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereFeatured($feature)->whereIsActive(1)->paginate(20);
        $brands = Brand::get();

        return view('ecommerce.shop', [
            'data' => $data,
            'brands' => $brands,
        ]);
    }
    public function searchByBrand($brandId = null)
    {
        $data['products'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereBrandId($brandId)->whereIsActive(1)->paginate(20);
        $newProducts = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereIsActive(1)->orderBy('id', 'desc')->take(3)->get();
        $brands = Brand::get();
        return view('ecommerce.shop', [
            'data' => $data,
            'newProducts' => $newProducts,
            'brands' => $brands,
        ]);
    }

    public function searchBySubSubCategory($subSubCatId = null)
    {
        $data['products'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereSubSubCategoryId($subSubCatId)->whereIsActive(1)->paginate(20);
        $newProducts = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereIsActive(1)->orderBy('id', 'desc')->take(3)->get();
        $brands = Brand::get();


        return view('ecommerce.shop', [
            'data' => $data,
            'newProducts' => $newProducts,
            'brands' => $brands,
        ]);
    }

    public function searchBySubCategory($subCatId = null)
    {
        $data['products'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereSubCategoryId($subCatId)->whereIsActive(1)->paginate(20);
        $newProducts = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereIsActive(1)->orderBy('id', 'desc')->take(3)->get();
        $brands = Brand::orderBy('id', 'DESC')->get();

        return view('ecommerce.shop', [
            'data' => $data,
            'newProducts' => $newProducts,
            'brands' => $brands,
        ]);
    }

    public function searchByCategory($catId = null)
    {
        if ($catId) {
            $data['products'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereCategoryId($catId)->whereIsActive(1)->paginate(50);
        } else {
            $data['products'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereIsActive(1)->paginate(50);
        }
        $newProducts = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereIsActive(1)->orderBy('id', 'desc')->take(3)->get();
        $brands = Brand::get();

        return view('ecommerce.shop', [
            'data' => $data,
            'newProducts' => $newProducts,
            'brands' => $brands,
        ]);
    }

    public function SubSubCategory($id=null)
    {
        return view('ecommerce.sub-sub-category',[
            'subsubcategories' => SubSubCategory::whereSubCategoryId($id)->orderBy('id','DESC')->get()
        ]);
    }


    public function SubCategory($id=null)
    {
        return view('ecommerce.sub-category',[
            'subcategories' => SubCategory::whereCategoryId($id)->orderBy('id','DESC')->get()
        ]);
    }

    public function Category()
    {
        return view('ecommerce.category');
    }




    public function addToCardStore(Request $request): array
    {
        // dd($request->get('product_quantity'));
        $quantity = $request->get('product_quantity') ? $request->get('product_quantity') : 1;

        return $this->addToCardService::addCardStore($request->get('product_id'), $quantity);
    }

    public function cart()
    {
        $sessionId = Session::getId();
        $SessionProducts = AddToCard::wheresessionId($sessionId)->get();
        foreach ($SessionProducts as $SessionProduct) {
            //    dd($SessionProduct->product_id);
            $Product = Product::find($SessionProduct->product_id);
            if ($Product->special_price && $Product->special_price > 0) {
                if ($Product->special_price != $SessionProduct->unit_price) {
                    $Updadate = AddToCard::find($SessionProduct->id);
                    $Updadate->unit_price = $Product->special_price;
                    $Updadate->total_price = $Updadate->quantity * $Product->special_price;
                    $Updadate->save();
                }
            } else {
                if ($Product->regular_price != $SessionProduct->unit_price) {
                    $Updadate = AddToCard::find($SessionProduct->id);
                    $Updadate->unit_price = $Product->regular_price;
                    $Updadate->total_price = $Updadate->quantity * $Product->regular_price;
                    $Updadate->save();
                }
            }
        }
        return view('frontend.cart');
    }

    public function cartProductQuantityUpdate(Request $request): array
    {
        $quantity = $request->get('quantity');
        /*if ($request->get('state') == 'decrease') {
            $quantity = ($quantity * (-1));
        }

        dd($quantity);*/

        return $this->addToCardService::addCardStore($request->get('product_id'), $quantity);
    }

    public function cartProductDelete(Request $request)
    {
        return $this->addToCardService::productDelete($request->get('product_id'));
    }

    public function checkOut()
    {
        $data['products'] = $this->addToCardService::cardTotalProductAndAmount();
        return view('frontend.check-out', [
            'data' => $data, 'shipping_charge' => ShippingCharge::whereIsActive(1)->get(),
            //  'Districts' => District::orderBy('name', 'asc')->get(),
            // 'Upazilas' => Upazila::all()
        ]);
    }

    public function messages(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        DB::transaction(function () use ($request) {
            $Query = new Message();
            $Query->name = $request->name;
            $Query->email = $request->email;
            $Query->subject = $request->subject;
            $Query->message = $request->message;
            $Query->save();
        });
        
        return redirect()->back()->with('success', 'Message has been sent Successfully');
    }

    public function productDetails($id = null)
    {
        $ProductDetail = Product::whereId($id)->first();
        $data['products'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->where('id', '!=', $id)->whereCategoryId($ProductDetail->category_id)->whereIsActive(1)->get()->toArray();
        return view('ecommerce.product-details', [
            'productDetails' => $ProductDetail,
            'data' => $data,
        ]);
    }

    public function serviceDetails($id = null)
    {
        // $ProductDetail = Product::whereId($id)->first();
        // $data['products'] = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->where('id', '!=', $id)->whereCategoryId($ProductDetail->category_id)->whereIsActive(1)->get()->toArray();
        return view('ecommerce.service-details', [
            // 'productDetails' => $ProductDetail,
            // 'data' => $data,
        ]);
    }

    public function productSearch(Request $request)
    {
        $query = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereIsActive(1);
        $search_type = null;
        $search_value = null;

        if ($request->get('search_product_name')) {
            $query->where('name', 'like', '%' . $request->get('search_product_name') . '%')->orWhere('key_word', 'like', '%' . $request->get('search_product_name') . '%');
            // $query->where('key_word', 'like', '%' . $request->get('search_product_name') . '%');
            $search_type = 'search_product_name';
            $search_value = $request->get('search_product_name');
        }
        if ($request->get('search_product_category')) {
            $query->where('sub_sub_category_id', $request->get('search_product_category'));
        }
        $data['products'] = $query->whereIsActive(1)->paginate(50);
        $newProducts = $this->product->with(['ProductImageFirst', 'ProductImageLast'])->whereFeatured('New Product')->whereIsActive(1)->orderBy('id', 'desc')->take(3)->get();
        $brands = Brand::get();

        return view('ecommerce.shop', [
            'data' => $data,
            'newProducts' => $newProducts,
            'brands' => $brands,
            'search_type' => $search_type,
            'search_value' => $search_value,
        ]);
    }
}
