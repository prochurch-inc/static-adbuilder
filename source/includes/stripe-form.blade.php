<section class="stripe-form py-6">
    <p class="text-center text-sm font-bold mb-6">Your 14-day Base plan trial is 100% free. Cancel any time.</p>
    <img src="/assets/images/cards.svg" alt="accepted cards: visa mastercard discover amex" class="mb-6">
    <div class="stripeForm mb-6">
        <input class="form-input block w-full mb-4 tracking-ultrawide text-center border-none py-3 text-lg" placeholder="4444 4444 4444 4444" name="cardnumber" id="cardnumber">
        <div class="flex items-center">
            <input class="form-input block w-24 mr-2 tracking-ultrawide text-center border-none py-3 text-lg" placeholder="08" name="expmonth" id="expmonth">
            <span class="text-xl mr-2">/</span>
            <input class="form-input block w-24 mr-4 tracking-ultrawide text-center border-none py-3 text-lg" placeholder="24" name="expyear" id="expyear">
            <input class="form-input block w-full flex-grow tracking-ultrawide text-center border-none py-3 text-lg" placeholder="***" name="cvc" id="cvc">
        </div>
    </div>
    @component('includes.main-button')
    @slot('actions')
    type="submmit"
    @endslot
    @slot('text')
    Get Started
    @endslot
    @endcomponent
    <p class="text-center text-sm italic">By clicking “Get Started”, you agree to Church Hero’s <a href="#">Terms of Use.</a></p>

</section>