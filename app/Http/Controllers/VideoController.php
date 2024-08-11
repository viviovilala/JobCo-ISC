namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
protected $fillable = [
'title', 'description', 'url', 'duration',
'category_id', 'thumbnail', 'is_recommended',
];

public function category()
{
return $this->belongsTo(Category::class);
}

public static function recommendedForUser($user)
{
return static::where('is_recommended', true)
->where('category_id', $user->preferred_category_id);
}

public static function default()
{
return static::where('is_recommended', false)
->orderBy('created_at', 'desc');
}
}