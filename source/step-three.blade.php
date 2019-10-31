@extends('_layouts.master')
@section('content')
<div class="wrapper bg-gray-100 min-h-screen">
	<div class="bar bg-black text-white w-full py-6 flex items-center justify-center">
		<img src="/assets/images/logo.svg" alt="">
	</div>
	<div class="header px-32 py-16 bg-white font-heading relative text-center">
		<div class="progress flex items-center justify-center max-w-mx mx-auto mb-6">
			<span class="text-xs text-orange-600">Step 3 of 3</span>
			<div class="h-1 w-32 bg-gray-200 ml-4 rounded-full">
				<div class="h-1 w-full bg-orange-600 rounded-tl-full rounded-bl-full"></div>
			</div>
		</div>
		<h2 class="text-3xl max-w-md mx-auto mb-2">We need to get to know you a bit better…</h2>
		<img src="/assets/images/arrow-icon.svg" alt="" class="absolute bottom-0 right-0 left-0 mx-auto -mb-8">
	</div>
	<div class="content flex flex-wrap max-w-lg mx-auto py-12">
		@include('includes.church-form')
	</div>
</div>

@endsection