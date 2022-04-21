@extends('master.main')

@section('content')
    @component('components.table.tableBicycles',['bicycles' => $bicycles])
    @endcomponent
@endsection
