<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Validator;

class Users extends Eloquent
{
  protected $collection = 'Users';

  public function validate( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'document'        => 'required|string|digits_between:5,20',
    ]);
    if ($validator->fails()) return json_encode($validator->errors()->all());
    return false;
  }

  public function checkUser( $id ) : bool
  {
    return Users::where( 'document', (float) $id )->exists();
  }

  public function getUser( float $id )
  {
    return Users::where('document', $id)->first()->toArray();
  }

  public function insertUser( array $inputs )
  {
    Users::unguard();
    return Users::create( $inputs );
  }

  public function updateUser($id, array $inputs)
  {
    if(!empty($inputs['document'])) unset($inputs['document']);
    return Users::where('document', (float) $id)->update( $inputs, ['upsert' => true] );
  }

  public function deleteUser( $id )
  {
    return Users::where('document', (string) $id)->delete();
  }

}
