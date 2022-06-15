@props(['type' => null, 'name' => null, 'required' => null, 'label' => null, 'information' => null, 'errors' => null])

<div class="relative z-0 w-full mb-6 group">

    @if($errors->has($name))
    <div>
        <div class="relative z-0">
            <input type="{{ $type }}" name="{{ $name }}" autofocus id="{{ $name }}" value="{{ old($name) }}" aria-describedby="standard_error_help" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-red-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
            <label for="{{ $name }}" class="absolute text-sm text-red-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ $label }} @if ($required)
            <label class="text-xs pl-1 text-red-500">(Required)</label>
        @endif</label>
        </div>
        <p id="standard_error_help" class="mt-2 text-xs text-red-600"><span class="font-medium">Error! </span> {{ $errors->first($name) }}</p>
    </div>
    @else
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" "/>
    <label for="{{ $name }}"
        class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
        {{ $label }} @if ($required)
            <label class="text-xs pl-1 text-red-500">(Required)</label>
        @endif
    </label>
        @if($information)
            <p id="floating_helper" class="mt-2 text-xs text-gray-500">{{ $information }}</p>
        @endif
    @endif
</div>

