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
</div>