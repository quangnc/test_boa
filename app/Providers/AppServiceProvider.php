<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\models\Setting;
use App\Models\Language;
use App\Models\Contact;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	// Share setting to all view
	    View::composer('*', function ($view) {
		    $settings = Setting::all();
		    $setting  = [
		    	"meta_title" => '',
			    "meta_keyword" => '',
			    "meta_description" => '',
		    	"logo" => "",
			    "phone" => "",
			    "email" => "",
			    "facebook" => "",
			    "twitter" => "",
			    "google" => "",
			    "sort_link" => "",
			    "copyright" => "",
			    "our_awards" => "",
			    "helper_links" => "",
			    "open_time" => "",
			    "address" => "",
			    "contact_note" => "",
			    "admin_language" => 1,
			    "logo_footer" => "",
			    "lat" => "20.997541",
                "lng" => "105.780548",
                "susses" => "",
                "error" => ""
		    ];
		    foreach ( $settings as $s ) {
			    $setting[ $s->code ] = $s->serialized ? json_decode( $s->value ) : $s->value;
		    }
		    $view->with('setting', $setting);
	    });

	    // Share languages to all view
	    View::composer('*', function ($view) {
            $languages = Language::all();
		    $view->with('languages', $languages);
        });
        
        View::composer('*', function ($view) {
            $contacts = Contact::where( 'read', 0 )->take(3)->get();
		    $view->with('contacts', $contacts);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\Write\HotelRepositoryInterface',
            'App\Repositories\Write\HotelRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\HotelRepositoryInterface',
            'App\Repositories\Read\HotelRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Write\FacilityGroupRepositoryInterface',
            'App\Repositories\Write\FacilityGroupRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\FacilityGroupRepositoryInterface',
            'App\Repositories\Read\FacilityGroupRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Write\PropertyFacilityRepositoryInterface',
            'App\Repositories\Write\PropertyFacilityRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\PropertyFacilityRepositoryInterface',
            'App\Repositories\Read\PropertyFacilityRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Write\RoomBedTypeRepositoryInterface',
            'App\Repositories\Write\RoomBedTypeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\RoomBedTypeRepositoryInterface',
            'App\Repositories\Read\RoomBedTypeRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Write\RoomTypeRepositoryInterface',
            'App\Repositories\Write\RoomTypeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\RoomTypeRepositoryInterface',
            'App\Repositories\Read\RoomTypeRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Write\RoomRepositoryInterface',
            'App\Repositories\Write\RoomRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\RoomRepositoryInterface',
            'App\Repositories\Read\RoomRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Write\RoomFacilityGroupRepositoryInterface',
            'App\Repositories\Write\RoomFacilityGroupRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\RoomFacilityGroupRepositoryInterface',
            'App\Repositories\Read\RoomFacilityGroupRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Write\RoomFacilityRepositoryInterface',
            'App\Repositories\Write\RoomFacilityRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\RoomFacilityRepositoryInterface',
            'App\Repositories\Read\RoomFacilityRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Write\BlogCategoryRepositoryInterface',
            'App\Repositories\Write\BlogCategoryRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\BlogCategoryRepositoryInterface',
            'App\Repositories\Read\BlogCategoryRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Write\BlogPostRepositoryInterface',
            'App\Repositories\Write\BlogPostRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\BlogPostRepositoryInterface',
            'App\Repositories\Read\BlogPostRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Write\ContactRepositoryInterface',
            'App\Repositories\Write\ContactRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Read\ContactRepositoryInterface',
            'App\Repositories\Read\ContactRepository'
        );
        
    }
}
