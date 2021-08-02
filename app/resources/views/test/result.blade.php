<table>
@foreach ($users as $user)
    <tr>
            @foreach ($user as $data)
            <td style="border: 1px dotted #2C3E50">{{$data}}</td>
            @endforeach
    </tr>

@endforeach
</table> 