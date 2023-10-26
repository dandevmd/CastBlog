@auth
<form action="/posts/{{$post->slug}}/comments" method="POST"
  class="flex flex-col bg-gray-100 border border-gray-200 p-8 rounded-xl space-x-4">
  @csrf

  <header class="flex flex-row mb-3">
    <img src="https://i.pravatar.cc/60?u={{ auth()->id()}}" alt="" width="40" height="40" class="rounded-full" />
    <h2 class="mt-2 ml-4">Want to participate?</h2>
  </header>

  <x-form.textarea name="body" id="body" class="text-sm w-full p-2 focus:ring focus:outline-none resize-none" rows="5"
    placeholder="Type your taughts here." required/>


    <x-form.error name="body"/>


  <div class="flex justify-end mt-3">
    <x-button name="Post"/>
  </div>
</form>
@else
<p>
  <a href="/login" class='text-lg text-blue-500 underline'>Login to participate!</a>
</p>
@endauth