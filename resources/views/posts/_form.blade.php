@csrf

{{-- Title input --}}
<label for="title" class="uppercase text-gray-700 text-xs" id="">
    Titulo
</label>
<span class="text-xs text-red-600">
    @error('title')
        {{ $message }}
    @enderror
</span>
<input type="text" name="title" id="title" class="rounded border-gray-200 w-full mb-4"
    value="{{ old('title', $post->title) }}">
{{-- /End Title input --}}

{{-- slug input --}}
<label for="slug" class="uppercase text-gray-700 text-xs" id="">
    Slug
</label>
<span class="text-xs text-red-600">
    @error('slug')
        {{ $message }}
    @enderror
</span>
<input type="text" name="slug" id="slug" class="rounded border-gray-200 w-full mb-4"
    value="{{ old('slug', $post->slug) }}">
{{-- /End slug input --}}

{{-- Body input --}}
<label for="body" class="uppercase text-gray-700 text-xs" id=bodyLabel">
    Contenido
</label>
<span class="text-xs text-red-600">
    @error('body')
        {{ $message }}
    @enderror
</span>
<textarea name="body" id="bodyTextarea" class="rounded border-gray-200 w-full mb-4" cols="30" rows="10">
    {{ old('body', $post->body) }}
</textarea>
{{-- /End Body input --}}

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600" id="">
        < Volver </a>
            <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
