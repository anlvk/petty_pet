@extends('basics.calculate')

@section('formLabel')
Rooms
@endsection

@section('formAction')
roomAction
@endsection

@section('formID')
roomActionForm
@endsection

@section('buttonUpgradeID')
roomUpgradeID
@endsection

@section('buttonDowngradeID')
roomDowngradeID
@endsection

@section('sessionResultID')
{{ (session('roomActionResult')) ?? 0 }}
@endsection