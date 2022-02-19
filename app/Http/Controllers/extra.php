/*if($from != null && $to != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->orderby('created_at', 'desc')->get();
        }elseif ($from != null && $category != null) {
            $data['posts'] = Post::whereDate('created_at','=', $from)->whereCategoryId($category)->orderby('created_at', 'desc')->get();
        }elseif ($from != null && $to != null && $category != null) {
            $data['posts'] = Post::whereDate('created_at','=', $from)->whereDate('created_at', '<=', $to)->whereCategoryId($category)->orderby('created_at', 'desc')->get();
        }elseif ($from != null) {
            $data['posts'] = Post::whereDate('created_at','=', $from)->orderby('created_at', 'desc')->get();
        }elseif($to != null) {
            $data['posts'] = Post::whereDate('created_at','=', $to)->orderby('created_at', 'desc')->get();
        }elseif($category != null) {
            $data['posts'] = Post::where('category_id','=',$category)->orderby('created_at', 'desc')->get();
        }elseif($division != null) {
            $data['posts'] = Post::where('location_id','=',$division)->orderby('created_at', 'desc')->get();
        }elseif($upazila != null) {
            $data['posts'] = Post::where('location_id','=',$upazila)->orderby('created_at', 'desc')->get();
        }elseif($keyword != null) {
            $data['posts'] = Post::where('title', 'LIKE', "%{$keyword}%")->orWhere('body', 'LIKE', "%{$keyword}%")->orderby('created_at', 'desc')->get();
        }else{
            $data['posts'] = Post::orderby('created_at', 'desc')->get();
        }*/

       /* if($from != null && $to != null && $category != null && $division != null && $upazila != null && $keyword != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->whereCategoryId($category)->where('location_id','=',$division)->where('location_id','=',$upazila)->where('title', 'LIKE', "%{$keyword}%")->orderby('created_at', 'desc')->get();
        }elseif($from != null && $to != null && $category != null && $division != null && $upazila != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->whereCategoryId($category)->where('location_id','=',$division)->where('location_id','=',$upazila)->orderby('created_at', 'desc')->get();
        }elseif($from != null && $to != null && $category != null && $division != null && $keyword != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->whereCategoryId($category)->where('location_id','=',$division)->where('title', 'LIKE', "%{$keyword}%")->orderby('created_at', 'desc')->get();
        }elseif($from != null && $to != null && $category != null && $keyword != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->whereCategoryId($category)->where('title', 'LIKE', "%{$keyword}%")->orderby('created_at', 'desc')->get();
        }elseif($from != null && $to != null && $division != null && $upazila != null && $keyword != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->where('location_id','=',$division)->where('location_id','=',$upazila)->where('title', 'LIKE', "%{$keyword}%")->orderby('created_at', 'desc')->get();
        }elseif($from != null && $category != null && $division != null && $upazila != null && $keyword != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereCategoryId($category)->where('location_id','=',$division)->where('location_id','=',$upazila)->where('title', 'LIKE', "%{$keyword}%")->orderby('created_at', 'desc')->get();
        }elseif($to != null && $category != null && $division != null && $upazila != null && $keyword != null) {
            $data['posts'] = Post::whereDate('created_at', '<=', $to)->whereCategoryId($category)->where('location_id','=',$division)->where('location_id','=',$upazila)->where('title', 'LIKE', "%{$keyword}%")->orderby('created_at', 'desc')->get();
        }elseif($from != null && $to != null && $category != null && $division != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->whereCategoryId($category)->where('location_id','=',$division)->orderby('created_at', 'desc')->get();
        }elseif($from != null && $to != null && $category != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->whereCategoryId($category)->orderby('created_at', 'desc')->get();
        }elseif($from != null && $to != null && $division != null && $upazila != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->where('location_id','=',$division)->where('location_id','=',$upazila)->orderby('created_at', 'desc')->get();
        }if($from != null && $to != null && $category != null && $division != null && $upazila != null) {
            $data['posts'] = Post::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->whereCategoryId($category)->where('location_id','=',$division)->where('location_id','=',$upazila)->where('title', 'LIKE', "%{$keyword}%")->orderby('created_at', 'desc')->get();
        }*/





        /*elseif ($from != null && $category != null) {
            $data['posts'] = Post::whereDate('created_at','=', $from)->whereCategoryId($category)->orderby('created_at', 'desc')->get();
        }elseif ($from != null && $to != null && $category != null) {
            $data['posts'] = Post::whereDate('created_at','=', $from)->whereDate('created_at', '<=', $to)->whereCategoryId($category)->orderby('created_at', 'desc')->get();
        }elseif ($from != null) {
            $data['posts'] = Post::whereDate('created_at','=', $from)->orderby('created_at', 'desc')->get();
        }elseif($to != null) {
            $data['posts'] = Post::whereDate('created_at','=', $to)->orderby('created_at', 'desc')->get();
        }elseif($category != null) {
            $data['posts'] = Post::where('category_id','=',$category)->orderby('created_at', 'desc')->get();
        }elseif($division != null) {
            $data['posts'] = Post::where('location_id','=',$division)->orderby('created_at', 'desc')->get();
        }elseif($upazila != null) {
            $data['posts'] = Post::where('location_id','=',$upazila)->orderby('created_at', 'desc')->get();
        }elseif($keyword != null) {
            $data['posts'] = Post::where('title', 'LIKE', "%{$keyword}%")->orWhere('body', 'LIKE', "%{$keyword}%")->orderby('created_at', 'desc')->get();
        }else{
            $data['posts'] = Post::orderby('created_at', 'desc')->get();
        }*/