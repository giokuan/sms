<?php

namespace App\Http\Livewire;

use App\Models\StudentGrade;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};
use App\Http\Livewire\Dish;

final class GradesTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
    * PowerGrid datasource.
    *
    * @return Builder<\App\Models\StudentGrade>
    */
    public function datasource(): Builder
    {
        return StudentGrade::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('lastname')
            ->addColumn('firstname')
            ->addColumn('student_id')
            ->addColumn('gradingperiod')
            ->addColumn('english')
            ->addColumn('filipino')
            ->addColumn('mathematics')
            ->addColumn('social_studies')
            ->addColumn('science')
            ->addColumn('home_economics')
            ->addColumn('values_education')
            ->addColumn('music')
            ->addColumn('arts')
            ->addColumn('physical_education')
            ->addColumn('health');
            // ->addColumn('average');
            // ->addColumn('created_at_formatted', fn (StudentGrade $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            // ->addColumn('updated_at_formatted', fn (StudentGrade $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [


            Column::make('LAST NAME', 'lastname'),
            Column::make('FIRST NAME', 'firstname'),
            Column::make('ID', 'student_id'),
            Column::make('G P', 'gradingperiod'),
             

            Column::make('ENG', 'english')->editOnClick(),
              

            Column::make('FIL', 'filipino'),
             

            Column::make('MATH', 'mathematics'),
               

            Column::make('S S', 'social_studies'),
               

            Column::make('SCI', 'science'),
             

            Column::make('H E', 'home_economics'),
               

            Column::make('V E', 'values_education'),
             

            Column::make('MUSIC', 'music'),
          

            Column::make('ARTS', 'arts'),
         

            Column::make('P E', 'physical_education'),
              

            Column::make('HEALTH', 'health'),
               

            // Column::make('AVE', 'average'),
           

            // Column::make('CREATED AT', 'created_at_formatted', 'created_at')
            //     ->searchable()
            //     ->sortable(),
             

            // Column::make('UPDATED AT', 'updated_at_formatted', 'updated_at')
            //     ->searchable()
            //     ->sortable()
               

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid StudentGrade Action Buttons.
     *
     * @return array<int, Button>
     */

    
    // public function actions(): array
    // {
    //    return [
    //        Button::make('edit', 'Edit')
                
    //            ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
    //            ->route('pages.edit-grade', ['id' => 'id']),

    //        Button::make('destroy', 'Delete')
    //            ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
    //            ->route('student-grade.destroy', ['student-grade' => 'id'])
    //            ->method('delete')
    //     ];
    // }
    

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid StudentGrade Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($student-grade) => $student-grade->id === 1)
                ->hide(),
        ];
    }
    */

    

    public ?string $name = null;

    public function onUpdatedEditable($id, $field, $value): void
    {   
        StudentGrade::query()->find($id)->update([
                $field => $value,
        ]);
    }

          
      
}