<?php

Namespace App\Repositories;

use App\Abstracts\Repository as RepositoryAbstract;
use App\Models\CustomerType as CustomerTypeModel;

class CustomerType extends RepositoryAbstract
{
    protected string $model = CustomerTypeModel::class;
}
