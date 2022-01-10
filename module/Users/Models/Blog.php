<?php
    namespace Module\Users\Models;

    use Illuminate\Database\Eloquent\Model;
    use module\Users\Models\User;

    class Blog extends Model
    {
        protected $table = 'blogs';
        protected $guarded = [];

        public function user()
        {
            return $this->belongsTo(User::class);
        }
    }

