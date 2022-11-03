<div class="modal fade" id="modal-update-post-{{ $post->id }}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('admin.posts.update', $post->id) }}" METHOD="POST" enctype="multipart/form-data">
                @method('PUT')
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Post</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Categoría</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="{{ $post->category->id }}">{{ $post->category->name }}</option>
                            @foreach($categories as $category)
                                @if($category->name != $post->category->name)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input type="text" class="form-control" name="author" id="author" value="{{ $post->author }}">
                    </div>

                    <div class="form-group">
                        <label for="featured">Imagen Principal</label>
                        <input type="file" class="form-control" name="featured" id="featured" value="">
                    </div>

                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="7">{{ $post->content }}</textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
