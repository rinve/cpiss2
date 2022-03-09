<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HigherStudiesController;
use App\Http\Controllers\HSCController;
use App\Http\Controllers\SSCController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PersonalCounselingController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CounselingController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\HomeCounselingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
Route::group(['middleware' => 'prevent-back-history'], function () {
//Website routes
//Home route
    Route::get('/', function () {
        $news = DB::table('news')->get();
        $socialMedia = DB::table('social_media')->first();
        $ssc = DB::table('s_s_c_s')->first();
        $hsc = DB::table('h_s_c_s')->first();
        $higherStudies = DB::table('higher_studies')->first();
        $sliders = DB::table('sliders')->get();
        $slider = DB::table('sliders')->first();
        $home_counselings = DB::table('home_counselings')->first();
        $motivations = DB::table('motivations')->first();
        return view('website.index', compact('news','socialMedia', 'ssc', 'hsc', 'higherStudies', 'motivations', 'home_counselings', 'sliders', 'slider'));
    });
//Counseling route
    Route::get('counseling', [WebsiteController::class, 'counseling'])->name('counseling');
    Route::post('store/counseling/question', [WebsiteController::class, 'storeCounselingQuestion'])->name('store.counseling.question');
//SSC route
    Route::get('ssc/sciences', [WebsiteController::class, 'sscScience'])->name('ssc.sciences');
    Route::get('ssc/commerces', [WebsiteController::class, 'sscCommerce'])->name('ssc.commerces');
    Route::get('ssc/art', [WebsiteController::class, 'sscArts'])->name('ssc.art');
//HSC route
    Route::get('hsc/sciences', [WebsiteController::class, 'hscScience'])->name('hsc.sciences');
    Route::get('hsc/commerces', [WebsiteController::class, 'hscCommerce'])->name('hsc.commerces');
    Route::get('hsc/art', [WebsiteController::class, 'hscArts'])->name('hsc.art');
//Higher Studies route
    Route::get('/higher/studies/sciences', [WebsiteController::class, 'HSScience']);
    Route::get('/higher/studies/commerces', [WebsiteController::class, 'HSCommerce']);
    Route::get('/higher/studies/art', [WebsiteController::class, 'HSArts']);
//Blog route
    Route::get('blog', [WebsiteController::class, 'blog'])->name('blog');
//Personal counseling route
    Route::get('personal/counseling', [WebsiteController::class, 'personalCounseling'])->name('personal.counseling');
    Route::post('store/personal/counseling/form', [WebsiteController::class, 'storePersonalCounselingForm'])->name('store.personal.counseling.form');
//Contact us route
    Route::get('contact/us', [WebsiteController::class, 'contact'])->name('contact.us');
    Route::post('store/contact/form', [WebsiteController::class, 'storeContactForm'])->name('store.contact.form');

//Dashboard routes
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/logout', [Controller::class, 'logout'])->name('user.logout');

//Email routes
    Route::get('/answer-email/{id}', [MailController::class, 'answerEmail']);
    Route::get('/client-application-email/{id}', [MailController::class, 'clientApplicationEmail']);
    Route::get('/counseling-answer-email/{id}', [MailController::class, 'counselingEmail']);
//Home routes
//Slider route
    Route::get('slider', [SliderController::class, 'slider'])->name('slider');
    Route::get('add/slider', [SliderController::class, 'addSlider'])->name('add.slider');
    Route::post('store/slider', [SliderController::class, 'storeSlider'])->name('store.slider');
    Route::get('/slider/delete/{id}', [SliderController::class, 'delete']);
//Motivation route
    Route::get('motivation', [MotivationController::class, 'motivation'])->name('motivation');
    Route::get('add/motivation', [MotivationController::class, 'addMotivation'])->name('add.motivation');
    Route::post('store/motivation', [MotivationController::class, 'storeMotivation'])->name('store.motivation');
    Route::get('/motivation/edit/{id}', [MotivationController::class, 'editMotivation']);
    Route::post('/motivation/update/{id}', [MotivationController::class, 'updateMotivation']);
    Route::get('/motivation/delete/{id}', [MotivationController::class, 'delete']);
//Home Counseling route
    Route::get('home/counseling', [HomeCounselingController::class, 'homeCounseling'])->name('home.counseling');
    Route::get('add/home/counseling', [HomeCounselingController::class, 'addHomeCounseling'])->name('add.home.counseling');
    Route::post('store/home/counseling', [HomeCounselingController::class, 'storeHomeCounseling'])->name('store.home.counseling');
    Route::get('/home/counseling/edit/{id}', [HomeCounselingController::class, 'editHomeCounseling']);
    Route::post('/home/counseling/update/{id}', [HomeCounselingController::class, 'updateHomeCounseling']);
    Route::get('/home/counseling/delete/{id}', [HomeCounselingController::class, 'delete']);

//Counseling Route
    Route::get('counselings', [CounselingController::class, 'counseling'])->name('counselings');
    Route::get('/counseling/answer/give/{id}', [CounselingController::class, 'giveAnswer']);
    Route::get('/counseling/answer/edit/{id}', [CounselingController::class, 'editAnswer']);
    Route::post('/counseling/answer/store/{id}', [CounselingController::class, 'storeAnswer']);
    Route::post('/counseling/answer/update/{id}', [CounselingController::class, 'updateAnswer']);
    Route::get('/counseling/delete/{id}', [CounselingController::class, 'delete']);

//SSC route
    Route::get('/ssc/science', [SSCController::class, 'sscScience'])->name('ssc.science');
    Route::get('/ssc/commerce', [SSCController::class, 'sscCommerce'])->name('ssc.commerce');
    Route::get('ssc/arts', [SSCController::class, 'sscArts'])->name('ssc.arts');
    Route::get('/ssc/add/info', [SSCController::class, 'addInfo'])->name('ssc.add.info');
    Route::post('/ssc/store/info', [SSCController::class, 'storeInfo'])->name('ssc.store.info');
    Route::get('/ssc/info/edit/{id}', [SSCController::class, 'editInfo']);
    Route::post('/ssc/info/update/{id}', [SSCController::class, 'updateInfo']);
    Route::get('/ssc/info/delete/{id}', [SSCController::class, 'deleteInfo']);

//HSC route
    Route::get('/hsc/science', [HSCController::class, 'hscScience'])->name('hsc.science');
    Route::get('/hsc/commerce', [HSCController::class, 'hscCommerce'])->name('hsc.commerce');
    Route::get('hsc/arts', [HSCController::class, 'hscArts'])->name('hsc.arts');
    Route::get('/hsc/add/info', [HSCController::class, 'addInfo'])->name('hsc.add.info');
    Route::post('/hsc/store/info', [HSCController::class, 'storeInfo'])->name('hsc.store.info');
    Route::get('/hsc/info/edit/{id}', [HSCController::class, 'editInfo']);
    Route::post('/hsc/info/update/{id}', [HSCController::class, 'updateInfo']);
    Route::get('/hsc/info/delete/{id}', [HSCController::class, 'deleteInfo']);

//Higher studies route
    Route::get('/higher/studies/science', [HigherStudiesController::class, 'hsScience'])->name('hs.science');
    Route::get('/higher/studies/commerce', [HigherStudiesController::class, 'hsCommerce'])->name('hs.commerce');
    Route::get('/higher/studies/arts', [HigherStudiesController::class, 'hsArts'])->name('hs.arts');
    Route::get('/higher/studies/add/info', [HigherStudiesController::class, 'addInfo'])->name('hs.add.info');
    Route::post('/higher/studies/store/info', [HigherStudiesController::class, 'storeInfo'])->name('hs.store.info');
    Route::get('/higher/studies/info/edit/{id}', [HigherStudiesController::class, 'editInfo']);
    Route::post('/higher/studies/info/update/{id}', [HigherStudiesController::class, 'updateInfo']);
    Route::get('/higher/studies/info/delete/{id}', [HigherStudiesController::class, 'deleteInfo']);

//Blog route
    Route::get('blog/admin', [BlogController::class, 'blogAdmin'])->name('blog.admin');
    Route::get('add/blog/admin', [BlogController::class, 'addBlog'])->name('add.blog');
    Route::post('store/blog/admin', [BlogController::class, 'storeBlog'])->name('store.blog');
    Route::get('/blog/edit/{id}', [BlogController::class, 'editBlog']);
    Route::post('/blog/update/{id}', [BlogController::class, 'updateBlog']);
    Route::get('/blog/delete/{id}', [BlogController::class, 'deleteBlog']);

//Personal Counseling route
//Time
    Route::get('/time', [PersonalCounselingController::class, 'time'])->name('time');
    Route::get('add/time', [PersonalCounselingController::class, 'addTime'])->name('add.time');
    Route::post('store/time', [PersonalCounselingController::class, 'storeTime'])->name('store.time');
    Route::get('/time/edit/{id}', [PersonalCounselingController::class, 'editTime']);
    Route::post('/time/update/{id}', [PersonalCounselingController::class, 'updateTime']);
    Route::get('/time/delete/{id}', [PersonalCounselingController::class, 'delete']);
//Client Application
    Route::get('/client/application', [PersonalCounselingController::class, 'clientApplication'])->name('client.application');
    Route::get('/client/application/answer/give/{id}', [PersonalCounselingController::class, 'giveAnswer']);
    Route::get('/client/application/answer/edit/{id}', [PersonalCounselingController::class, 'editAnswer']);
    Route::post('/client/application/answer/store/{id}', [PersonalCounselingController::class, 'storeAnswer']);
    Route::post('/client/application/answer/update/{id}', [PersonalCounselingController::class, 'updateAnswer']);
    Route::get('/client/application/delete/{id}', [PersonalCounselingController::class, 'deleteApplication']);

//Contact Route
    Route::get('contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/contact/answer/give/{id}', [ContactController::class, 'giveAnswer']);
    Route::get('/contact/answer/edit/{id}', [ContactController::class, 'editAnswer']);
    Route::post('/contact/answer/store/{id}', [ContactController::class, 'storeAnswer']);
    Route::post('/contact/answer/update/{id}', [ContactController::class, 'updateAnswer']);
    Route::get('/contact/delete/{id}', [ContactController::class, 'delete']);

//Additional routes
//Address route
    Route::get('address', [AddressController::class, 'address'])->name('address');
    Route::get('add/address', [AddressController::class, 'addAddress'])->name('add.address');
    Route::post('store/address', [AddressController::class, 'storeAddress'])->name('store.address');
    Route::get('/address/edit/{id}', [AddressController::class, 'editAddress']);
    Route::post('/address/update/{id}', [AddressController::class, 'updateAddress']);
    Route::get('/address/delete/{id}', [AddressController::class, 'delete']);
//News route
    Route::get('news', [NewsController::class, 'news'])->name('news');
    Route::get('add/news', [NewsController::class, 'addNews'])->name('add.news');
    Route::post('store/news', [NewsController::class, 'storeNews'])->name('store.news');
    Route::get('/news/edit/{id}', [NewsController::class, 'editNews']);
    Route::post('/news/update/{id}', [NewsController::class, 'updateNews']);
    Route::get('/news/delete/{id}', [NewsController::class, 'delete']);
//Social Media route
    Route::get('social/media', [SocialMediaController::class, 'socialMedia'])->name('social.media');
    Route::get('add/social/media', [SocialMediaController::class, 'addSocialMedia'])->name('add.social.media');
    Route::post('store/social/media', [SocialMediaController::class, 'storeSocialMedia'])->name('store.social.media');
    Route::get('/social/media/edit/{id}', [SocialMediaController::class, 'editSocialMedia']);
    Route::post('/social/media/update/{id}', [SocialMediaController::class, 'updateSocialMedia']);
    Route::get('/social/media/delete/{id}', [SocialMediaController::class, 'delete']);


});
