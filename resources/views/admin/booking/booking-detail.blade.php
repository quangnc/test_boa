@extends('admin.master')
@section('title', 'Booking Detail')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="tabs">
                    <ul class="nav nav-tabs">

                        @if($booking)
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#booking">Booking</a>
                        </li>
                        @endif
                        @if($book_hotel)
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#book_hotel">Book Hotel</a>
                        </li>
                        @endif
                        @if($book_tour)
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#book_tour">Book Tour</a>
                        </li>
                        @endif
                        @if($book_cruise )
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#book_cruise">Book Cruise</a>
                        </li>
                        @endif
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="tab-content" style="padding-top: 20px">
                    @if($booking)
                    <div class="tab-pane active" id="booking">
                        @include('admin.booking.components.booking')
                    </div>
                    @endif
                    @if($book_hotel)
                    <div class="tab-pane" id="book_hotel">
                        @include('admin.booking.components.book-hotel')
                    </div>
                    @endif
                    @if($book_tour)
                    <div class="tab-pane" id="book_tour">
                        @include('admin.booking.components.book-tour')
                    </div>
                    @endif
                    @if($book_cruise)
                    <div class="tab-pane" id="book_cruise">
                        @include('admin.booking.components.book-cruise')
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection