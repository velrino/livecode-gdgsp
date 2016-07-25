<?php

namespace App\Http\Controllers;

use App\Model\Users as UsersModel;
use Illuminate\Http\Request;
use Response;

class LivecodeController extends BaseController
{
  function project()
  {
    return ['Project' => "Livecode"];
  }

  function checkUser( $id )
  {
    $check = (new UsersModel)->checkUser( $id );
    if( !$check ) return $this->response->error(1, 404);
    return true;
  }

  function list()
  {
    $list = UsersModel::all()->toArray();
    if(empty($list)) return $this->response->noContent();
    return $list;
  }

  function get( $document )
  {
    $this->checkUser( $document );
    $get = (new UsersModel)->getUser( $document );
    return $get;
  }

  function insert(Request $request)
  {
    foreach ($request->input() as $key => $value)
    {
      $validator = (new UsersModel)->validate($value);
      if( $validator  ) return $this->response->errorBadRequest( $validator );
      $create = (new UsersModel)->insertUser($value);
    }
    return $this->response->array( ['message' => true] );
  }

  function update(Request $request, $document)
  {
    $this->checkUser( $document );
    $update = (new UsersModel)->updateUser( $document, $request->input() );
    return $this->response->array( ['message' => true] );
  }

  function delete( $document )
  {
    $delete = (new UsersModel)->deleteUser( $document );
    if(empty($delete)) return $this->response->error(1, 404);
    return $this->response->array( ['message' => true] );
  }
}
