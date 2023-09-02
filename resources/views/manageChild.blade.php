@foreach($childs as $child)
<div class="menu-sub menu-sub-accordion">
    <div class="menu-item">
        <a class="menu-link" href="{{url('') .'/'. $child->routes}}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">{{$child->title}}</span>
        </a>
    </div>
</div>
@endforeach

