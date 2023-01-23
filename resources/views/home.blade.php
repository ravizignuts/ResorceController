@extends('layout.master')
@section('title', 'Insert Form')
@section('content')

    <form action="student" method="post">
        @csrf
        <div class="form-group">
            <label for="sid">Student ID</label>
            <input type="text" class='d-inline' name="sid" id="sid" class="form-control" placeholder="Student Id">
        </div>
        <div class="mb-3">
            <label for="fname" class="form-label">Full Name</label>
            <input type="text"  class='d-inline' name="firstname" id="fname" class="form-control" placeholder="First Name">
            <input type="text" name="lastname" class='d-inline' id="fname" class="form-control" placeholder="Last Name">
        </div>
        <label for="gender">Gender :</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
            <label class="form-check-label" for="male">Female</label>
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="date" class="form-control" class='d-inline' name="dob" id="dob">
        </div>
        <div class="form-group">
            <label for="sem">Semester</label>
            <input type="number" name="sem" id="sem" class='d-inline' class="form-control">
        </div>
        <div class="form-group">
            <label for="course">Course</label>
            <select class="form-control" name="course"  class='d-inline' id="course">
                <option>BCA</option>
                <option>MCA</option>
                <option>Bsc.IT</option>
                <option>Msc.IT</option>
                <option>B.tech</option>
                <option>M.tech</option>
            </select>
        </div>
        <button type="submit"  name='submit' class="btn btn-primary">Submit</button>
    </form>

@endsection
