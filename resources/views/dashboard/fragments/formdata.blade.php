<label for="">Title</label>
<input type="text" name="title" placeholder="Title"
{{-- you can set old values when i need it--}}
value="{{ old('title',$post->title)}}"
>

<label for="">Slug</label>
<input type="text" name="slug" placeholder="Slug"
value="{{ old('slug',$post->slug)}}"
>

<label for="">Description</label>
<input type="text" name="description" placeholder="Description"
value="{{ old('description',$post->description)}}"
>

<label for="">Content</label>
<textarea name="content" id="" cols="30" rows="10">
    {{ old('content',$post->content)}}
</textarea>

<label for="">Category</label>
<select name="category_id">
    @foreach ($categories as $name =>$id)
        <option  
       "{{old('category_id', $post->category_id ) == $id ? 'selected': ''}}"
        value="{{$id}}">{{$name}}</option>
    @endforeach
</select>

<label>Posted</label>
<select name="posted" id="">
    <option 
    {{old('posted',$post->posted) == 'yes' ? 'selected': ''}}
    value="yes">Yes</option>
    <option
    {{old('posted',$post->posted) == 'no' ? 'selected': ''}}
    value="no">No</option>
</select>

@if (@isset($task) && $task == 'edit')
    <label for="">Images</label>
    <input type="file" name="image" >
@endif
