<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Task;
use Livewire\Component;

class TasksComp extends Component
{
    public $user;
    public $new_task;
    public $Task_arr;
    public $editId = 0 ;

    public function updateTask()
    {
        if($this->editId) {
            $task = Task::find($this->editId);
            $task->task = $this->new_task;
            $task->save();
            $this->Task_arr = Task::where('user_id', $this->user->id)->get();
            $this->editId=0;
        }
    }
    

    public function goToEdit($id)
    {
        $task = Task::find($id);
        $this->new_task = $task->task;
        $this->editId = $task->id;
    }

    public function deleteTask($id) 
    {
        Task::where('id', $id)->delete();
        $this->Task_arr = Task::where('user_id', $this->user->id)->get();
        // $this->Task_arr = $this->Task_arr->where('id', '!=',$id);
    }

    public function addNewTask()
    {
        $newtask = new Task;
        $newtask->user_id = $this->user->id;
        $newtask->task = $this->new_task;
        $newtask->save();
        $this->Task_arr = Task::where('user_id', $this->user->id)->get();
    }


    public function mount($userId)
    {

        $this->user = User::find($userId);
        $this->Task_arr = Task::where('user_id', $userId)->get();
        
    }

    public function render()
    {
        return view('livewire.tasks-comp');
    }
}
