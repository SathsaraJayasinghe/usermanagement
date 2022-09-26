@extends('master')
@section('content')
    <div class="userinfo">
        <h2>User Details</h2>
        <form action="/adduser" method="POST">
            @csrf
            <div class="fields">
                <label for="">First Name</label><br>
                <input type="text" name="first_name">
            </div>
            <div class="fields">
                <label for="">Last Name</label><br>
                <input type="text" name="last_name">
            </div>
            <div class="fields">
                <label for="">Email</label><br>
                <input type="text" name="email">
            </div>
            <div class="fields">
                <label for="">City</label><br>
                <input type="text" name="city">
            </div>
            <div class="fields">
                <label for="">Contact</label><br>
                <input type="text" name="contact">
            </div>
            <div class="fields">
                <button type="submit">Insert User</button>
            </div>
        </form>
    </div>
@endsection('content')