<?php

namespace App\Repositories;
use Illuminate\Http\Request;
/**
 *
 * @author pc
 */
interface RepositoryInterface {

    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

<<<<<<< HEAD
    public function show($idinfo);
=======
    public function show($id);
    
    public function max($nomcolonne);
>>>>>>> d4462b19c31814e2f79fefe22a864b99eeb0d0a9
}
