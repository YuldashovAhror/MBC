<?php

namespace App\Http\Livewire;

use App\Models\NewPromotion;
use Livewire\Component;

class News extends Component
{   
    public $news, $news_years, $current_year;
    
    public function mount(){
        $this->news_years = NewPromotion::select('year')->distinct()->orderByDesc('year')->get();
        
        $this->current_year = $this->news_years[0]->year;
    }
    
    public function changeYear($year){
        $this->current_year = $year;
    }
    
    public function render()
    {
        $this->news_years = NewPromotion::select('year')->distinct()->orderByDesc('year')->get();
        $this->news = NewPromotion::where('year', $this->current_year)->get();
        return view('livewire.news');
    }
}
