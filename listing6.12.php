DB::table('orders')
  ->where('price','>','50')
  ->update(array('price' => 100));