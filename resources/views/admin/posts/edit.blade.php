<x-layout>
    <x-setting heading="Edit Post:">
        <form method="Post" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" :value="$post->title"></x-form.input>
            <x-form.input name="slug" :value="$post->slug"></x-form.input>
            <x-form.input name="thumbnail" type="file"></x-form.input>
            <x-form.textarea name="excerpt">{{old('excerpt'), $post->excerpt}}</x-form.textarea>
            <x-form.textarea name="body">{{old('body', $post->body)}}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category"></x-form.label>
                <select name="category_id" id="category_id">

                    @foreach(App\Models\Category::all() as $category)
                        <option
                            value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' :''}} >{{ucwords($category->name)}}</option>
                    @endforeach

                </select>
            </x-form.field>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>

</x-layout>
