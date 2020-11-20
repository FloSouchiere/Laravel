<h1>Liste des membres</h1>
<table>
    <tbody>

    @foreach ($memberships as $membership)
        <tr>
            <td>Id user: {{ $membership->user_id }}</td>
            <td>Id license: {{ $membership->license_id }}</td>
            <form action="{{ route('memberships.destroy', $membership->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
            </td>
            <td>
                <a href="{{ route('memberships.edit', $membership->id) }}">
                    <button type="button">Modifier</button>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>

