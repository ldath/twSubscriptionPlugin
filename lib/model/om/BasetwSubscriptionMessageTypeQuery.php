<?php


/**
 * Base class that represents a query for the 'tw_subscription_message_type' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.6 on:
 *
 * Thu Sep 27 23:40:08 2012
 *
 * @method     twSubscriptionMessageTypeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     twSubscriptionMessageTypeQuery orderByCode($order = Criteria::ASC) Order by the code column
 *
 * @method     twSubscriptionMessageTypeQuery groupById() Group by the id column
 * @method     twSubscriptionMessageTypeQuery groupByCode() Group by the code column
 *
 * @method     twSubscriptionMessageTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     twSubscriptionMessageTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     twSubscriptionMessageTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     twSubscriptionMessageTypeQuery leftJointwSubscriptionMessageTypeI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the twSubscriptionMessageTypeI18n relation
 * @method     twSubscriptionMessageTypeQuery rightJointwSubscriptionMessageTypeI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the twSubscriptionMessageTypeI18n relation
 * @method     twSubscriptionMessageTypeQuery innerJointwSubscriptionMessageTypeI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the twSubscriptionMessageTypeI18n relation
 *
 * @method     twSubscriptionMessageTypeQuery leftJointwSubscriptionTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the twSubscriptionTemplate relation
 * @method     twSubscriptionMessageTypeQuery rightJointwSubscriptionTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the twSubscriptionTemplate relation
 * @method     twSubscriptionMessageTypeQuery innerJointwSubscriptionTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the twSubscriptionTemplate relation
 *
 * @method     twSubscriptionMessageTypeQuery leftJointwSubscriptionMessage($relationAlias = null) Adds a LEFT JOIN clause to the query using the twSubscriptionMessage relation
 * @method     twSubscriptionMessageTypeQuery rightJointwSubscriptionMessage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the twSubscriptionMessage relation
 * @method     twSubscriptionMessageTypeQuery innerJointwSubscriptionMessage($relationAlias = null) Adds a INNER JOIN clause to the query using the twSubscriptionMessage relation
 *
 * @method     twSubscriptionMessageTypeQuery leftJointwSubscriptionListInvitation($relationAlias = null) Adds a LEFT JOIN clause to the query using the twSubscriptionListInvitation relation
 * @method     twSubscriptionMessageTypeQuery rightJointwSubscriptionListInvitation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the twSubscriptionListInvitation relation
 * @method     twSubscriptionMessageTypeQuery innerJointwSubscriptionListInvitation($relationAlias = null) Adds a INNER JOIN clause to the query using the twSubscriptionListInvitation relation
 *
 * @method     twSubscriptionMessageTypeQuery leftJointwSubscriptionMailQueue($relationAlias = null) Adds a LEFT JOIN clause to the query using the twSubscriptionMailQueue relation
 * @method     twSubscriptionMessageTypeQuery rightJointwSubscriptionMailQueue($relationAlias = null) Adds a RIGHT JOIN clause to the query using the twSubscriptionMailQueue relation
 * @method     twSubscriptionMessageTypeQuery innerJointwSubscriptionMailQueue($relationAlias = null) Adds a INNER JOIN clause to the query using the twSubscriptionMailQueue relation
 *
 * @method     twSubscriptionMessageType findOne(PropelPDO $con = null) Return the first twSubscriptionMessageType matching the query
 * @method     twSubscriptionMessageType findOneOrCreate(PropelPDO $con = null) Return the first twSubscriptionMessageType matching the query, or a new twSubscriptionMessageType object populated from the query conditions when no match is found
 *
 * @method     twSubscriptionMessageType findOneById(int $id) Return the first twSubscriptionMessageType filtered by the id column
 * @method     twSubscriptionMessageType findOneByCode(string $code) Return the first twSubscriptionMessageType filtered by the code column
 *
 * @method     array findById(int $id) Return twSubscriptionMessageType objects filtered by the id column
 * @method     array findByCode(string $code) Return twSubscriptionMessageType objects filtered by the code column
 *
 * @package    propel.generator.plugins.twSubscriptionPlugin.lib.model.om
 */
abstract class BasetwSubscriptionMessageTypeQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasetwSubscriptionMessageTypeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'twSubscriptionMessageType', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new twSubscriptionMessageTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     twSubscriptionMessageTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return twSubscriptionMessageTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof twSubscriptionMessageTypeQuery) {
            return $criteria;
        }
        $query = new twSubscriptionMessageTypeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   twSubscriptionMessageType|twSubscriptionMessageType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = twSubscriptionMessageTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(twSubscriptionMessageTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   twSubscriptionMessageType A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `CODE` FROM `tw_subscription_message_type` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new twSubscriptionMessageType();
            $obj->hydrate($row);
            twSubscriptionMessageTypePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return twSubscriptionMessageType|twSubscriptionMessageType[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|twSubscriptionMessageType[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return twSubscriptionMessageTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(twSubscriptionMessageTypePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return twSubscriptionMessageTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(twSubscriptionMessageTypePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return twSubscriptionMessageTypeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(twSubscriptionMessageTypePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return twSubscriptionMessageTypeQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(twSubscriptionMessageTypePeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query by a related twSubscriptionMessageTypeI18n object
     *
     * @param   twSubscriptionMessageTypeI18n|PropelObjectCollection $twSubscriptionMessageTypeI18n  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   twSubscriptionMessageTypeQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBytwSubscriptionMessageTypeI18n($twSubscriptionMessageTypeI18n, $comparison = null)
    {
        if ($twSubscriptionMessageTypeI18n instanceof twSubscriptionMessageTypeI18n) {
            return $this
                ->addUsingAlias(twSubscriptionMessageTypePeer::ID, $twSubscriptionMessageTypeI18n->getId(), $comparison);
        } elseif ($twSubscriptionMessageTypeI18n instanceof PropelObjectCollection) {
            return $this
                ->usetwSubscriptionMessageTypeI18nQuery()
                ->filterByPrimaryKeys($twSubscriptionMessageTypeI18n->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBytwSubscriptionMessageTypeI18n() only accepts arguments of type twSubscriptionMessageTypeI18n or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the twSubscriptionMessageTypeI18n relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return twSubscriptionMessageTypeQuery The current query, for fluid interface
     */
    public function jointwSubscriptionMessageTypeI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('twSubscriptionMessageTypeI18n');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'twSubscriptionMessageTypeI18n');
        }

        return $this;
    }

    /**
     * Use the twSubscriptionMessageTypeI18n relation twSubscriptionMessageTypeI18n object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   twSubscriptionMessageTypeI18nQuery A secondary query class using the current class as primary query
     */
    public function usetwSubscriptionMessageTypeI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->jointwSubscriptionMessageTypeI18n($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'twSubscriptionMessageTypeI18n', 'twSubscriptionMessageTypeI18nQuery');
    }

    /**
     * Filter the query by a related twSubscriptionTemplate object
     *
     * @param   twSubscriptionTemplate|PropelObjectCollection $twSubscriptionTemplate  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   twSubscriptionMessageTypeQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBytwSubscriptionTemplate($twSubscriptionTemplate, $comparison = null)
    {
        if ($twSubscriptionTemplate instanceof twSubscriptionTemplate) {
            return $this
                ->addUsingAlias(twSubscriptionMessageTypePeer::ID, $twSubscriptionTemplate->getTypeId(), $comparison);
        } elseif ($twSubscriptionTemplate instanceof PropelObjectCollection) {
            return $this
                ->usetwSubscriptionTemplateQuery()
                ->filterByPrimaryKeys($twSubscriptionTemplate->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBytwSubscriptionTemplate() only accepts arguments of type twSubscriptionTemplate or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the twSubscriptionTemplate relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return twSubscriptionMessageTypeQuery The current query, for fluid interface
     */
    public function jointwSubscriptionTemplate($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('twSubscriptionTemplate');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'twSubscriptionTemplate');
        }

        return $this;
    }

    /**
     * Use the twSubscriptionTemplate relation twSubscriptionTemplate object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   twSubscriptionTemplateQuery A secondary query class using the current class as primary query
     */
    public function usetwSubscriptionTemplateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->jointwSubscriptionTemplate($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'twSubscriptionTemplate', 'twSubscriptionTemplateQuery');
    }

    /**
     * Filter the query by a related twSubscriptionMessage object
     *
     * @param   twSubscriptionMessage|PropelObjectCollection $twSubscriptionMessage  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   twSubscriptionMessageTypeQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBytwSubscriptionMessage($twSubscriptionMessage, $comparison = null)
    {
        if ($twSubscriptionMessage instanceof twSubscriptionMessage) {
            return $this
                ->addUsingAlias(twSubscriptionMessageTypePeer::ID, $twSubscriptionMessage->getTypeId(), $comparison);
        } elseif ($twSubscriptionMessage instanceof PropelObjectCollection) {
            return $this
                ->usetwSubscriptionMessageQuery()
                ->filterByPrimaryKeys($twSubscriptionMessage->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBytwSubscriptionMessage() only accepts arguments of type twSubscriptionMessage or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the twSubscriptionMessage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return twSubscriptionMessageTypeQuery The current query, for fluid interface
     */
    public function jointwSubscriptionMessage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('twSubscriptionMessage');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'twSubscriptionMessage');
        }

        return $this;
    }

    /**
     * Use the twSubscriptionMessage relation twSubscriptionMessage object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   twSubscriptionMessageQuery A secondary query class using the current class as primary query
     */
    public function usetwSubscriptionMessageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->jointwSubscriptionMessage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'twSubscriptionMessage', 'twSubscriptionMessageQuery');
    }

    /**
     * Filter the query by a related twSubscriptionListInvitation object
     *
     * @param   twSubscriptionListInvitation|PropelObjectCollection $twSubscriptionListInvitation  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   twSubscriptionMessageTypeQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBytwSubscriptionListInvitation($twSubscriptionListInvitation, $comparison = null)
    {
        if ($twSubscriptionListInvitation instanceof twSubscriptionListInvitation) {
            return $this
                ->addUsingAlias(twSubscriptionMessageTypePeer::ID, $twSubscriptionListInvitation->getTypeId(), $comparison);
        } elseif ($twSubscriptionListInvitation instanceof PropelObjectCollection) {
            return $this
                ->usetwSubscriptionListInvitationQuery()
                ->filterByPrimaryKeys($twSubscriptionListInvitation->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBytwSubscriptionListInvitation() only accepts arguments of type twSubscriptionListInvitation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the twSubscriptionListInvitation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return twSubscriptionMessageTypeQuery The current query, for fluid interface
     */
    public function jointwSubscriptionListInvitation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('twSubscriptionListInvitation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'twSubscriptionListInvitation');
        }

        return $this;
    }

    /**
     * Use the twSubscriptionListInvitation relation twSubscriptionListInvitation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   twSubscriptionListInvitationQuery A secondary query class using the current class as primary query
     */
    public function usetwSubscriptionListInvitationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->jointwSubscriptionListInvitation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'twSubscriptionListInvitation', 'twSubscriptionListInvitationQuery');
    }

    /**
     * Filter the query by a related twSubscriptionMailQueue object
     *
     * @param   twSubscriptionMailQueue|PropelObjectCollection $twSubscriptionMailQueue  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   twSubscriptionMessageTypeQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBytwSubscriptionMailQueue($twSubscriptionMailQueue, $comparison = null)
    {
        if ($twSubscriptionMailQueue instanceof twSubscriptionMailQueue) {
            return $this
                ->addUsingAlias(twSubscriptionMessageTypePeer::ID, $twSubscriptionMailQueue->getTypeId(), $comparison);
        } elseif ($twSubscriptionMailQueue instanceof PropelObjectCollection) {
            return $this
                ->usetwSubscriptionMailQueueQuery()
                ->filterByPrimaryKeys($twSubscriptionMailQueue->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBytwSubscriptionMailQueue() only accepts arguments of type twSubscriptionMailQueue or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the twSubscriptionMailQueue relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return twSubscriptionMessageTypeQuery The current query, for fluid interface
     */
    public function jointwSubscriptionMailQueue($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('twSubscriptionMailQueue');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'twSubscriptionMailQueue');
        }

        return $this;
    }

    /**
     * Use the twSubscriptionMailQueue relation twSubscriptionMailQueue object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   twSubscriptionMailQueueQuery A secondary query class using the current class as primary query
     */
    public function usetwSubscriptionMailQueueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->jointwSubscriptionMailQueue($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'twSubscriptionMailQueue', 'twSubscriptionMailQueueQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   twSubscriptionMessageType $twSubscriptionMessageType Object to remove from the list of results
     *
     * @return twSubscriptionMessageTypeQuery The current query, for fluid interface
     */
    public function prune($twSubscriptionMessageType = null)
    {
        if ($twSubscriptionMessageType) {
            $this->addUsingAlias(twSubscriptionMessageTypePeer::ID, $twSubscriptionMessageType->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

	// symfony_i18n behavior
	
	/**
	 * Adds a JOIN clause to the query using the i18n relation
	 *
	 * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    twSubscriptionMessageTypeQuery The current query, for fluid interface
	 */
	public function joinI18n($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
	  if (null === $culture)
	  {
	    $culture = sfPropel::getDefaultCulture();
	  }
	
	  $relationName = $relationAlias ? $relationAlias : 'twSubscriptionMessageTypeI18n';
	  return $this
	    ->jointwSubscriptionMessageTypeI18n($relationAlias, $joinType)
	    ->addJoinCondition($relationName, $relationName . '.Culture = ?', $culture);
	}
	
	/**
	 * Adds a JOIN clause to the query and hydrates the related I18n object.
	 * Shortcut for $c->joinI18n($culture)->with()
	 *
	 * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    twSubscriptionMessageTypeQuery The current query, for fluid interface
	 */
	public function joinWithI18n($culture = null, $joinType = Criteria::LEFT_JOIN)
	{
	  $this
	    ->joinI18n($culture, null, $joinType)
	    ->with('twSubscriptionMessageTypeI18n');
	  $this->with['twSubscriptionMessageTypeI18n']->setIsWithOneToMany(false);
	  return $this;
	}
	
	/**
	 * Use the I18n relation query object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    twSubscriptionMessageTypeI18nQuery A secondary query class using the current class as primary query
	 */
	public function useI18nQuery($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
	  return $this
	    ->joinI18n($culture, $relationAlias, $joinType)
	    ->useQuery($relationAlias ? $relationAlias : 'twSubscriptionMessageTypeI18n', 'twSubscriptionMessageTypeI18nQuery');
	}

} // BasetwSubscriptionMessageTypeQuery