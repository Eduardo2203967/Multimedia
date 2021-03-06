<div class="form-group">
    <label for="inputTitle">Título</label>
    <input type="text" class="form-control" name="title" id="inputTitle" value="{{ old('title', $post->title) }}" />
</div>
<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="datetime_local" class="form-control" name="date" id="inputDate"
        value="{{ old('date', $post->date ?? date('Y-m-d H:i:s')) }}" />
</div>
<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="description"
        id="inputDescription">{{ old('description', $post->description) }}</textarea>
</div>
<div class="form-group">
    <label for="inputImage">Image</label>
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor insira uma imagem! Não deve ultrapassar os 2MB </small>
</div>
<div class="form-group">
    <label for="inputViewMore">Ver Mais - URL</label>
    <input type="url" class="form-control" name="viewMore" id="inputViewMore"
        value="{{ old('viewMore', $post->viewMore) }}" />
</div>
<div class="form-group">
    <label for="inputCategory">Categoria</label>
    <select name="category" id="inputCategory" class="form-control">
        @foreach ($categories as $category)
            <option {{ old('$category', $post->category_id) == $category->id ? 'selected' : '' }}
                value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
