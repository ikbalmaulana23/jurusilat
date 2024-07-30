@props(['active' => false])


<a   class="{{ $active ?  'bg-red-700 ' : ' text-gray-800  hover:bg-red-500 hover:underline'}} text-white rounded-md px-3 py-2 text-sm font-medium " aria-current="{{ $active ? 'page' : false }}"{{ $attributes }}>{{ $slot }}</a>    