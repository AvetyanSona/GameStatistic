<style>
    .empty-block {
        width: 100%;
        min-height: 67px;
        border-bottom: 1px solid #1b2535;
    }
</style>

<div class="bg-dark border-right d-flex justify-content-between flex-column dark-bg-gradient-vertical" id="sidebar-wrapper">

    {{--  Side bar toggle  --}}
    <div class="text-center sidebar-heading p-3 list-group-options">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="30px">
    </div>

    {{--  Side bar middle part  --}}
    <div id="games-list" class="list-group list-group-flush justify-content-start">
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


<div class="bg-dark dark-bg-gradient-vertical sub-menu d-flex flex-column align-items-center" style="min-width: 200px">
    <div class="empty-block">

    </div>
    <div class="full-width mt-4">
        <ul class="list-group text-center">
           <li class="list-group-item bg-transparent no-border">
               <a class="text-white" href="{{ route('wot.statistics') }}">Statistics</a>
           </li>
           <li class="list-group-item bg-transparent no-border">
               <a class="text-white" href="{{ route('wot.news') }}">News</a>
           </li>
        </ul>
    </div>
</div>
