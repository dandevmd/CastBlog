<x-layout>
    <section class="px-6 py-8">
        <main
            class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl"
        >
            <h1 class="text-center font-bold text-xl">Create new post!</h1>

            <form method="POST" action="/admin/posts" class="mt-10" enctype="multipart/form-data">
                @csrf

               <x-form.input name="title"  />
               <x-form.input name="slug"  />
               <x-form.input name="thumbnail" type='file' />
               <x-form.textarea name="excerpt"  />
               <x-form.textarea name="body"  />
              

                <x-form.separator>
                   <x-form.label name="category_id"/>

                    <select
                        name="category_id"
                        id="category_id"
                        class="bg-transparent rounded p-1"
                    >
                        @foreach(App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">
                            {{ucwords($category->name)}}
                        </option>
                        @endforeach
                    </select>
                </x-form.separator>
<x-button name="Create"/>
            </form>
        </main>
    </section>
</x-layout>
