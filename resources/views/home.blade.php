@extends('layouts.app')

@section('content')
{{-- @if (!Auth::guest())
    <script type="text/javascript">
        window.location = "{{ route('page.feed') }}";
    </script>
@endif --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are logged in! Under construction
                    @foreach ($categories as $category)
                        <p>{{ $category->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
