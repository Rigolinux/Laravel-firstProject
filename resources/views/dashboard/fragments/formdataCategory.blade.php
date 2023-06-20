<label for="">Title</label>
<input type="text" name="name" placeholder="Title"
{{-- you can set old values when i need it--}}
value="{{ old('name',$category->name)}}"
>

<label for="">Slug</label>
<input type="text" name="slug" placeholder="Slug"
value="{{ old('slug',$category->slug)}}"
>
