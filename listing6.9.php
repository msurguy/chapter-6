$orders = DB::table('orders')->get(array('id','price'));