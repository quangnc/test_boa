<?php

namespace App\Repositories\Read;

use App\Repositories\Contracts\Read\CRUDInterface;
use App\Models\Book;
use Carbon\Carbon;
class BookRepository implements CRUDInterface 
{
    use ConfigSetting;

    public function index() 
    {
        $books   = Book::orderBy('created_at', 'desc')->paginate(2);
		return $books;
    }

    public function show( $id )
    {
        // booking
        $booking = Book::findOrFail($id);
        $data['booking'] = [];
        if( $booking ) {
            $data['booking'] = array(
                'first_name' =>  $booking->first_name,
                'last_name' =>  $booking->last_name,
                'email' =>  $booking->email,
                'telephone' =>  $booking->telephone,
                'address' =>  $booking->address,
                'special_requirement' =>  $booking->special_requirement,
                'country_id' =>  $booking->country->name,
                'zone_id' =>  $booking->zone->name,
                'total' =>  $booking->total,
                'created_at' =>  Carbon::parse($booking->created_at)->format('m-d-Y'),
            );
        }

        // book hotel
        $book_hotel = $booking->book_hotel()->first();
        $data['book_hotel'] = [];
        if( $book_hotel) {
            $data['book_hotel'] = array(
                'room_description' => $book_hotel->room->room_descriptions()->where('language_id', $this->adminLanguage())->first(),
                'check_in' => Carbon::parse($book_hotel->check_in)->format('m-d-Y'),
                'check_out' => Carbon::parse($book_hotel->check_out)->format('m-d-Y'),
                'adults' =>  $book_hotel->adults,
                'children' =>  $book_hotel->children,
                'etra_bed' =>  $book_hotel->etra_bed,
            );
        }

        // book tour
        $book_tour = $booking->book_tour()->first();
        $data['book_tour'] = [];
        if( $book_tour ) {
            $data['book_tour'] = array(
                'tour_description' => $book_tour->tour->tour_descriptions()->where('language_id', $this->adminLanguage())->first(),
                'arrive_date' => Carbon::parse($book_tour->arrive_date)->format('m-d-Y'),
                'departure_date' => Carbon::parse($book_tour->departure_date)->format('m-d-Y'),
                'adults' =>  $book_tour->adults,
                'children' =>  $book_tour->children,
            );
        }

        //book cruise
        $book_cruise = $booking->book_cruise()->first();
        $data['book_cruise'] = [];
        if( $book_cruise ) {
            $data['book_cruise'] = array(
                'cruise_description' => $book_cruise->cruise->cruise_descriptions()->where('language_id', $this->adminLanguage())->first(),
                'arrive_date' => Carbon::parse($book_cruise->arrive_date)->format('m-d-Y'),
                'departure_date' => Carbon::parse($book_cruise->departure_date)->format('m-d-Y'),
                'adults' =>  $book_cruise->adults,
                'children' =>  $book_cruise->children,
            ); 
        }
        return $data;
    }
    public function edit( $id ) {
    }

    public function create()
	{
    }
}

// 'check_in' => Carbon::parse($book_hotel->check_in)->format('m-d-Y'),