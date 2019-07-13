
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
                                        <td scope="row">First Name</td>
                                        <td> {{ $booking['first_name'] ? $booking['first_name'] : "" }} </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Last Name</td>
                                        <td>{{ $booking['last_name'] ? $booking['last_name'] : "" }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Email</td>
                                        <td>{{ $booking['email'] ? $booking['email'] : "" }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Telephone</td>
                                        <td>{{ $booking['telephone'] ? $booking['telephone'] : "" }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Address</td>
                                        <td>{{ $booking['address'] ? $booking['address'] : "" }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Special Requirement</td>
                                        <td>{{ $booking['special_requirement'] ? $booking['special_requirement'] : "" }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Country</td>
                                        <td>{{ $booking['country_id'] ? $booking['country_id'] : "" }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Zone</td>
                                        <td>{{ $booking['zone_id'] ? $booking['zone_id'] : "" }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Total</td>
                                        <td>{{ $booking['total'] ? $booking['total'] : "" }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Created At</td>
                                        <td>{{ $booking['created_at'] ? $booking['created_at'] : "" }}</td>
                                    </tr>                                                                                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    