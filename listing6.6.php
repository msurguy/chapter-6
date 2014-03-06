$order = DB::table('orders')->find(3);

// If there is a record with ID “3”, The $order variable will contain:
object(stdClass)#157 (3) {
  ["id"]=>
  string(1) "3"
  ["price"]=>
  string(3) "200"
  ["product"]=>
  string(10) "Smartphone"
}
