@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br>
        <h3>Students Data</h3>
        <br>
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif
        <div align="right">
            <a href="{{route('student.create')}}" class="btn btn-success">Add new student </a>
            <br><br>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            @foreach($students as $row)
                <tr>
                    <td>{{$row['first_name']}}</td>
                    <td>{{$row['last-name']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection