DB::table('orders')->insert(array(						
  array('price' => 400, 'product' => 'Laptop'),
  array('price' => 200, 'product' => 'Smartphone'),
  array('price' => 50,  'product' => 'Accessory'),
));										

$orders = DB::table('orders')
  ->where('price', '>', 100)
  ->get();

$averagePrice = DB::table('orders')->avg('price');			

DB::table('orders')
  ->where('price', 50)
  ->update(array('product' => 'Laptop', 'price' => 400));
