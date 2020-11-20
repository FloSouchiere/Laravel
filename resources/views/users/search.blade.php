<div class="container">
    @if(isset($users))
        <h2>Utilisateurs</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Firstname:</th>
                <th>Name:</th>
                <th>Email:</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
