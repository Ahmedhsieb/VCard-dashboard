<?php

namespace Ahmed\Vcard\core\Database\contract;
interface IDatabase{
    public function select($table, $column);

    public function where($column, $compair, $value);

    public function andWhere($column, $compair, $value);

    public function orWhere($column, $compair, $value);

    public function join($tablename, $column1, $column2);

    public function getAll();

    public function getRow();

    public function insert($table, $data);

    public function update($table, $data);

    public function delete($table);
    public function excu();

    public function preparData($data);


    public function query();

    public function showError();

}