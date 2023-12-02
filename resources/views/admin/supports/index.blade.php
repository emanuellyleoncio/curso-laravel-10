<h1>Listagem dos Suportes</h1>


<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>

    <tbody>
        @foreach($supports as $support)
            <tr><td>{{ $support->subject }}</td></tr>
            <tr><td>{{ $support->status }}</td></tr>
            <tr><td>{{ $support->body }}</td></tr>
            <tr><td>></td></tr>
        @endforeach
    </tbody>
</table>

