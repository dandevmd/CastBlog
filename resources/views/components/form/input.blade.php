@props([
  'name',
  'type'=>'text'
  ])

<x-form.separator>
<x-form.label name="{{$name}}"/>

  <input class="border border-gray-400 p-2 w-full" type="{{$type}}" name="{{$name}}" id="{{$name}}"
    placeholder="Type here..."   {{$attributes([
      'value'=>old($name),
      ])}}/>

    <x-form.error name="{{$name}}"/>
</x-form.separator>