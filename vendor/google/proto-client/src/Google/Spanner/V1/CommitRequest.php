<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Commit][google.spanner.v1.Spanner.Commit].
 *
 * Generated from protobuf message <code>google.spanner.v1.CommitRequest</code>
 */
class CommitRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The session in which the transaction to be committed is running.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     */
    private $session = '';
    /**
     * The mutations to be executed when this transaction commits. All
     * mutations are applied atomically, in the order they appear in
     * this list.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.Mutation mutations = 4;</code>
     */
    private $mutations;
    protected $transaction;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct();
    }

    /**
     * Required. The session in which the transaction to be committed is running.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The session in which the transaction to be committed is running.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * Commit a previously-started transaction.
     *
     * Generated from protobuf field <code>bytes transaction_id = 2;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->readOneof(2);
    }

    /**
     * Commit a previously-started transaction.
     *
     * Generated from protobuf field <code>bytes transaction_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Execute mutations in a temporary transaction. Note that unlike
     * commit of a previously-started transaction, commit with a
     * temporary transaction is non-idempotent. That is, if the
     * `CommitRequest` is sent to Cloud Spanner more than once (for
     * instance, due to retries in the application, or in the
     * transport library), it is possible that the mutations are
     * executed more than once. If this is undesirable, use
     * [BeginTransaction][google.spanner.v1.Spanner.BeginTransaction] and
     * [Commit][google.spanner.v1.Spanner.Commit] instead.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionOptions single_use_transaction = 3;</code>
     * @return \Google\Spanner\V1\TransactionOptions
     */
    public function getSingleUseTransaction()
    {
        return $this->readOneof(3);
    }

    /**
     * Execute mutations in a temporary transaction. Note that unlike
     * commit of a previously-started transaction, commit with a
     * temporary transaction is non-idempotent. That is, if the
     * `CommitRequest` is sent to Cloud Spanner more than once (for
     * instance, due to retries in the application, or in the
     * transport library), it is possible that the mutations are
     * executed more than once. If this is undesirable, use
     * [BeginTransaction][google.spanner.v1.Spanner.BeginTransaction] and
     * [Commit][google.spanner.v1.Spanner.Commit] instead.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionOptions single_use_transaction = 3;</code>
     * @param \Google\Spanner\V1\TransactionOptions $var
     * @return $this
     */
    public function setSingleUseTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Spanner\V1\TransactionOptions::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The mutations to be executed when this transaction commits. All
     * mutations are applied atomically, in the order they appear in
     * this list.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.Mutation mutations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutations()
    {
        return $this->mutations;
    }

    /**
     * The mutations to be executed when this transaction commits. All
     * mutations are applied atomically, in the order they appear in
     * this list.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.Mutation mutations = 4;</code>
     * @param \Google\Spanner\V1\Mutation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Spanner\V1\Mutation::class);
        $this->mutations = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransaction()
    {
        return $this->whichOneof("transaction");
    }

}

