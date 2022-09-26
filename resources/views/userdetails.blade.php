@extends('master')
@section('content')
<div class="userdetails">
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Contact</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        @foreach($users as $u)
            <tr>
                <td>{{$u['id']}}</td>
                <td>{{$u['first_name']}}</td>
                <td>{{$u['last_name']}}</td>
                <td>{{$u['email']}}</td>
                <td>{{$u['city']}}</td>
                <td>{{$u['contact']}}</td>
                <td><a href="/updateuser/{{$u['id']}}"><button>Update</button></a></td>
                <td><a href="/deleteuser/{{$u['id']}}"><button>Delete</button></a></td>
            </tr>
        @endforeach
    </table>

</div>

@endsection('content')