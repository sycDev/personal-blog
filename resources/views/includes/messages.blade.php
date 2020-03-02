<div class="mt-3">
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
      @endforeach
    @endif
</div>

<div class="ml-3 mr-3">
@if (session()->has('message'))
    <p class="alert alert-success">{{ session('message') }}</p>
@endif
</div>