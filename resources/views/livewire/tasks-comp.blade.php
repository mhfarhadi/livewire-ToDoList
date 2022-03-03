<div class="main_dev">

    {{-- <?php dd($inputTextSample) ?> --}}

    
    <div class="container border border-dark rounded mt-5">
        <h1 class="text-center mt-5">{{$user->name}}</h1>
        <!-- {{$new_task}} -->
        <div class="action_content p-3 mb-2 bg-gradient-danger text-white">
            <button class="btn mx-1 {{$editId ? 'btn-warning' : 'btn-success'}}" wire:click="{{$editId ? 'updateTask' : 'addNewTask'}}">{{$editId ? 'Edit' : 'Add'}}</button>
            <input type="text" class="form-control mx-1 " wire:model="new_task" >
        </div>
        <ul>
            @foreach ($Task_arr as $task)
            <li class="border-dark">
                <button class="btn btn-sm btn-danger delete-btn rounded-circle" wire:click="deleteTask({{$task->id}})">Del</button>
                <button class="btn btn-sm btn-warning edit-btn rounded-circle" wire:click="goToEdit({{$task->id}})">Edit</button>
                {{$task->task}}
            </li>
            @endforeach
            
        </ul>
    </div>
</div>
