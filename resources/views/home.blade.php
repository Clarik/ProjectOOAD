@extends('master.master')

@section('content')
<div>
    @if (!is_null($error))
    <div class="alert alert-danger">
        {{ $error }}
      </div>
    @endif
</div>

@endsection