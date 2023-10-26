<x-layout>
  <table class="w-auto mx-auto border  border-gray-300 mt-10">
    <tbody class="bg-gray-100">
      @foreach ($posts as $post)
      <tr class="space-y-10">
        <td class="px-6 py-4 whitespace-nowrap"> 
        {{ $loop->index + 1 }}
        </td> <td class="px-6 py-4 whitespace-nowrap"> 
        <a href="/posts/{{$post->slug}}" class="pointer hover:underline">
          {{$post->title}}
        </a>  
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          {{ Illuminate\Support\Str::limit(strip_tags($post->excerpt), 30, '...') }}

        </td>
        <td class="px-6 py-4 whitespace-nowrap"> 
          <a href="/admin/posts/{{$post->id}}/edit" class="hover:underline hover:font-bold text-blue-500">
            Edit
          </a>
        </td>  
        <td class="px-6 py-4 whitespace-nowrap"> 
          <form action='/admin/posts/{{$post->id}}' method='POST'>
            @csrf
            @method('DELETE')
          <button type="submit" class='text-xs text-red-400 '>Delete</button>
          </form>
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</x-layout>