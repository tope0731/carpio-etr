@extends('layout')
@section('content')

<div class="container mt-5">
    <h3 class="text-center">Category Edit</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('category.update', $category->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="fname">Campus</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="{{ $category->catname }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="admission">Admission</label>
                        <input type="text" class="form-control" id="admission" name="admission" value="{{ $category->catname }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="fchoice">First Choice Program</label>
                        <input type="text" class="form-control" id="fchoice" name="fchoice" value="{{ $category->catname }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="schoice">Second Choice Program</label>
                        <input type="text" class="form-control" id="schoice" name="schoice" value="{{ $category->catname }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="lchoice">Third Choice Program</label>
                        <input type="text" class="form-control" id="lchoice" name="lchoice" value="{{ $category->catname }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="fname">Student First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="{{ $category->catname }}">
                    </div>
                    <div class="form-group">
                        <label for="mname">Student Middle Name</label>
                        <input type="text" class="form-control" id="mname" name="mname" value="{{ $category->catname }}">
                    </div>
                    <div class="form-group">
                        <label for="lname">Student First Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" value="{{ $category->catname }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option disabled>Select Status</option>
                            <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>True</option>
                            <option value="2" {{ $category->status == 2 ? 'selected' : '' }}>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
<style>
    .form-area {
        padding: 20px;
        background-color: #b3e5fc;
    }
</style>
@endpush
