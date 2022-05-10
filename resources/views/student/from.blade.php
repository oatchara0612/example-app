{{--@extends('app')

@push('css')

@endpush

@section('content')

@endsection


@push('js')

@endpush--}}

<html>

<body>
    <form method="post" action="{{ route('students.store') }}">
        @csrf
        @if (@isset($student->id))
            <input type="hidden" name="id" value="{{ $student->id }}">
        @endif
        <label>studentcode:</label><br>
        <input type="text" name="studentcode"><br>
        <label>firstname:</label><br>
        <input type="text" name="firstname"><br>
        <label>lastname:</label><br>
        <input type="text" name="lastname"><br>
        <label>nickname:</label><br>
        <input type="text" name="nickname"><br>
        <label>sex:</label><br>
        {{-- <input type="text" name="sex"> --}}
        <select name="sex"><br>
            <option value="male">male</option>
            <option value="female">female</option>
        </select><br>
        <label>city:</label><br>
        <input type="text" name="city"><br>
        <label>country:</label><br>
        <input type="text" name="country"><br>
        <label>email:</label><br>
        <input type="text" name="email"><br>
        <label>phone:</label><br>
        <input type="text" name="phone"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>