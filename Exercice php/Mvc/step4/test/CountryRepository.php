<?php

// namespace App\test;

// use Doctrine\ORM\EntityRepository;

// class CountryRepository extends EntityRepository
// {

//     public function searchByLabel($label)
//     {
//         //$queryBuilder = $this->_em->createQueryBuilder()
//         $queryBuilder = $this->_em->createQueryBuilder()
//             ->select('c')
//             ->from(Country::class, 'c')
//             ->where('c.label=:label')
//             ->setParameter('label', $label);

//         $query = $queryBuilder->getQuery();

//         return $query->getOneOrNullResult();
//     }

//     public function deleteById($id)
//     {
//         $queryBuilder = $this->_em->createQueryBuilder();
//         $queryBuilder->delete(Country::class, 'c')
//             ->where('c.id=:id')
//             ->setParameter('id', $id);

//         $query = $queryBuilder->getQuery();

//         return $query->execute();
//     }
// } // fin de classe CountryRepository
