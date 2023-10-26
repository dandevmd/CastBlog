@props([ 
    'name'
      ])

<x-form.separator>
<x-form.label name="{{$name}}"/>


    <textarea
        class="border border-gray-400 p-2 w-full resize-none"
        required
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="Type here..."
        required
        rows="rows"
        cols="cols"
    >
     {{ $slot ?? old($name) }}
    </textarea>

    <x-form.error name="{{$name}}"/>
</x-form.separator>
