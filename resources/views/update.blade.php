@extends('layout.master')
@section('title', 'Update Page')
@section('content')
{{-- @dd($student) --}}
<div class="table-responsive">
        <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light">
                <caption>Student Details</caption>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>D.O.B</th>
                    <th>Semester</th>
                    <th>Course</th>
                    <th>SAVE</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">

                    <tr class="table-primary">
                        <td scope="row">{{ $student->student_id }}</td>
                        <td>{{ $student->fname }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->sem }}</td>
                        <td>{{ $student->course }}</td>
                        <td class="text-center">
                            <a href="{{ route('student.update', $student->student_id) }}"
                                class="btn btn-success btn-sm">SAVE</a>
                        </td>
                    </tr>

            </tbody>

        </table>
    </div>

@endsection
