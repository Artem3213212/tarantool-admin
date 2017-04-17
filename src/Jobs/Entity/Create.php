<?php

namespace Jobs\Entity;

use Jobs\Space\Job;

class Create extends Job
{
    public $values;

    public function run()
    {
        $entity = $this->getSpace()->getRepository()->create(get_object_vars($this->values));
        $this->getMapper()->save($entity);

        return ['entity' => $entity];
    }
}