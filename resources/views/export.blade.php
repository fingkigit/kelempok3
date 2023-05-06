<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>password</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
        </tr>
    @endforeach
    </tbody>
</table>