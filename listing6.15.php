$users  = DB::table('users')
            ->where('last_name', 'like','Sm%')
            ->where('age','<' ,50)
            ->get();
