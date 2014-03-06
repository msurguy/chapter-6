$orders  = DB::table('orders')
            ->where('processed', 1)
            ->orWhere('price','<=' ,250)
            ->delete();
