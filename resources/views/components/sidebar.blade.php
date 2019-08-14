@php
    $submenu_items = submenu(Route::currentRouteName());
@endphp

<div class="bg-dark border-right d-flex justify-content-between flex-column dark-bg-gradient-vertical" id="sidebar-wrapper">

    {{--  Side bar toggle  --}}
    <div class="text-center sidebar-heading p-3 list-group-options">
        <img src="{{ asset('images/logo.png') }}" alt="Fortnite Logo" width="30px">
    </div>

    {{--  Side bar middle part  --}}
    <div id="games-list" class="list-group list-group-flush justify-content-start">
        <a
            href="{{ route('fortnite') }}"
            class="{{ isActiveRoute('fortnite')  }} text-center list-group-item list-group-item-action"
        >
            <img src="{{ asset('images/fortnite.png') }}" alt="Fortnite Logo" width="30px">
        </a>
        <a href="{{route('lol')}}" class="{{ isActiveRoute('lol')  }} text-center list-group-item list-group-item-action">
            <img src="{{ asset('images/lol.png') }}" alt="LOL Logo" width="30px">
        </a>
        <a href="{{route('hearthstone')}}" class=" {{ isActiveRoute('hearthstone')  }} text-center list-group-item list-group-item-action">
            <img src="{{ asset('images/hearthstone.png') }}" alt="HearthStone Logo" width="30px">
        </a>
        <a href="{{route('csgo')}}" class="{{ isActiveRoute('csgo') }} text-center list-group-item list-group-item-action">
            <img src="{{ asset('images/csgo.png') }}" alt="CSGO Logo" width="30px">
        </a>
        <a href="{{route('overwatch')}}" class="{{ isActiveRoute('overwatch') }} text-center list-group-item list-group-item-action">
            <img src="{{ asset('images/overwatch.png') }}" alt="OverWatch Logo" width="30px">
        </a>
        <a href="{{route('dota2')}}" class="{{ isActiveRoute('dota2') }} text-center list-group-item list-group-item-action">
            <img src="{{ asset('images/dota.png') }}" alt="Dota Logo" width="30px">
        </a>
        <a href="{{route('wot')}}"
           class="{{ isActiveRoute('wot')}} text-center list-group-item list-group-item-action">
            <img src="{{ asset('images/wot.png') }}" alt="WOT Logo" width="30px">
        </a>
    </div>

    {{--  Side bar bottom  --}}
    <div class="list-group list-group-flush justify-content-end">
        <a href="#" class="text-center list-group-item list-group-item-action list-group-options">
            <i class="fa fa-moon-o" aria-hidden="true"></i>
        </a>
        <a href="#" class="text-center list-group-item list-group-item-action list-group-options">
            <i class="fa fa-cog" aria-hidden="true"></i>
        </a>
        <a href="#" class="text-center list-group-item list-group-item-action list-group-options">
            <i class="fa fa-question" aria-hidden="true"></i>
        </a>
    </div>
</div>

{{--@php dd($submenu_items) @endphp--}}
@if(!empty($submenu_items))
<div class="bg-dark dark-bg-gradient-vertical sub-menu d-flex justify-content-center align-items-center" style="min-width: 200px">
    <div>
       @foreach($submenu_items as $key => $value)
           <ul class="list-group ">
               <li class="list-group-item bg-transparent "> <a class="text-white" href="{{ route($key) }}">{{ $value }}</a> </li>
           </ul>
       @endforeach
    </div>
</div>
@endif