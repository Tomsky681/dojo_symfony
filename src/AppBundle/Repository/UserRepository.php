<?php

namespace AppBundle\Repository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function getPagination($page, $nbParPage)
    {
        $qb = $this->createQueryBuilder('u');
        $qb->setFirstResult(($page - 1) * $nbParPage)
            ->setMaxResults($nbParPage);

        return new Paginator($qb->getQuery());
    }
}
