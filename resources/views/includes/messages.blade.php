<div class="mt-3">
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
      @endforeach
    @endif
</div>