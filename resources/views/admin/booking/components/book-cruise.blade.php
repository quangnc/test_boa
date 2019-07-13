
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
                                            <td> {{ $book_cruise['cruise_description'] ? $book_cruise['cruise_description']->name : "" }} </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Arrive Date</td>
                                            <td>{{ $book_cruise['arrive_date'] ? $book_cruise['arrive_date'] : "" }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Departure Date</td>
                                            <td>{{ $book_cruise['departure_date'] ? $book_cruise['departure_date'] : "" }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Adults</td>
                                            <td>{{ $book_cruise['adults'] ? $book_cruise['adults'] : "" }}</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Children</td>
                                            <td>{{ $book_cruise['children'] ? $book_cruise['children'] : "" }}</td>
                                        </tr>                                                                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        