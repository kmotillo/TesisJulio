@extends('app')

@section('estilo')
  @livewireStyles
@endsection

@section('contenido')
@include('plantilla.smallBoxes')

@endsection

@section('script')
  @livewireScripts
@endsection