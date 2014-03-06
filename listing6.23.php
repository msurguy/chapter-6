// Right Join
join('orders', 'users.id', '=', 'orders.user_id','right')

// Right Outer Join
join('orders', 'users.id', '=', 'orders.user_id','right outer')

// Excluding Right Outer Join
join('orders', 'users.id', '=', 'orders.user_id','right outer')
  ->where('orders.user_id',NULL)

// Left Join
join('orders', 'users.id', '=', 'orders.user_id','left')

// Left Outer Join
join('orders', 'users.id', '=', 'orders.user_id','left outer')

// Excluding Left Outer Join
join('orders', 'users.id', '=', 'orders.user_id','left outer')
  ->where('orders.user_id',NULL)

// Cross join
join('orders', 'users.id', '=', 'orders.user_id','cross')