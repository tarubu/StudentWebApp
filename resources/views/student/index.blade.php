@extends('layout.mainlayout')
@section('content')
<div class="container">
    <a href="/student/create" class="btn btn-success">Add new student</a>
    @foreach($students as $key => $student)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $student["firstname"] }} {{ $student["lastname"] }}</h5>
                <p class="card-text">{{ $student["birthdate"] }}</p>
            </div>
        </div>
    @endforeach
</div>

@endsection