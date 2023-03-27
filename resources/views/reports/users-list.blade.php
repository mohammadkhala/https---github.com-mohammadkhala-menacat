
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Image</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->username }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->image }}</td>
            <td>{{ $record->phone }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
