@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Brand</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($notes AS $note)
        <tr>
          <td>{{ $note->id }}</td>
          <td>{{ $note->name }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('note.show',['manufacturer'=>$manufacturer->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('note.create') }} " class="btn btn-primary" >Create</a>
@stop