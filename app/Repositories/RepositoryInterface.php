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

    public function show($idinfo);

    public function showmyaccreditation($id);

    public function max($nomcolonne);
}
