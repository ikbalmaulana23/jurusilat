@props(['active' => false])


<a   class="{{ $active ?  'bg-red-700  ' : '   hover:bg-red-500 hover:underline '}} text-gray-800 rounded-md px-3 py-2 text-sm font-medium " aria-current="{{ $active ? 'page' : false }}"{{ $attributes }}>{{ $slot }}</a>    