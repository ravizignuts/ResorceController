@extends('layout.master')
@section('title', 'Insert Form')
@section('content')

    <form action="insert" method="post">
        <div class="form-group">
            <label for="sid">Student ID</label>
            <input type="text" name="sid" id="sid" class="form-control" placeholder="Student Id">
        </div>
        <div class="mb-3">
          <label for="fname" class="form-label">Full Name</label>
          <input type="text" name="firstname" id="fname" class="form-control" placeholder="First Name">
          <input type="text" name="lastname" id="fname" class="form-control" placeholder="Last Name">
        </div>
    </form>

@endsection
