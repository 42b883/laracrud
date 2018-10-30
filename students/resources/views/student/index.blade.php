@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h3>Students Data</h3>
        <br>
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