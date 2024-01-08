@extends('layout.admin')

@section('title','Create Test Series')

@section('main')
<div class="m-3">
    <div class="card">
        <div class="card-header">
            <h3>Create Test Series</h3>
        </div>
        <div class="card-body">
            <form action="">
                @csrf
                <div class="mb-3">
                    <label for="Test Series Name" class="form-label">Enter Test Series Name</label>
                    <input type="text" class="form-control" name="testname">
                </div>
                <div class="mb-3">
                    <label for="Test Series Price" class="form-label">Enter Price of Test Series</label>
                    <input type="number" class="form-control" name="testprice">
                </div>
                <div class="mb-3">
                    <label for="Test Series logo" class="form-label">Select TestSeries Logo</label>
                    <input type="file" class="form-control" name="testprice">
                </div>
                <div class="mb-3">
                    <label for="Test Series Short Description" class="form-label">Test Series Short Description</label>
                    <textarea name="test-series-des" id="" cols="30" rows="2" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="Test Series Description" class="form-label">Test Series Description</label>
                    <textarea name="test-series-des-full" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="Youtube link" class="form-label">Youtube Link</label>
                    <input type="text" class="form-control" name="ytlink">
                </div>
                <h4>SEO Section</h4>
                <div class="mb-3">
                    <label for="Youtube link" class="form-label">Youtube Link</label>
                    <input type="text" class="form-control" name="ytlink">
                </div>
                <div class="mb-3">
                    <label for="Meta Tag" class="form-label">Meta Tag</label>
                    <input type="text" class="form-control" name="meta-tag">
                </div>
                <div class="mb-3">
                    <label for="Meta Description" class="form-label">Meta Description</label>
                    <textarea name="meta_desc" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="Status" class="form-label">Status</label>
                    <input type="checkbox" value="Status">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Create Test</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection