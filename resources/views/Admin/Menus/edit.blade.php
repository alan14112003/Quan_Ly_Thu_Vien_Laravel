@extends('Admin.main')

@section('head')
<script src="//cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>
@endsection

@section('content')
<form class="pt-3" method="POST" action="">
    <div class ='form-group'>
        <label for='id'>Id</label>
        <input  type='text' name='id' class='form-control' id='id' value="{{ $category->id }}" placeholder='Id'>
    </div>
    <div class='form-group'>
        <label for='name'>Tên Thể Loại</label>
        <input  type='text' name='name' class='form-control' id='name' value="{{ $category->name }}" placeholder='Tên Thể Loại'>
    </div>
    <button type='submit' class='btn btn-primary mr-2'>Update</button>
    <a href='/admin/menus/list' type='submit' class='btn btn-light'>Cancel</a>

    @csrf
    
</form>
@endsection

@section('footer')

<script>
  ClassicEditor
          .create( document.querySelector( '#dia_chi' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
@endsection