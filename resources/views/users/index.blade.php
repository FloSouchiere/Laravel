<h1>Liste des utilisateurs</h1>
<table>
    <tbody>

    @foreach ($users as $user)
        <tr>
            <td>Prénom: {{ $user->fistname }}</td>
            <td>Nom: {{ $user->lastname }}</td>
            <td>Email: {{$user->email}}</td>
            <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}">
                    <button type="button">Modifier</button>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
