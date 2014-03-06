$usersOrders  = DB::table('users')
                  ->leftJoin('orders', 'users.id', '=', 'orders.user_id')
                  ->get();
