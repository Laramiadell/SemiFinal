@extends('base')

@section('content')
@include('info')
<h1>Learners</h1>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Status</th>
        <th class="text-center"></th>
    </thead>
    <tbody>
        @foreach($learners as $ln)

        <tr>
            <td>{{$ln->id}}</td>
            <td>{{$ln->user->lname}}</td>
            <td>{{$ln->user->fname}}</td>
            <td>{{$ln->status}}</td>
            <td class="text-center">
                <a href="{{url('/learners/' . $ln->id)}}" class="btn btn-info btn-sm">&#9997;</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
