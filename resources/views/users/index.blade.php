<h1>Liste des utilisateurs</h1>
<table>
    <tbody>

    <form action="{{route('users.search')}}" method="get">
        <label for="type">Parametre de recherche</label>
        <select name="type">
            <option value="name">Name</option>
            <option value="firstname">Firstname</option>
            <option value="email">Email</option>
        </select>
        <label for="search"></label>
        <input type="text" name="search">
        <button type="submit">Rechercher</button>
    </form>

    @foreach ($users as $user)
        <tr>
            <td>Prénom: {{ $user->firstname }}</td>
            <td>Nom: {{ $user->name }}</td>
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
