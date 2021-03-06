<?php
namespace App\Repositories\Category;

interface CategoryRepositoryInterface
{
    /**
     * Get 5 posts hot in a month the last
     * @return mixed
     */
    public function getAll();
    public function show();
    public function find($id);
    public function create($data);
    public function update($id, $data);
    public function delete($id);

}
