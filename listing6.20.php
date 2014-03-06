$products = DB::table('products')
                ->groupBy('name')
                ->get();
