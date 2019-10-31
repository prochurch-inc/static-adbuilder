@extends('_layouts.master')
@section('content')
<div class="wrapper bg-gray-100 min-h-screen">
	<div class="bar bg-black text-white w-full py-6 flex items-center justify-center">
		<img src="/assets/images/logo.svg" alt="">
	</div>
	<div class="header px-32 py-16 bg-white font-heading relative text-center">
		<div class="progress flex items-center justify-center max-w-mx mx-auto mb-6">
			<span class="text-xs text-orange-600">Step 2 of 3</span>
			<div class="h-1 w-32 bg-gray-200 ml-4 rounded-full">
				<div class="h-1 w-2/3 bg-orange-600 rounded-tl-full rounded-bl-full"></div>
			</div>
		</div>
		<h2 class="text-3xl  mx-auto mb-2">Start Your 14-Day <strong>Free</strong> Trial</h2>
		<p class="text-sm text-gray-800">Your 14-day trial is 100% free and lasts until May 25, 2019. Cancel any time.</p>
		<img src="/assets/images/arrow-icon.svg" alt="" class="absolute bottom-0 right-0 left-0 mx-auto -mb-8">
	</div>
	<div class="content flex flex-wrap max-w-5xl mx-auto py-12">
		<div class="stripeForm w-full lg:w-2/3 lg:border-r-2 px-12">
			@include('includes.billing-switcher')
			@include('includes.stripe-form')
		</div>
		<div class="faq w-full lg:w-1/3 px-4">
			@include('includes.faq')
		</div>
	</div>
</div>

@endsection