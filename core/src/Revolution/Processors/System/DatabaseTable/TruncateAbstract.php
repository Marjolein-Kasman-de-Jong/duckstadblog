<?php
/*
 * This file is part of MODX Revolution.
 *
 * Copyright (c) MODX, LLC. All Rights Reserved.
 *
 * For complete copyright and license information, see the COPYRIGHT and LICENSE
 * files found in the top-level directory of this distribution.
 */

namespace MODX\Revolution\Processors\System\DatabaseTable;

use MODX\Revolution\Processors\DriverSpecificProcessor;

/**
 * @package MODX\Revolution\Processors\System\DatabaseTable
 */
abstract class TruncateAbstract extends DriverSpecificProcessor
{
    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return $this->modx->hasPermission('database_truncate');
    }

    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['system_info'];
    }

    /**
     * @return array|mixed|string
     */
    public function process()
    {
        $table = $this->getProperty('t', false);
        if (empty($table)) {
            return $this->failure($this->modx->lexicon('truncate_table_err'));
        }

        if (!$this->truncate($table)) {
            $output = $this->failure($this->modx->lexicon('truncate_table_err'));
        } else {
            $this->logManagerAction();
            $output = $this->success();
        }
        return $output;
    }

    /**
     * Truncate a database table
     * @param string $table
     * @return boolean
     */
    abstract public function truncate($table);

    /**
     * Log a manager action showing the truncated table
     * @return void
     */
    public function logManagerAction()
    {
        if ($this->modx->error->status) {
            $this->modx->logManagerAction('database_truncate', 'table', $this->getProperty('t'));
        }
    }
}




