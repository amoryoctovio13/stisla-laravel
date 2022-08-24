@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <users-component></users-component>
  <div class="section-body">
  </div>
</section>
@endsection
