@extends('layouts.app')

@section('content')
<div class="card card-default">
   <div class="card-header">
    {{ isset($category)  ? 'Edit Category' : 'Create category' }}
   </div>
   <div class="card-body">
    @include('partials.errors')
       <form action="" mathod="">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="id" class="form-control" name="name" value="{{ isset($category) ? $category->name : '' }}">
        </div>
        <div class="form-group">
        <button class="btn btn-success">
          {{ isset($category) ? 'Update Category': 'Add Category' }}
        </button>
      </div>
       </form>
   </div>
</div>

@endsection