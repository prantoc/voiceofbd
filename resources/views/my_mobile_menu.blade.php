{{--  @foreach($items as $menu_item)        
    <li class="nav-item d-lg-none d-xl-none d-block">
      <a class="nav-link" href="{{ $menu_item->link() }}">
      {{ $menu_item->title }}
    </a></li>    
  @endforeach --}}

   @foreach($items as $menu_item)
  @php
        $originalItem = $menu_item;


        $listItemClass = null;
        $linkAttributes =  null;
        $caret = null;
        $icon = null;
        $drpdwnicon = null;

          $submenu = $menu_item->children;



          if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'data-bs-toggle="dropdown"';
            $caret = '<span class="caret"></span>';

            $drpdwnicon = 'dropdown-toggle nav-link';

            if(url($menu_item->link()) == url()->current()){
                $listItemClass = 'dropdown active';
            }else{
                $listItemClass = 'dropdown';
            }
        }

        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $menu_item->icon_class . '"></i>';
        }
      
        @endphp





    <li class="nav-item d-lg-none d-xl-none d-block {{$listItemClass}}">
      <a class="{{$drpdwnicon}} nav-link" {!! $linkAttributes ?? '' !!} id="navbarDropdown" role="button"  aria-expanded="false" href="{{ $menu_item->link() }}">
      {{ $menu_item->title }}
      {!! $icon !!}
    </a>


         
        {{-- @if(isset($submenu)) --}}
        @if(!$originalItem->children->isEmpty())
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($submenu as $item)
                <li><a style="color: #000;"  href="{{$item->url}}">{{$item->title}} </a></li>
            @endforeach
          </ul>
        @endif
        {{-- @endif --}}


  </li>    
  @endforeach