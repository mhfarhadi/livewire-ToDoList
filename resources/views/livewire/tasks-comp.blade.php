<div class="main_dev">
    <style>
        
    </style>

    <div class="container">
        <h1 class="text-center">{{$user->name}}</h1>
        <!-- {{$new_task}} -->
        <div class="action_content mt-2">
            <button class="btn mx-1 {{$editId ? 'btn-warning' : 'btn-success'}}" wire:click="{{$editId ? 'updateTask' : 'addNewTask'}}">{{$editId ? 'Edit' : 'Add'}}</button>
            <input type="text" class="form-control mx-1 " wire:model="new_task">
        </div>
        <ul>
            @foreach ($Task_arr as $task)
            <li class="btn_box">
                <button class="btn btn-sm btn-danger delete-btn rounded-circle" wire:click="deleteTask({{$task->id}})">Del</button>
                <button class="btn btn-sm btn-warning edit-btn rounded-circle" wire:click="goToEdit({{$task->id}})">Edit</button>
                {{$task->task}}
            </li>
            @endforeach
        </ul>
    </div>
</div>
