DB::table('orders')
  ->where('product','=','Smartphone')
  ->delete();
