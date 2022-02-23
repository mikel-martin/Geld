<form action="/spending" method="POST" class="new-spen">
    @csrf
    <input type="hidden" name="container_id" value="{{ $container->id }}">
    <div class="d-flex justify-content-between gap-3">
        <input type="text" name="subject" placeholder="Subject" autocomplete="off" autocapitalize="on" class="form-control">
        <input type="number" name="amount" placeholder="Amount" autocomplete="off" class="form-control">
    </div>
    <input type="submit" value="add" hidden>
</form>