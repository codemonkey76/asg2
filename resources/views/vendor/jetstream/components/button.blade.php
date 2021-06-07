<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 dark:bg-gray-200 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest dark:hover:bg-gray-300 hover:bg-gray-700 dark:active:bg-white active:bg-gray-900 focus:outline-none dark:focus:border-white focus:border-gray-900 focus:ring dark:focus:ring-gray-600 focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
