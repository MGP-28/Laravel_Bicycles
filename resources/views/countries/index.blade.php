@extends('master.main')

@section('content')
    @component('components.table.tableCountries',['countries' => $countries])
    @endcomponent
@endsection
