@extends('layouts.base')

@section('mainContent')
<div class="containera">
    <div class="widtha">
        <div class="text">
          Current series
        </div>
        <ul>
            <?php
            $link = config('main');
            ?>
            @foreach ($link as $linko)
            <li>
                <img src="{{$linko["thumb"]}}" alt="" class="img3">
                <div>{{$linko["series"]}}</div>
            </li>
            @endforeach
        </ul>
    <div class="center3">
        <button>Load more</button>
    </div>
    </div>
</div>
@endsection