<div>
    <h1>users list</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>email</th>
                {{-- <th>rol</th> --}}
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usersList as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td>{{ $this->getRoleName($user->role_id) }}</td> --}}
                    <td>
                        <button ></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
