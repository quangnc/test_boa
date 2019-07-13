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
                <th>Name Tour</th>
                <th>Code</th>
                <th>Price</th>
                <th>arrive_date</th>
                <th>departure_date</th>
                <th>adults</th>
                <th>children</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data['tour_description']->name }}</td>
                <td>{{ $data['tour']->code }}</td>
                <td>{{ $data['tour']->price }}</td>
                <td>{{ $data['book_tour']['arrive_date'] }}</td>
                <td>{{ $data['book_tour']['departure_date'] }}</td>
                <td>{{ $data['book_tour']['adults'] }}</td>
                <td>{{ $data['book_tour']['children'] }}</td>
            </tr>
        </tbody>
    </table>
</div>
    