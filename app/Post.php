<?php
//This is the Post "Model the view it's talking to is posts/index.blade.php
namespace App;

use Illuminate\Database\Eloquent\Model;
//import carbon
use Carbon\Carbon;
//import soft deletes
//use Illuminate\Database\Eloquent\SoftDeletes;
//article model used to interact with the "posts" table
class Post extends Model
{
    //allows deletion of records but keeps them in DB
//    use SoftDeletes;
    
    //specifies table this model interacts with
    //whitelist
    protected $fillable =[
         'content', 'user_id', 'live', 'post_on'
        
    ];
    
    //specify dates
    protected $dates = ['post_on'];
    
    
    //additional option instead of fillable
    //protected $garded =['id'];
    
    //mutator for casting string to boolean
    public function setLiveAttribute($value){
        $this->attributes['live'] = (boolean)($value);
    }
    //mutator for post_on date edit page
    public function setPostOnAttribute($value){
        $this->attributes['post_on'] = Carbon::parse($value); 
    }
    
    //accessor for setting "show more" length in posts
    public function getShortContentAttribute(){
        return substr($this->content, 0 , random_int(60,150));
    }

}
