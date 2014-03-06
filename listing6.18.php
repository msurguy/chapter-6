$products  = DB::table('products')
                ->orderBy('price', 'asc')
                ->get();
