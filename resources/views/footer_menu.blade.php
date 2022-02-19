 @foreach($items as $menu_item)        



      <a href="{{ $menu_item->link() }}" class="text-white d-lg-block mb-3 px-3">{{ $menu_item->title }}</a>



@endforeach