<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav id="sidebar">
    <ul class="list-unstyled menu-categories" id="accordionExample">
        <li class="menu {{ active_class(['/*']) }} main-single-menu">
            <a href="{{ url('/') }}" class="dropdown-toggle">
                <i class="las la-home"></i>
                <span>{{__('Dashboard')}}</span>
            </a>
        </li>
        <li class="menu  main-single-menu">
            <a href="{{ url('/') }}" class="dropdown-toggle">
                <i class="las la-clock"></i>
                <span>{{__('Reaction Time')}}</span>
            </a>
        </li>
        <li class="menu  main-single-menu">
            <a href="javascript:void(0)" class="dropdown-toggle">
                <i class="las la-memory"></i>
                <span>{{__('Visual Memory')}}</span>
            </a>
        </li>
        <li class="menu  main-single-menu">
            <a href="javascript:void(0)" class="dropdown-toggle">
                <i class="fa fa-sort-numeric-asc"></i>
                <span>{{__('Number Memory')}}</span>
            </a>
        </li>
        <li class="menu  main-single-menu">
            <a href="javascript:void(0)" class="dropdown-toggle">
                <i class="las la-memory"></i>
                <span>{{__('Verbal Memory')}}</span>
            </a>
        </li>
        <li class="menu  main-single-menu">
            <a href="javascript:void(0)" class="dropdown-toggle">
                <i class="fa fa-keyboard-o"></i>
                <span>{{__('Typing')}}</span>
            </a>
        </li>
        <li class="menu  main-single-menu">
            <a href="javascript:void(0)" class="dropdown-toggle">
                <i class="las fa-graduation-cap"></i>
                <span>{{__('Aim Trainer')}}</span>
            </a>
        </li>
        <li class="menu  main-single-menu">
            <a href="javascript:void(0)" class="dropdown-toggle">
                <i class="fa fa-test"></i>
                <span>{{__('Chimp Test')}}</span>
            </a>
        </li>
        <li class="menu main-single-menu">
            <a href="javascript:void(0)" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i class="fa fa-first-order"></i>
                    <span>Sequence Memory</span>
                </div>
            </a>
        </li>
    </ul>
</nav>
