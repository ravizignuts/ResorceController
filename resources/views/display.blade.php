@extends('layout.master')
@section('title', 'Display Page')
@section('content')
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
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($students as $student)
                    <tr class="table-primary">
                        <td scope="row">{{ $student->student_id }}</td>
                        <td>{{ $student->fname }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->sem }}</td>
                        <td>{{ $student->course }}</td>
                        <td class="text-center">
                            <a href="{{ route('student.edit', $student->student_id) }}"
                                class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('student.destroy', $student->student_id) }}" method="post"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>


@endsection
