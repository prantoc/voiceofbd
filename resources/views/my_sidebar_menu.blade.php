 @foreach($items as $menu_item)        
  <div class="col-sm-2 csDrpdwnItm">
      <a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
  </div>
@endforeach