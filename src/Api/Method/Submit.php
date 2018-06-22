<?php

namespace XRPHP\Api\Method;

use XRPHP\Api\Field;

/**
 * Submit Method Class
 *
 * The submit method applies a transaction and sends it to the network to be confirmed and included in future ledgers.
 *
 * https://developers.ripple.com/submit.html Submit method documentation.
 */
class Submit extends AbstractMethod
{
    /**
     * Constructor.
     *
     * @param array|null $params
     * @throws \XRPHP\Exception\InvalidParameterException
     * @throws \XRPHP\Exception\TransactionTypeFieldException
     */
    public function __construct(array $params = null)
    {
        // GENERATED CODE FROM bin/generate.php types
        // BEGIN GENERATED
        $this->addField(new Field([
            'name' => 'tx_blob',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'tx_json',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'secret',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'passphrase',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'seed',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'seed_hex',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'key_type',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'fail_hard',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'offline',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'build_path',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'fee_mult_max',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'fee_div_max',
            'required' => false
        ]));

        // END GENERATED

        parent::__construct($params);
    }
}