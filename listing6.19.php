$products = DB::table('products')
                ->where('name','like','%so%')
                ->where('price','>', 100)
                ->orderBy('price', 'asc')
                ->get();
