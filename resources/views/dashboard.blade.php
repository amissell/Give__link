@extends('layouts.app')

@section('title', 'GiveLink Dashboard')

@section('page-title', 'Dashboard Overview')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
  <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-4">
      <div>
        <p class="text-sm font-medium text-gray-500">Total Donations</p>
        <h3 class="text-2xl font-bold text-emerald-700">$45,000</h3>
      </div>
      <div class="p-3 rounded-full bg-emerald-100 text-emerald-700">
        <i class="fas fa-dollar-sign"></i>
      </div>
    </div>
    <p class="text-xs text-gray-500">
      <span class="text-emerald-500"><i class="fas fa-arrow-up mr-1"></i>12%</span> from last month
    </p>
  </div>
</div>
@endsection