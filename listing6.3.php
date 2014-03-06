// app/models/User.php
class User extends Eloquent {
  public function orders()
  {
    return $this->hasMany('Order');
  }
}

// app/models/Order.php
class Order extends Eloquent {}						

// application code
$user = new User;								
$user->name = "John Doe";							
$user->save();								

$order = new Order;								
$order->price   = 100;							
$order->product = "TV";							

$user->orders()->save($order);
