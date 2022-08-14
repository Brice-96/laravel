<table>
    <tr>
        <th>
            Nom
        </th>
        <th>date_demarrage</th>
        <th>date_fin</th>
        <th>description</th>
    </tr>
    @foreach($evens as $even)
    <tr>
        <td>{{$even->nom}}</td>
        <td>{{$even->date_demarrage}}</td>
        <td>{{$even->date_fin}}</td>
        <td>{{$even->description}}</td>
    @endforeach
</table>