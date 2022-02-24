<form action="/container" method="POST" class="create d-flex justify-content-start align-items-center gap-3">
    @csrf
    @if($errors->has("name"))
        <div class="text-danger">{{ $errors->first("name") }}</div>
    @endif
    <div class="d-flex align-items-center gap-2">
        <input type="text" name="name" placeholder="Container name" autocomplete="off" class="form-control">
        <input type="submit" value="Create" class="btn btn-primary">
    </div>
</form>
