<?php
/* Icinga Web 2 | (c) 2013-2015 Icinga Development Team | GPLv2+ */

namespace Icinga\Module\Monitoring\DataView;

class Servicedowntime extends DataView
{
    /**
     * {@inheritdoc}
     */
    public function getColumns()
    {
        return array(
            'downtime_author',
            'downtime_author_name',
            'downtime_comment',
            'downtime_duration',
            'downtime_end',
            'downtime_entry_time',
            'downtime_internal_id',
            'downtime_is_fixed',
            'downtime_is_flexible',
            'downtime_is_in_effect',
            'downtime_scheduled_end',
            'downtime_scheduled_start',
            'downtime_start',
            'host_display_name',
            'host_name',
            'object_type',
            'service_description',
            'service_display_name',
            'service_host_name'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getFilterColumns()
    {
        return array(
            'host', 'host_alias',
            'hostgroup', 'hostgroup_alias', 'hostgroup_name',
            'service',
            'servicegroup', 'servicegroup_alias', 'servicegroup_name'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function isValidFilterTarget($column)
    {
        if ($column[0] === '_'
            && preg_match('/^_(?:host|service)_/', $column)
        ) {
            return true;
        }
        return parent::isValidFilterTarget($column);
    }
}
