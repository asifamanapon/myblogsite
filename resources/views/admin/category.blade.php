@extends('admin.layouts.app')

@section('title')

Categories

@endsection

@php
    $page = 'Categories';
@endphp


@section('mainpart')


<div class="card" >
    <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="card-title">Categories</h3>
        <button class="btn btn-primary"  data-toggle="modal" data-target="#AddCategoryModal">Add Category</button>
    </div>

    <div class="card-body">

        <table class="table table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($categoryData as $key=>$item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a class="btn btn-dark btn-sm" href="#">Edit</a>
                        <a class="btn btn-danger btn-sm" href="#">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

</div>


  <!-- Category add Modal-->
  <div class="modal fade" id="AddCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <form action="{{route('admin.update')}}" method="POST">
           @csrf
          <div class="modal-body">
            
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="name"
                    placeholder="Enter Category Name">
                    
                </div>
                <div class="form-group">
                    <label for="category_name">Category Description
                    </label>
                    <textarea class="form-control" name="description" rows="5"
                    placeholder="Enter Categories Description"></textarea>
                    
                </div>
            
          </div>
          <div class="modal-footer">
              <a class="btn btn-light" type="button" data-dismiss="modal">Cancel</a>
              <button class="btn btn-primary" type="submit">Add category</button>
          </div>
        </form>
      </div>
  </div>
</div>
@endsection