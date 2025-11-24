@extends('basics.calculate')

@section('formLabel')
Bathrooms
@endsection

@section('formID')
bathroomAction
@endsection

@section('formAction')
bathroomAction
@endsection

@section('formID')
bathroomActionForm
@endsection

@section('buttonUpgradeID')
bathroomUpgradeID
@endsection

@section('buttonDowngradeID')
bathroomDowngradeID
@endsection

@section('sessionResultID')
{{ (session('bathroomActionResult')) ?? 0 }}
@endsection