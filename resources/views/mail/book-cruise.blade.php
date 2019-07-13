<div>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Adress</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data['book']['first_name'] }}</td>
                <td>{{ $data['book']['last_name']  }}</td>
                <td>{{ $data['book']['address']  }}</td>
                <td>{{ $data['book']['email']  }}</td>
                <td>{{ $data['book']['telephone']  }}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>Name Cruise</th>
                <th>Code</th>
                <th>Price 2 Day</th>
                <th>Price 3 Day</th>
                <th>arrive_date</th>
                <th>departure_date</th>
                <th>adults</th>
                <th>children</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data['cruise_description']->name }}</td>
                <td>{{ $data['cruise']->code }}</td>
                <td>{{ $data['cruise']->price_2_day }}</td>
                <td>{{ $data['cruise']->price_3_day }}</td>
                <td>{{ $data['book_cruise']['arrive_date'] }}</td>
                <td>{{ $data['book_cruise']['departure_date'] }}</td>
                <td>{{ $data['book_cruise']['adults'] }}</td>
                <td>{{ $data['book_cruise']['children'] }}</td>
            </tr>
        </tbody>
    </table>
</div>
    