@extends('layouts.admin')

@section('content')
    <admin-users :desserts="{{$users}}"></admin-users>
@endsection
