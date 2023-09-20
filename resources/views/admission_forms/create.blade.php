<div class="container">
    <h2>Upload a File</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admission-forms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <input type="file" name="file" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
