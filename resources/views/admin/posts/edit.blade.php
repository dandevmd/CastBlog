<x-layout>
  <section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
      <h1 class="text-center font-bold text-xl">Edit the post!</h1>

      <form method="POST" action="/admin/posts/{{$post->id}}" class="mt-10" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <x-form.input name="title" value="{{$post->title}}" />
        <x-form.input name="slug" value="{{$post->slug}}" />

        <div class="flex flex-row justify-between ">
          <x-form.input name="thumbnail" type='file' :value="old('thumbnail', $post->thumbnail)" />
          <img src="{{ asset($post->thumbnail ? 'storage/' . $post->thumbnail : 'images/post.jpg') }}"
            alt="Blog Post illustration" class="rounded-xl w-20">
        </div>

        <x-form.textarea name="excerpt">{{old('excerpt', strip_tags($post->excerpt))}}</x-form.textarea>
        <x-form.textarea name="body">{{old('body', strip_tags($post->body))}}</x-form.textarea>


        <x-form.separator>
          <x-form.label name="category_id" />

          <select name="category_id" id="category_id" class="bg-transparent rounded p-1">
            @foreach(App\Models\Category::all() as $category)
            <option value="{{$category->id}}">
              {{ucwords($category->name)}}
            </option>
            @endforeach
          </select>
        </x-form.separator>
        <x-button name="Create" />
      </form>
    </main>
  </section>
</x-layout>