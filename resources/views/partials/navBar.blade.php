<ul class="nav d-flex justify-content-center bg-info text-light mb-5">
    <li class="nav-item"><a  href="{{route('fruits')}}" class="nav-link text-light @if(request()->routeIs('fruits')) active @else '' @endif">fruits</a></li>
    <li class="nav-item"><a  href="{{route('légumes')}}" class="nav-link text-light @if(request()->routeIs('légumes')) active @else '' @endif">légumes</a></li>

</ul>