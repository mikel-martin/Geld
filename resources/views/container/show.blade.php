<div>
    <div class="rounded-top shadow text-white" style="width: 23rem;">
        <div class="d-flex justify-content-between align-items-center bg-lighter px-4 py-2">
            <h3 class="text-uppercase m-0">{{ $container->name }}</h3>
            <form action="/container/{{ $container->id }}" method="POST" class="m-0">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-close"></button>
            </form>
        </div>
        <div class="d-flex flex-column justify-content-center rounded-bottom bg-light gap-3 px-4 py-3">
            @include("spending.create")
            <div class="spendings">
                @if($container->spendings && count($container->spendings) == 0)
                    <span class="text-muted">There are no expenses yet</span>
                @endif
                @foreach($container->spendings as $spending)
                    @include("spending.show", ["spending" => $spending])
                @endforeach
            </div>
            @if($container->spendings && count($container->spendings) > 0)
                <div class="balance d-flex justify-content-end">
                    @if($container->balance > 0)
                        <span class="result fs-6 fw-bold">Total: {{ $container->balance }}€</span>
                    @else
                        <span class="result fs-6 fw-bold text-danger">Total: {{ $container->balance }}€</span>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>