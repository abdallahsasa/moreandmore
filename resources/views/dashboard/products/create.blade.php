@extends('dashboard.layouts.app')
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Add New Product</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="index.html" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">Add New Product</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlSelect1">Category Name</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Product Name</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                   placeholder="Enter Product Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1">Product Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Product Price</label>
                            <input type="number" class="form-control" aria-describedby="emailHelp"
                                   placeholder="Enter Product Price">
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block" for="exampleFormControlFile1">Product Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection