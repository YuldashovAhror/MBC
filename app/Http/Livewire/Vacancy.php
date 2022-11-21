<?php

namespace App\Http\Livewire;

use App\Models\Vacancy as ModelsVacancy;
use App\Models\VacancyCategory;
use Livewire\Component;

class Vacancy extends Component
{

    public $categories, $vacancies  = [], $current_categories = [];

    public function mount(){
        $this->current_categories[] = 'all';
    }

    public function changeCategory($category){
        if($category != 'all'){
            if (in_array($category, $this->current_categories)) {
                unset($this->current_categories[array_search($category, $this->current_categories)]);
            } else {
                $this->current_categories[] = $category;
            }
        } else {
            if (in_array("all", $this->current_categories)) {
                unset($this->current_categories[array_search($category, $this->current_categories)]);
            } elseif ($category == 'all' && !in_array($category, $this->current_categories)) {
                $this->current_categories[] = $category;
            }
        }
    }
    public function render()
    {
        $this->categories = VacancyCategory::all();
        if (in_array("all", $this->current_categories)) {
            $this->vacancies = ModelsVacancy::all();
        } else {
            $this->vacancies = ModelsVacancy::whereIn('category_id', $this->current_categories)->get();
        }
        return view('livewire.vacancy');
    }
}
