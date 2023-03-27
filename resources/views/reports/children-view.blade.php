
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Id</th>
            <td>{{ $record->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $record->name }}</td>
        </tr>
        <tr>
            <th>Date Of Birth</th>
            <td>{{ $record->date_of_birth }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $record->address }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ $record->gender }}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td>{{ $record->image }}</td>
        </tr>
        <tr>
            <th>Medical Status Id</th>
            <td>{{ $record->medical_status_id }}</td>
        </tr>
        <tr>
            <th>Medical Status Diagnosis</th>
            <td>{{ $record->medical_status_diagnosis }}</td>
        </tr>
        <tr>
            <th>Medical Status Solution</th>
            <td>{{ $record->medical_status_solution }}</td>
        </tr>
        <tr>
            <th>Medical Status Cost</th>
            <td>{{ $record->medical_status_cost }}</td>
        </tr>
        <tr>
            <th>Medical Status Children Id</th>
            <td>{{ $record->medical_status_children_id }}</td>
        </tr>
        <tr>
            <th>Education Status Children Id</th>
            <td>{{ $record->education_status_children_id }}</td>
        </tr>
        <tr>
            <th>Education Status Id</th>
            <td>{{ $record->education_status_id }}</td>
        </tr>
        <tr>
            <th>Education Status Diagnosis</th>
            <td>{{ $record->education_status_diagnosis }}</td>
        </tr>
        <tr>
            <th>Education Status Solution</th>
            <td>{{ $record->education_status_solution }}</td>
        </tr>
        <tr>
            <th>Education Status Cost</th>
            <td>{{ $record->education_status_cost }}</td>
        </tr>
        <tr>
            <th>Marital Status Remaining</th>
            <td>{{ $record->marital_status_remaining }}</td>
        </tr>
        <tr>
            <th>Medical Status Remaining</th>
            <td>{{ $record->medical_status_remaining }}</td>
        </tr>
        <tr>
            <th>Education Status Remaining</th>
            <td>{{ $record->education_status_remaining }}</td>
        </tr>
        <tr>
            <th>Class</th>
            <td>{{ $record->class }}</td>
        </tr>
        <tr>
            <th>Marital Status Date</th>
            <td>{{ $record->marital_status_date }}</td>
        </tr>
        <tr>
            <th>Medical Status Date</th>
            <td>{{ $record->medical_status_date }}</td>
        </tr>
        <tr>
            <th>Education Status Date</th>
            <td>{{ $record->education_status_date }}</td>
        </tr>
    </tbody>
</table>
@endsection
