<h1>Liste des licenciés</h1>
<table>
    <tbody>

    @foreach ($licences as $licence)
        <tr>
            <td>Nom: {{ $license->name }}</td>
            <td>Durée: {{$license->duration}}</td>
            <form action="{{ route('licenses.destroy', $license->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
            </td>
            <td>
                <a href="{{ route('licenses.edit', $license->id) }}">
                    <button type="button">Modifier</button>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>

