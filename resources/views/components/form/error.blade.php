@props(['name'])


    <!-- Error flashing with Apline.js -->

@error($name)
<span class="text-xs mt-1 text-red-500" x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)"
    x-show="show">{{$message}}</span>
        @enderror