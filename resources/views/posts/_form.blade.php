@csrf
<label for="title" class="uppercase text-gray-700 text-xs" id="">
    Titulo
</label>
<input type="text" name="title" id="title" class="rounded border-gray-200 w-full mb-4" value="{{ $post->title }}"">

<label for="body" class="uppercase text-gray-700 text-xs" id=bodyLabel">
    Contenido
</label>
<textarea name="body" id="bodyTextarea" class="rounded border-gray-200 w-full mb-4" cols="30" rows="10">
    {{ $post->body }}
</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600" id="">
        < Volver </a>
            <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
