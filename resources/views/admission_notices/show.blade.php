<div class="container">
    <h1>Admission Notice</h1>
    <h2>{{ $admissionNotice->title }}</h2>
    <p>{{ $admissionNotice->description }}</p>
    <a class="btn btn-primary" href="{{ route('admission-notices.index') }}">Back</a>
</div>
