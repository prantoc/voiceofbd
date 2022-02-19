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





    <li class="nav-item d-lg-block d-xl-block d-none {{$listItemClass}}">
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





{{-- @foreach($items as $menu_item)



@php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'class="dropdown-toggle" data-bs-toggle="dropdown"';
            $idLinkAttributes =  'id="navbarDropdown" aria-labelledby="navbarDropdown"';
            $caret = '<span class="caret"></span>';

            if(url($item->link()) == url()->current()){
                $listItemClass = 'dropdown active';
            }else{
                $listItemClass = 'dropdown';
            }
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    @endphp



     <li class="nav-item d-lg-block d-xl-block d-none {{ $listItemClass }}">
        <a class="nav-link" {!! $linkAttributes ?? '' !!} {!! $idLinkAttributes ?? '' !!} role="button" data-bs-toggle="dropdown" aria-expanded="false" href="{{ $menu_item->url }}">{{ $menu_item->title }}
        </a>
       @php
            $submenu = $menu_item->children;
        @endphp --}}

{{--         @if(isset($submenu))
             <ul class="dropdown-menu" aria-labelledby="{{$idLinkAttributes}}" {!! $idLinkAttributes ?? '' !!}>
                @if(!$originalItem->children->isEmpty())
        @include('voyager::menu.bootstrap', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif
            </ul>
        @endif
    </li>
@endforeach --}}


























{{-- @foreach ($items as $item)

    @php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
            $caret = '<span class="caret"></span>';

            if(url($item->link()) == url()->current()){
                $listItemClass = 'dropdown active';
            }else{
                $listItemClass = 'dropdown';
            }
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    @endphp

    <li class="nav-item nav-item d-lg-block d-xl-block d-none {{ $listItemClass }}">
        <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" class="nav-item-child" {!! $linkAttributes ?? '' !!}>
            {!! $icon !!}
            {{ $item->title }}
            {!! $caret !!}
        </a>
       

        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             @if(!$originalItem->children->isEmpty())
        @include('voyager::menu.bootstrap', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif
          </ul>
    </li>
@endforeach --}}
  