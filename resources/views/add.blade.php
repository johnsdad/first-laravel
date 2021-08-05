@component('layout.main')

    <div class="container bg-white rounded mt-3 mb-3 p-4">
        <div class="row">
            <div class="col-md-12 mt-3">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="category">Select Category</label>
                       <select class="form-control" name="category" required>
                           <option>-select-</option>
                           @foreach ($categories as $category)
                           <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Title</label>
                        <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Enter Here" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Enter Here" >
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Description</label>
                       <textarea name="descrioption" class="form-control" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Save" class="btn btn-success">
                        <input type="reset" name="reset" value="Clear" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>


@endcomponent

