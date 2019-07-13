
    <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Detail Contact
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row box-book justify-content-md-center">
                            <div class="col-6 conten-book">
                                <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse table-responsive">
                                    <thead class="thead-inverse|thead-default">
                                        <tr>
                                            <th>Name</th>
                                            <th>Info</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row"> Name</td>
                                            <td> {{ $book_hotel['room_description']->name ? $book_hotel['room_description']->name : "" }} </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Description</td>
                                            <td>{{ $book_hotel['room_description']->description ? $book_hotel['room_description']->description : "" }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Check In</td>
                                            <td>{{ $book_hotel['check_in'] ? $book_hotel['check_in'] : "" }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Check Out</td>
                                            <td>{{ $book_hotel['check_out'] ? $book_hotel['check_out'] : "" }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Adults</td>
                                            <td>{{ $book_hotel['adults'] ? $book_hotel['adults'] : "" }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Children</td>
                                            <td>{{ $book_hotel['children'] ? $book_hotel['children'] : "" }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Etra Bed</td>
                                            <td>{{ $book_hotel['etra_bed'] }}</td>
                                        </tr>
                                                                                                                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        