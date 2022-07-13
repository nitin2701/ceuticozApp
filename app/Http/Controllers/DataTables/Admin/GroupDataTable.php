<?php
namespace App\Http\Controllers\DataTables\Admin;
use App\Base\Controllers\DataTableController;
use App\Models\Group;

class GroupDataTable extends DataTableController
{
      protected  $parameters = [];
    /**
     * @var string
     */
    protected $model = Group::class;

    /**
     * Columns to show
     *
     * @var array
     */
    protected $columns = ['name','is_master','is_active'];

    /**
     * Columns of relations, relation name as key, relation property as value
     *
     * @var array
     */
    protected $eager_columns = [];

    /**
     * Common columns for translation
     *
     * @var array
     */
    protected $common_columns = [ ];

    protected $boolean_columns =  [];

    /**
     * Count columns for count
     *
     * @var array
     */
    protected $count_columns = [];

    /**
     * @var bool
     */
    protected $ops = true;
    
    protected $ops_actions = ['edit','delete'];
    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $groups = Group::query();
        return $this->applyScopes($groups);
    }
    
}
