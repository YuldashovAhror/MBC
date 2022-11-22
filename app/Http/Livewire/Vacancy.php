<?php

namespace App\Http\Livewire;

use App\Models\Vacancy as ModelsVacancy;
use App\Models\VacancyCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Vacancy extends Component
{
    use WithPagination;

    public $categories, $current_categories = 'all', $check = 'all';
    public $count = 6;

    // public function mount(){
    //     $this->current_categories = 'all';
    // }

    public function changeCategory($category){
        
        $this->current_categories = $category;
        $this->check = $category;
        $this->count = 6;
        // dd($category);
        // if($category != 'all'){
        //     if (in_array($category, $this->current_categories)) {
        //         unset($this->current_categories[array_search($category, $this->current_categories)]);
        //         if(empty($this->current_categories)){
        //             $this->current_categories[] = 'all';
        //             $this->checkAll = true;
        //         }
        //     } else {
        //         $this->current_categories[] = $category;
        //         unset($this->current_categories[array_search('all', $this->current_categories)]);
        //         $this->checkAll = false;
        //     }
        // } else {
        //     if (in_array("all", $this->current_categories)) {
        //         unset($this->current_categories[array_search($category, $this->current_categories)]);
        //     } elseif ($category == 'all' && !in_array($category, $this->current_categories)) {
        //         $this->current_categories[] = $category;
        //     }
        // }
    }
    public function render()
    {
        $this->categories = VacancyCategory::all();
        if($this->current_categories == 'all'){
            return view('livewire.vacancy', [
                        'vacancies' => ModelsVacancy::orderBy('date', 'desc')->paginate($this->count),
                    ]);
        }else{
            return view('livewire.vacancy', [
                'vacancies' => ModelsVacancy::where('category_id', $this->current_categories)->orderBy('id')->get(),
            ]);
        }
        // if (in_array("all", $this->current_categories)) {
        //     return view('livewire.vacancy', [
        //         'vacancies' => ModelsVacancy::paginate(6),
        //     ]);
        // } else {
        //     return view('livewire.vacancy', [
        //         'vacancies' => ModelsVacancy::whereIn('category_id', $this->current_categories)->paginate(6)
        //     ]);
        // }
    }

    public function paginate()
    {
        $this->count += 6;
    }
}
