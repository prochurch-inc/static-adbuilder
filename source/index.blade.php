@extends('_layouts.master')

@section('content')

<div class="wrapper flex relative lg:h-screen overflow-hidden flex-wrap lg:flex-no-wrap">
	<section class="copy w-full lg:w-1/2 copy-gradient lg:h-screen text-white overflow-y-auto">
		@include('includes.benefits')	
	</section>
	<section class="form w-full order-first lg:order-none lg:w-1/2 bg-gray-100 overflow-y-auto lg:h-screen ">
		@include('includes.form-header')
		@include('includes.form')
	</section>
	<img src="/assets/images/background-flare.svg" alt="" class="hidden lg:block absolute bottom-0 left-0 -mb-24  z-0">
</div>

@endsection
@push('head')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">

@endpush