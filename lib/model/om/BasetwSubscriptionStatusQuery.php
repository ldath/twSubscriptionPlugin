<?php


/**
 * Base class that represents a query for the 'tw_subscription_status' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.6 on:
 *
 * Thu Sep 27 23:40:08 2012
 *
 * @method     twSubscriptionStatusQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     twSubscriptionStatusQuery orderByCode($order = Criteria::ASC) Order by the code column
 *
 * @method     twSubscriptionStatusQuery groupById() Group by the id column
 * @method     twSubscriptionStatusQuery groupByCode() Group by the code column
 *
 * @method     twSubscriptionStatusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     twSubscriptionStatusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     twSubscriptionStatusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     twSubscriptionStatusQuery leftJointwSubscriptionStatusI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the twSubscriptionStatusI18n relation
 * @method     twSubscriptionStatusQuery rightJointwSubscriptionStatusI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the twSubscriptionStatusI18n relation
 * @method     twSubscriptionStatusQuery innerJointwSubscriptionStatusI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the twSubscriptionStatusI18n relation
 *
 * @method     twSubscriptionStatusQuery leftJointwSubscriptionEmail($relationAlias = null) Adds a LEFT JOIN clause to the query using the twSubscriptionEmail relation
 * @method     twSubscriptionStatusQuery rightJointwSubscriptionEmail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the twSubscriptionEmail relation
 * @method     twSubscriptionStatusQuery innerJointwSubscriptionEmail($relationAlias = null) Adds a INNER JOIN clause to the query using the twSubscriptionEmail relation
 *
 * @method     twSubscriptionStatus findOne(PropelPDO $con = null) Return the first twSubscriptionStatus matching the query
 * @method     twSubscriptionStatus findOneOrCreate(PropelPDO $con = null) Return the first twSubscriptionStatus matching the query, or a new twSubscriptionStatus object populated from the query conditions when no match is found
 *
 * @method     twSubscriptionStatus findOneById(int $id) Return the first twSubscriptionStatus filtered by the id column
 * @method     twSubscriptionStatus findOneByCode(string $code) Return the first twSubscriptionStatus filtered by the code column
 *
 * @method     array findById(int $id) Return twSubscriptionStatus objects filtered by the id column
 * @method     array findByCode(string $code) Return twSubscriptionStatus objects filtered by the code column
 *
 * @package    propel.generator.plugins.twSubscriptionPlugin.lib.model.om
 */
abstract class BasetwSubscriptionStatusQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasetwSubscriptionStatusQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'twSubscriptionStatus', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new twSubscriptionStatusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     twSubscriptionStatusQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return twSubscriptionStatusQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof twSubscriptionStatusQuery) {
            return $criteria;
        }
        $query = new twSubscriptionStatusQuery();
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
     * @return   twSubscriptionStatus|twSubscriptionStatus[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = twSubscriptionStatusPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(twSubscriptionStatusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   twSubscriptionStatus A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `CODE` FROM `tw_subscription_status` WHERE `ID` = :p0';
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
            $obj = new twSubscriptionStatus();
            $obj->hydrate($row);
            twSubscriptionStatusPeer::addInstanceToPool($obj, (string) $key);
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
     * @return twSubscriptionStatus|twSubscriptionStatus[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|twSubscriptionStatus[]|mixed the list of results, formatted by the current formatter
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
     * @return twSubscriptionStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(twSubscriptionStatusPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return twSubscriptionStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(twSubscriptionStatusPeer::ID, $keys, Criteria::IN);
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
     * @return twSubscriptionStatusQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(twSubscriptionStatusPeer::ID, $id, $comparison);
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
     * @return twSubscriptionStatusQuery The current query, for fluid interface
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

        return $this->addUsingAlias(twSubscriptionStatusPeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query by a related twSubscriptionStatusI18n object
     *
     * @param   twSubscriptionStatusI18n|PropelObjectCollection $twSubscriptionStatusI18n  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   twSubscriptionStatusQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBytwSubscriptionStatusI18n($twSubscriptionStatusI18n, $comparison = null)
    {
        if ($twSubscriptionStatusI18n instanceof twSubscriptionStatusI18n) {
            return $this
                ->addUsingAlias(twSubscriptionStatusPeer::ID, $twSubscriptionStatusI18n->getId(), $comparison);
        } elseif ($twSubscriptionStatusI18n instanceof PropelObjectCollection) {
            return $this
                ->usetwSubscriptionStatusI18nQuery()
                ->filterByPrimaryKeys($twSubscriptionStatusI18n->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBytwSubscriptionStatusI18n() only accepts arguments of type twSubscriptionStatusI18n or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the twSubscriptionStatusI18n relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return twSubscriptionStatusQuery The current query, for fluid interface
     */
    public function jointwSubscriptionStatusI18n($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('twSubscriptionStatusI18n');

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
            $this->addJoinObject($join, 'twSubscriptionStatusI18n');
        }

        return $this;
    }

    /**
     * Use the twSubscriptionStatusI18n relation twSubscriptionStatusI18n object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   twSubscriptionStatusI18nQuery A secondary query class using the current class as primary query
     */
    public function usetwSubscriptionStatusI18nQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->jointwSubscriptionStatusI18n($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'twSubscriptionStatusI18n', 'twSubscriptionStatusI18nQuery');
    }

    /**
     * Filter the query by a related twSubscriptionEmail object
     *
     * @param   twSubscriptionEmail|PropelObjectCollection $twSubscriptionEmail  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   twSubscriptionStatusQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBytwSubscriptionEmail($twSubscriptionEmail, $comparison = null)
    {
        if ($twSubscriptionEmail instanceof twSubscriptionEmail) {
            return $this
                ->addUsingAlias(twSubscriptionStatusPeer::ID, $twSubscriptionEmail->getStatusId(), $comparison);
        } elseif ($twSubscriptionEmail instanceof PropelObjectCollection) {
            return $this
                ->usetwSubscriptionEmailQuery()
                ->filterByPrimaryKeys($twSubscriptionEmail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBytwSubscriptionEmail() only accepts arguments of type twSubscriptionEmail or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the twSubscriptionEmail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return twSubscriptionStatusQuery The current query, for fluid interface
     */
    public function jointwSubscriptionEmail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('twSubscriptionEmail');

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
            $this->addJoinObject($join, 'twSubscriptionEmail');
        }

        return $this;
    }

    /**
     * Use the twSubscriptionEmail relation twSubscriptionEmail object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   twSubscriptionEmailQuery A secondary query class using the current class as primary query
     */
    public function usetwSubscriptionEmailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->jointwSubscriptionEmail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'twSubscriptionEmail', 'twSubscriptionEmailQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   twSubscriptionStatus $twSubscriptionStatus Object to remove from the list of results
     *
     * @return twSubscriptionStatusQuery The current query, for fluid interface
     */
    public function prune($twSubscriptionStatus = null)
    {
        if ($twSubscriptionStatus) {
            $this->addUsingAlias(twSubscriptionStatusPeer::ID, $twSubscriptionStatus->getId(), Criteria::NOT_EQUAL);
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
	 * @return    twSubscriptionStatusQuery The current query, for fluid interface
	 */
	public function joinI18n($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
	  if (null === $culture)
	  {
	    $culture = sfPropel::getDefaultCulture();
	  }
	
	  $relationName = $relationAlias ? $relationAlias : 'twSubscriptionStatusI18n';
	  return $this
	    ->jointwSubscriptionStatusI18n($relationAlias, $joinType)
	    ->addJoinCondition($relationName, $relationName . '.Culture = ?', $culture);
	}
	
	/**
	 * Adds a JOIN clause to the query and hydrates the related I18n object.
	 * Shortcut for $c->joinI18n($culture)->with()
	 *
	 * @param     string $culture Locale to use for the join condition, e.g. 'fr_FR'
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
	 *
	 * @return    twSubscriptionStatusQuery The current query, for fluid interface
	 */
	public function joinWithI18n($culture = null, $joinType = Criteria::LEFT_JOIN)
	{
	  $this
	    ->joinI18n($culture, null, $joinType)
	    ->with('twSubscriptionStatusI18n');
	  $this->with['twSubscriptionStatusI18n']->setIsWithOneToMany(false);
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
	 * @return    twSubscriptionStatusI18nQuery A secondary query class using the current class as primary query
	 */
	public function useI18nQuery($culture = null, $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
	  return $this
	    ->joinI18n($culture, $relationAlias, $joinType)
	    ->useQuery($relationAlias ? $relationAlias : 'twSubscriptionStatusI18n', 'twSubscriptionStatusI18nQuery');
	}

} // BasetwSubscriptionStatusQuery