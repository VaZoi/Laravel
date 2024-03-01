<!DOCTYPE html>
<html>
<head>
    <title>Roles and Users</title>
</head>
<body>
    <h1>Roles and Users</h1>

    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Roles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usersWithRoles as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            {{ $role->name }}<br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
