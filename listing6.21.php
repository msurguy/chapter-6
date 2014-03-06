$usersOrders  = DB::table('users')
                  ->join('orders', 'users.id', '=', 'orders.user_id')
                  ->get();
