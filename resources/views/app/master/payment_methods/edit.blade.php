@extends('adminlte::page')

@section('content')
  {{ Breadcrumbs::render("{$resources}.edit", $data) }}
  @include('app.master.payment_methods.components.form', [
    'route' => route('payment_method.update', $data),
    'method' => 'PUT',
    'title' => __('app.payment_methods.edit.title')
  ])
@endsection
