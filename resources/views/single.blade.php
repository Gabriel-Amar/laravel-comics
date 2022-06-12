@extends('layouts.base')

@section('mainSingle')

<?php
$link = config('comics');

?>
{{-- <li>
            @foreach ($link as $index => $value) {
                
                    @if($index == 5)
                    {{$value['description']}};
                    @endif
                
            }
            @endforeach
        </li> --}}
            
@endsection