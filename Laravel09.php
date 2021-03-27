<?php
/*課題３.「http://XXXXXX.jp/XXX というアクセスが来たときに、 
AAAControllerのbbbというAction に渡すRoutingの設定」*/
Route::get('XXX',
'AAAController@bbb');
?>
<?php
/*課題４．
admin/profile/create にアクセスしたら 
ProfileController の add Action に、
admin/profile/edit にアクセスしたら
ProfileController の edit Action に割り当てるように設定する*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create',
'Admin\ProfileController@add');
    Route::get('profile/edit',
'Admin\ProfileController@edit');
});
?>