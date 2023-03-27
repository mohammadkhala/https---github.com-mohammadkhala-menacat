
@extends('layouts.report')
@section('content')

@foreach($records as $record)


<div id="report-title"><h1></h1></div>



&nbsp;&nbsp;&nbsp;<table style="border-collapse: collapse; width: 90.392%; height: 121px; float:right" border="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<tbody>
<tr>
<td style="width: 22.255%; text-align: right;">&nbsp;{{ $record->address }}:{{__('address')}}</td>
<td style="width: 19.7742%; text-align: right;">&nbsp;{{ $record->gender }}:{{__('gender')}}</td>
<td style="width: 32.4066%; text-align: right;">&nbsp;{{ $record->name }}:{{__('name')}}</td>
<td style="width: 22.2449%; padding-left: 40px;" rowspan="2">&nbsp;<img  height="150px" width="150px"  src="{{ URL::asset($record->image) }}" alt="{{ $record->name }}’s lovely face" /></td>
</tr>
<tr>
<td style="width: 42.0292%; text-align: right;" colspan="2">&nbsp;{{ $record->class }}:{{__('class')}}</td>
<td style="width: 30.4066%; text-align: right;">&nbsp;{{ $record->date_of_birth }}:{{__('dateOfBirth')}}</td>
</tr>
</tbody>
</table>

<p style="text-align: right;">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>&nbsp;</p>
<hr>
<p style="text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{__('educationStatus')}}&nbsp;&nbsp;&nbsp;</p>
<table style="border-collapse: collapse; width: 100%; height: 91px;" border="1">
<tbody>
<tr style="height: 15px;">
<td style="width: 15.3333%; text-align: right; height: 18px;">{{__('date')}}</td>
<td style="width: 15.3333%; text-align: right; height: 18px;">{{__('remaining')}}</td>
<td style="width: 15.3333%; text-align: right; height: 18px;">{{__('cost')}}</td>
<td style="width: 25.3333%; text-align: right; height: 18px;">{{__('solution')}}</td>
<td style="width:40.3333%; text-align: right; height:  18px;">{{__('diagnosis')}}</td>

</tr>

@for($i=0;$i<3;$i++)

<tr  style="height: 15px;">
<td style="width: 15.3333%; height: 18px; text-align: right;" >&nbsp;{{ $record->education_date}}</td>
<td style="width: 15.3333%; height: 18px; text-align: right;" >&nbsp;{{ $record->education_remaining }}</td>
<td style="width: 15.3333%; height: 18px; text-align: right;" >&nbsp;{{ $record->education_status_cost }}</td>
<td style="width: 25.9879%; height: 18px; text-align: right;">&nbsp;{{ $record->education_status_solution }}</td>
<td style="width: 40.6787%; height: 18px; text-align: right;">&nbsp;{{ $record->education_status_diagnosis }}</td>
</tr>
@endfor
</tbody>
</table>
<hr>
<p style="text-align: right;"> {{__('medicalStatus')}}</p>
<table style="border-collapse: collapse; width: 100%; height: 102px;" border="1">
<tbody>
<tr style="height: 25px;">
<td style="width: 15.3333%; text-align: right; height: 18px;">{{__('date')}}</td>
<td style="width: 15.3333%; text-align: right; height: 18px;">{{__('remaining')}}</td>
<td style="width: 15.3333%; text-align: right; height: 18px;">{{__('cost')}}</td>
<td style="width: 25.3333%; text-align: right; height: 18px;">{{__('solution')}}</td>
<td style="width:40.3333%; text-align:  right; height: 18px;">{{__('diagnosis')}}</td>
</tr>
@for($i=0;$i<3;$i++)
<tr style="height: 18px;">
<td style="width: 15.3333%; height: 18px; text-align: right;">&nbsp;{{ $record->medical_status_date}}</td>
<td style="width: 15.3333%; height: 18px; text-align: right;">&nbsp;{{ $record->medical_status_remaining }}</td>
<td style="width: 15.3333%; height: 18px; text-align: right;">&nbsp;{{ $record->medical_status_cost }}</td>
<td style="width: 25.9879%; height: 18px; text-align: right;">&nbsp;{{ $record->medical_status_solution }}</td>
<td style="width: 40.6787%; height: 18px; text-align: right;">&nbsp;{{ $record->medical_status_diagnosis }}</td>
</tr>
@endfor
</tbody>
</table>
<hr>
<p style="text-align: right;"> {{__('maritalStatus')}}</p>
<table style="border-collapse: collapse; width: 100%; height: 95px;" border="1">
<tbody>
<tr style="height: 24px;">
<td style="width: 15.3333%; text-align: right; height: 18px;">{{__('date')}}</td>
<td style="width: 15.3333%; text-align: right; height: 18px;">{{__('remaining')}}</td>
<td style="width: 15.3333%; text-align: right; height: 18px;">{{__('cost')}}</td>
<td style="width: 25.3333%; text-align: right; height: 18px;">{{__('solution')}}</td>
<td style="width:40.3333%; text-align:  right; height: 18px;">{{__('diagnosis')}}</td>
</tr>
@for($i=0;$i<3;$i++)
<tr style="height: 18px;">
<td style="width: 15.3333%; height: 18px; text-align: right;">&nbsp;{{ $record->marital_status_date }}</td>
<td style="width: 15.3333%; height: 18px; text-align: right;">&nbsp;{{ $record->marital_status_remaining}}</td>
<td style="width: 15.3333%; height: 18px; text-align: right;">&nbsp;{{ $record->marital_status_cost }}</td>
<td style="width: 25.9879%; height: 18px; text-align: right;">&nbsp;{{ $record->marital_status_solution }}</td>
<td style="width: 40.6787%; height: 18px; text-align: right;">&nbsp;{{ $record->marital_status_diagnosis }}</td>
</tr>
@endfor

</tbody>
</table>




        @endforeach
    
@endsection
