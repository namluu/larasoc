<ul class="main-menu list-inline">
@foreach ($menu as $item)
    <li class="list-inline-item"><a href="">{{ $item['name'] }}</a></li>
@endforeach
</ul>