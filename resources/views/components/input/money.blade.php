<div class="mt-1 relative rounded-md shadow-sm">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <span class="text-gray-500 sm:text-sm sm:leading-5">
            $
        </span>
    </div>

    <input {{ $attributes }} class="dark:border-gray-600 dark:bg-gray-900 border-gray-300 dark:text-gray-200 rounded-md w-full pl-7 pr-12 sm:text-sm sm:leading-5" placeholder="0.00" aria-describedby="price-currency" type="text">

    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
        <span class="text-gray-500 sm:text-sm sm:leading-5" id="price-currency">
            AUD
        </span>
    </div>
</div>
