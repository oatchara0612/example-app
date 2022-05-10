{{-- @extends('app')

@push('css')

@endpush

@section('content')

@endsection


@push('js')

@endpush --}}

<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css"
        integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <table class="table table-bordered" id="student-table">
        <thead class ="thead-dark">
            <tr>
                <th>Student Code</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Nickname</th>
                <th>Sex</th>
                <th>City</th>
                <th>Country</th>
                <th>email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $item)
                <tr>
                    <td>{{ $item->studentcode }}</td>
                    <td>{{ $item->firstname }}</td>
                    <td>{{ $item->lastname }}</td>
                    <td>{{ $item->nickname }}</td>
                    <td>{{ $item->sex }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->country }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <a class = "btn btn-xs btn-warning" href="{{ route('students.edit', ['student' => $item]) }}">
                            Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="{{ route('students.delete', ['student' => $item ]) }}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('#student-table').DataTable();
        });
    </script>
</body>

</html>
