$users  = DB::table('users')
            ->whereBetween('credit', array(100,300))
            ->get();
