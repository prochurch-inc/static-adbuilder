<form action="/register" class="max-w-sm mx-auto w-full py-12">
  <label class="block mb-6">
    <span class="text-gray-700">First and Last Name</span>
    <input class="form-input mt-1 block w-full border-none py-3 text-lg" placeholder="John Doe">
  </label>
  <label class="block mb-6">
    <span class="text-gray-700">Church Name</span>
    <input class="form-input mt-1 block w-full border-none py-3 text-lg" placeholder="Fresno Church">
  </label>
  <label class="block mb-6">
    <span class="text-gray-700">Email Address</span>
    <input class="form-input mt-1 block w-full border-none py-3 text-lg" type="email" placeholder="john@fresnochurch.com">
  </label>
  <label class="block mb-6">
    <span class="text-gray-700">Secure Password</span>
    <input class="form-input mt-1 block w-full border-none py-3 text-lg" type="password">
  </label>
  <label class="block mb-6">
    <span class="text-gray-700">Confirm Password</span>
    <input class="form-input mt-1 block w-full border-none py-3 text-lg" type="password">
  </label>
  @component('includes.main-button')
  @slot('actions')
  type="submit"
  @endslot
  @slot('text')
  Create My Account
  @endslot
  @endcomponent
  <p class="text-sm text-gray-800 text-center font-heading">Already using Adbuilder? <a href="/login" class="text-blue-600 underline">Login</a></p>
</form>