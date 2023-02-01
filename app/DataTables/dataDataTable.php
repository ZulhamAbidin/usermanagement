<?php

namespace App\DataTables;


use Yajra\DataTables\Exports\DataTablesCollectionExport;

use App\Models\data;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class dataDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        /*  return (new EloquentDataTable($query))
            ->addColumn('action', 'data.action')
            ->setRowId('id'); */
        return datatables()->eloquent($query);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\data $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(data $model): QueryBuilder
    {
        // return $model->newQuery();
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            // ->setTableId('data-table')
            // ->columns($this->getColumns())
            // ->minifiedAjax()
            // //->dom('Bfrtip')
            // ->orderBy(1)
            // ->selectStyleSingle()
            // ->buttons([Button::make('excel'), Button::make('csv'), Button::make('pdf'), Button::make('print'), Button::make('reset'), Button::make('reload')]);
            ->setTableId('data-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
                    ->parameters([
                        'dom'          => 'Bfrtip',
                        'buttons'      => ['excel', 'csv'],
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            // Column::computed('action')
            //     ->exportable(false)
            //     ->printable(false)
            //     ->width(60)
            //     ->addClass('text-center'),
            Column::make('id'),
            Column::make('nama'),
            Column::make('nik'),
            Column::make('alamat'),
            Column::make('jenis'),
            Column::make('pendidikan'),
            Column::make('jurusan'),
            Column::make('hari'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'data_' . date('YmdHis');
    }
}
