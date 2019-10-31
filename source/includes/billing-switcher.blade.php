<div class="flex flex-wrap">
    <input type="radio" name="billingtype" value="annual" id="annual" class="hidden" checked>
    <label for="annual" class="annuallabel w-full md:w-1/2  md:rounded-tl md:rounded-bl bg-white pr-6 pl-12 py-10 relative flex items-center justify-center">
        <div class="absolute inset-y-0 left-0 h-full flex items-center ml-10">
            <img src="/assets/images/radio.svg" alt="" class="non-selected">
            <img src="/assets/images/radio-selected.svg" class="selected" alt="">
        </div>
        <div class="absolute top-0 right-0 bg-teal-500 text-white rounded-full h-12 w-12 flex flex-col items-center justify-center mr-6 -mt-6 shadow">
            <p class="text-xs uppercase -mb-2">Save</p>
            <p class="font-bold">35%</p>
        </div>
        <div>
            <p class="font-bold text-lg text-gray-800">Annual - $63/m</p>
            <p class="text-sm text-gray-300">Billed Annually for $756</p>
        </div>
    </label>
    <input type="radio" name="billingtype" value="monthly" id="monthly" class="hidden">
    <label for="monthly" class="monthlylabel w-full md:w-1/2 bg-white pr-6 pl-12 md:rounded-tr md:rounded-br py-10 relative flex items-center justify-center">
        <div class="absolute inset-y-0 left-0 h-full flex items-center ml-10">
            <img src="/assets/images/radio.svg" alt="" class="non-selected">
            <img src="/assets/images/radio-selected.svg" class="selected" alt="">
        </div>
        <div>
            <p class="font-bold text-lg text-gray-800">Monthly - $97/m</p>
            <p class="text-sm text-gray-300">Billed Monthly at $97/Month</p>
        </div>
    </label>
</div>