<?php

namespace MA\PlatformBundle\Repository;

/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertRepository extends \Doctrine\ORM\EntityRepository
{
    public function myFindAll(){
        // $queryBuilder = $this->_em->createQueryBuilder()->select('a')->from($this->_entityName, 'a');
        // $queryBuilder = $this->createQueryBuilder('a');
        // $query = $queryBuilder->getQuery();
        // $results = $query->getResult();
        return $this->createQueryBuilder('a')->getQuery()->getResult;
    }

    public function myFindOne($id) {
        $qb = $this->createQueryBuilder('a');
        $qb->where('a.id = :id')->setParameter('id', $id);

        return $qb->getQuery()->getResult();
    }

    // function permettant de recuperer les candidatures d'une annonce donnee
    public function getAdvertWithApps(){
        $qb = $this->createQueryBuilder('a');
        $qb->leftJoin('a.applications', 'app')->addSelect('app');
        // $qb->innerJoin('a.applications', 'app', 'WITH', 'YEAR(app.date) > 2018);
    }

    // function permettant de recuperer les candidatures d'une annonce donnee
    public function getAdvertWithCat(array $categoryNames){
        $qb = $this->createQueryBuilder('a'); // --> Select * les annonces de la table 'Advert'
        // $qb->leftJoin('a.applications', 'app')->addSelect('app');
        $qb->innerJoin('a.categories', 'c')->addSelect('c');

        // je decide de filtrer sur le nom des mes categories
        $qb->where($qb->expr()->in('c.name', $categoryNames));

        return $qb->getQuery()->getResult();
    }

    public function findByAuthorAndDate($author, $year) {
        $qb = $this->createQueryBuilder('a');
        $qb->where('a.author = :author')->setParameter('author', $author)->andWhere('a.date = :year')->setParameter('year', $year)->orderBy('a.date','DESC');

        return $qb->getQuery()->getResult();
    }

    public function whereCurrentYear(QueryBuilder $qb) {
        $qb->andWhere('a.date BETWEEN :start AND :end')->setParameter('start', new \Datetime(date('Y') . '-01-01'))->setParameter('end', new \Datetime(date('Y') . '-12-31'));

        return $qb->getQuery()->getResult();
    }

    public function myFind(){
        $qb = $this->createQueryBuilder('a');

        $qb->where('a.author = :author')->setParameter('author', 'Fred');
        // $this->_em->createQuery('SELECT FROM NSAppBundle:ENTITY a where a.id=sdafsdf')

        $this->whereCurrentYear($qb);

        $qb->orderBy('a.date', 'DESC');

        return $qb->getQuery()->getResult();
    }
}