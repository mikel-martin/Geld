<div class="spending d-flex justify-content-between align-items-center border-bottom py-2">
    <div class="left d-flex justify-content-start align-items-center gap-3">
        <form action="/spending/{{ $spending->id }}" method="POST" class="new-spen">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-close"></button>
        </form>
        <span class="subject">{{ $spending->subject }}</span>
    </div>
    @if($spending->amount > 0)
        <span class="amount text-success">{{ $spending->amount }}€</span>
    @else
        <span class="amount text-danger">{{ $spending->amount }}€</span>
    @endif
</div>