@extends('master.main')

@section('content')
    @component('components.table.tableUsers',['users' => $users])
    @endcomponent
@endsection
