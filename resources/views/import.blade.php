<!-- Add file to import data from -->
<form method = "post" action = "{{route('importPosts')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label for="formFile" class="form-label">Excel</label>
        <input class="form-control" type="file" id="excelFile" name = excelFile>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
        <div class = "col-auto">
            <button type="submit">Upload File</button>
        </div>
        </div>
        </form>