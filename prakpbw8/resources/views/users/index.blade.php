<x-app-layout title="Users">
    <x-slot name="heading">Users</x-slot>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <body>
            @foreach ($users as $user )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ (new \Carbon\Carbon($user->published_at))->format('d F Y') }}</td>
            </tr>
            @endforeach
        </body>
    </table>
</x-app-layout>