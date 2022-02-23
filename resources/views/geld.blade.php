@extends("layouts.main")

@section("content")

@if ($containers && count($containers) == 0)
    <p class="fs-4 text-center text-muted">There are no containers created yet</p>
@else
    <div id="containers" class="container d-flex flex-wrap justify-content-center align-items-baseline gap-5 mb-5">
        @foreach($containers as $container)
            @include("container.show", ["container" => $container])
        @endforeach
    </div>
@endif

@endsection